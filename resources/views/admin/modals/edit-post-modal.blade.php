<div class="modal fade" id="editPostModal" tabindex="-1" aria-labelledby="editPostModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPostModalLabel">Edit Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editPostForm" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="editTitle" name="title" placeholder="Title" required>
                        <label for="editTitle">Title</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Post Content" id="editContent" name="content" style="height: 150px;" required></textarea>
                        <label for="editContent">Post Content</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update Post</button>
                </form>
            </div>
        </div>
    </div>
</div>