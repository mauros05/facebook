<?php 
    class LoginController {
        function __construct() {
            require_once("models/UserModel.php")
            $this->UserModel = new UserModel();
        }
    }


?>