<div id="addPostModal" class="modal fade" tabindex="-1" aria-labelledby="addPostModalLabel" aria-hidden="true" data-form-action="{{ route('posts.store') }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPostModalLabel">Add New Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addPostForm" method="POST" action="{{ route('posts.store') }}">
                    @csrf
                    <div class="P-3 mb-3">
                        <input type="text" class="form-control" id="addTitle" name="title" placeholder="Title" required>
                    </div>
                    <div>
                        <textarea class="form-control" placeholder="Post Content" id="addContent" name="content" style="height: 150px;" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
