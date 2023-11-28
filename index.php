<?php 
    require_once('controllers/UserController.php');

    $userController = new userController;

    $method = $_SERVER["REQUEST_METHOD"];
    
    if($method == "GET"){
        if(isset($_GET["ac"])){
            switch($_GET["ac"]){
                case 's':
                    $userController->show($_GET["idu"]);
                    break;
                case 'c':
                    $userController->new();
                    break;
            }
        } else {
            $userController->index();
        }
    } else {
        if(isset($_POST["create_new_user"])) {
            $userController->create($_POST);
        } 
    }

?>