<?php 
    class LoginController {
        public function __construct(){
            require_once("models/LoginModel.php");
            $loginModel = new LoginModel();
        }

        public function loginView(){
            $data["Title"] = "Login";

            require_once("views/Templates/Header.php");
            require_once("views/LoginViews/login.php");
            require_once("views/Templates/Footer.php");
        }


    }
?>