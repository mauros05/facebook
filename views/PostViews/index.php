<div>
    <div id="post-form" hidden>
        <form action="">
            <div>
                <input type="text" id="post-text" class="form-control form-control-lg" />
                <label class="form-label" for="post-text">Writte your post</label>
            </div>

            <input type="number" id="user_id" value="<?= $_SESSION["id_user"] ?>" hidden>
        </form>
        <button id="publish-post" class="btn btn-danger">Post</button>
    </div>

    <button id="new-post">New Post</button>
    
    <div class="card w-75 mb-3">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Button</a>
        </div>
    </div>
    <div class="card w-75 mb-3">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Button</a>
        </div>
    </div>
    <div class="card w-75 mb-3">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Button</a>
        </div>
    </div>
</div>