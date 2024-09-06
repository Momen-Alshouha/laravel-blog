<div class="modal fade" id="addPostModal" tabindex="-1" aria-labelledby="addPostModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPostModalLabel">Add New Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addPostForm" method="POST" action="{{ route('posts.store') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="addTitle" name="title" placeholder="Title" required>
                        <label for="addTitle">Title</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Post Content" id="addContent" name="content" style="height: 150px;" required></textarea>
                        <label for="addContent">Post Content</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save Post</button>
                </form>
            </div>
        </div>
    </div>
</div>