<?php 
    class UserController {
        function __construct() {
            require_once("models/UserModel.php")
            $this->UserModel = new UserModel();
        }

        public function index() {
            $data["Title"] = "Login";

            require_once "views/Templates/Header.php";
            require_once "views/UserViews/index.php";
            require_once "views/Templates/Footer.php";
        }
    }
?>