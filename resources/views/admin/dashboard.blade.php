@extends('admin.layout')

@section('dashboardContent')
<!-- Navbar Start -->
@include('admin.components.navbar')
<!-- Navbar End -->

<div class="container-fluid pt-4 px-4">
    <div class="col-12">

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Posts</h6>

            <!-- Add New Post Button -->
            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#addPostModal">
                Add New Post
            </button>

            <!-- Add Post Modal -->
            @include('admin.modals.add-post-modal')

            <!-- Edit Post Modal -->
            @include('admin.modals.edit-post-modal')
           
            <!-- Delete Confirmation Modal -->
            @include('admin.modals.delete-post-modal')

            <!-- Post List Table -->
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->user->name }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editPostModal" data-post-id="{{ $post->id }}" data-post-title="{{ $post->title }}" data-post-content="{{ $post->content }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-post-id="{{ $post->id }}" data-post-title="{{ $post->title }}">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--  JavaScript for Modal Handling -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle Add Post Modal
        var addPostModal = document.getElementById('addPostModal');
        addPostModal.addEventListener('show.bs.modal', function () {
            var form = addPostModal.querySelector('#addPostForm');
            form.action = '{{ route('posts.store') }}';
        });

        // Handle Edit Post Modal
        var editPostModal = document.getElementById('editPostModal');
        editPostModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; 
            var postId = button.getAttribute('data-post-id');
            var postTitle = button.getAttribute('data-post-title');
            var postContent = button.getAttribute('data-post-content');

            var form = editPostModal.querySelector('#editPostForm');
            form.action = '{{ url('admin/post') }}/' + postId+'/edit';

            var titleInput = editPostModal.querySelector('#editTitle');
            var contentTextarea = editPostModal.querySelector('#editContent');

            titleInput.value = postTitle;
            contentTextarea.textContent = postContent;
        });

        // Handle Delete Post Modal
        var deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; 
            var postId = button.getAttribute('data-post-id');
            var postTitle = button.getAttribute('data-post-title');

            var modalTitle = deleteModal.querySelector('.modal-body #postTitle');
            var form = deleteModal.querySelector('#deleteForm');

            modalTitle.textContent = postTitle;
            form.action = '{{ url('admin/post') }}/' + postId + '/delete';
        });
    });
</script>

@endsection
