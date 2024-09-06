@extends('layouts.app')
@include('components.headerHome')
@section('content')
<!-- Post Content-->
<article class="mb-4">
    @if (session('successDelete'))
    <div class="container alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('successDelete') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post Content -->
                <h2 class="post-title">{{ $post->title }}</h2>
                <p class="post-meta">
                    Posted on {{ $post->created_at->format('F j, Y') }}
                </p>
                <div class="post-body">
                    {!! nl2br(e($post->content)) !!}
                </div>
                <hr class="my-4" />
                <div class="d-flex justify-content-end mb-4">
                    <a class="btn btn-primary text-uppercase" href="{{ route('HomePosts') }}">Back to Posts</a>
                </div>
            </div>
        </div>
    </div>
</article>

<section>
    <div class="container my-2 py-2">
        <div class="row d-flex">
            <div class="col-md-12 col-lg-12">
                <div class="card text-body">
                    <div class="card-body p-4">
                        <h4 class="mb-0">Recent Comments</h4>
                        <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>

                        @foreach ($post->comments as $comment)
                        <div class="d-flex flex-start mb-4" id="comment-{{ $comment->id }}">
                            <img class="rounded-circle shadow-1-strong me-3"
                                src="https://cdn-icons-png.flaticon.com/512/6596/6596121.png" alt="avatar" width="60" height="60" />
                            <div>
                                <h6 class="fw-bold mb-1">{{ $comment->user->name }}</h6>
                                <p class="mb-0 mt-1">
                                    {{ $comment->comment }}
                                </p>
                                @if (auth()->check() && auth()->user()->id === $comment->user_id)
                                <button type="button" class="btn btn-danger btn-sm delete-comment-button" data-action="{{ route('post.comment.destroy', [$post->id, $comment->id]) }}">
                                    Delete
                                </button>
                                @endif
                            </div>
                        </div>
                        @endforeach




                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container text-body">
        <div class="row d-flex">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="d-flex flex-start w-100">
                            <img class="rounded-circle shadow-1-strong me-3"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/2048px-User-avatar.svg.png"
                                alt="avatar" width="65" height="65" />
                            <div class="w-100">
                                <h5>Add a Comment</h5>

                                <form action="{{ route('post.comment.store', $post->id) }}" method="POST">
                                    @csrf
                                    <div data-mdb-input-init class="form-outline">
                                        <textarea class="form-control" id="textAreaExample" rows="4" name="comment" required></textarea>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <button type="submit" class="btn btn-primary">
                                            Send <i class="fas fa-long-arrow-alt-right ms-1"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this comment? This action cannot be undone.
            </div>
            <div class="modal-footer">
                <form id="deleteForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const commentId = urlParams.get('comment');

        if (commentId) {
            const commentElement = document.getElementById('comment-' + commentId);
            if (commentElement) {
                commentElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-comment-button');
        const deleteForm = document.getElementById('deleteForm');
        const modal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                deleteForm.action = this.getAttribute('data-action');
                modal.show();
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>