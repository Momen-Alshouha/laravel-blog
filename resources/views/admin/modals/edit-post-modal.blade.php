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
                                <label for="editTitle">Title</label>
                                <div class="P-3 mb-3">
                                    <input type="text" class="form-control" id="editTitle" name="title" placeholder="Title" required>
                                </div>
                                <label for="editContent">Post Content</label>
                                <div>
                                    <textarea class="form-control" placeholder="Post Content" id="editContent" name="content" style="height: 150px;" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Update Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>