<?php 
    require_once("controllers/LoginController.php");

    $LoginController = new LoginController();

    $method = $_SERVER["REQUEST_METHOD"]; 

    if($method == "GET"){
        $LoginController->loginView();
    } else {
        if(isset($_POST["emailOrusername"])){
            $LoginController->validateLogin($_POST);
        }
    }

?>