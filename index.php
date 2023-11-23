<?php 
    require_once('controllers/UserController.php');

    $userController = new userController;

    $method = $_SERVER["REQUEST_METHOD"];

    if($method == "GET"){
        $userController->index();
    }

?>