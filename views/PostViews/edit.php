<?php var_dump($res); ?>
<div>
    <form action="" method="" enctype="multipart/form-data" id="edit-post">
        <div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="post_text"><?= $res["text"] ?></textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>
        </div>
    
        <input type="number" id="user-id" value="<?= $res["user_id"]?>" name="id_user" hidden>
        <input type="text" id="create" value="edit" name="edit" hidden>
    
        <button type="button" id="publish-post" class="btn btn-danger">Edit Post</button>
    </form>
</div>