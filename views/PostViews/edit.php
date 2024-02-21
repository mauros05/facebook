<div>
    <form action="" method="" enctype="multipart/form-data" id="edit-post">
        <div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaEdit" style="height: 100px" name="text"><?= $res["text"] ?></textarea>
                <label for="floatingTextareaEdit">Comments</label>
            </div>
        </div>
    
        <input type="number" id="user-id" value="<?= $res["user_id"]?>" name="user_id" hidden>
        <input type="number" id="post-id" value="<?= $res["post_id"]?>" name="post_id" hidden>
        <input type="text" id="create" value="update" name="action" hidden>
    
        <button type="button" id="edit-post-button" class="btn btn-danger">Save Post</button>
    </form>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-message">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</div>