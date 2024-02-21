<?php
    require_once("controllers/PostController.php");

    $postController = new PostController;

    $method = $_SERVER["REQUEST_METHOD"];

    if($method == "GET"){
        if(isset($_GET["ac"])){
            switch($_GET["ac"]){
                case 'list':
                    $postController->listPosts();
                    break;
                case 'edit':
                    $postController->editPost($_GET["post_id"]);
                    break;
            }
        } else{
            echo "NOT FOUND 404";
        }
    } else {
        if(isset($_POST["action"])){
            switch($_POST["action"]){
                case 'create':
                    $postController->createPost($_POST);
                    break;
                case 'edit':
                    $postController->updatePost($_POST);
                    break;
            }

        }
    }



?>