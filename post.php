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
            }
        } else{
            echo "NOT FOUND 404";
        }
    } else {

    }



?>