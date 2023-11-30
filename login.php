<?php 
    require_once("controllers/LoginController.php");

    $LoginController = new LoginController();

    $method = $_SERVER["REQUEST_METHOD"]; 


    if($method == "GET"){
        if(isset($_GET["ac"])){

        } else {
            $LoginController->loginView();
        }
    }







?>