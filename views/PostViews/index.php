<div>
    <div id="post-form" hidden>
        <form action="" method="" enctype="multipart/form-data" id="create-post">
            <div>
                <label class="form-label" for="post-text">Writte your post</label>
                <input type="text" id="post-text" class="form-control form-control-lg" name="post_text" value='' />
            </div>

            <input type="number" id="user-id" value="<?= $_SESSION["id_user"] ?>" name="id_user" hidden>
            <input type="text" id="create" value="create" name="action" hidden>

            <button type="button" id="publish-post" class="btn btn-danger">Post</button>
        </form>
    </div>

    <button id="new-post" class="btn btn-primary">New Post</button>

    <?php for($i = 0; $i < count($res["id_user"]); $i++){ ?>
        <div class="card w-75 mb-3">
            <div class="card-body">
                <h5 class="card-title"><?= $res["user_name"][$i] ?></h5>
                <p class="card-text"><?= $res["post_text"][$i] ?></p>
                <a href="#" class="btn btn-primary">Button</a>
            </div>
        </div>
    <?php } ?>
</div>

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