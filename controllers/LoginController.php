<?php 
    class LoginController {
        public function __construct(){
            require_once("models/LoginModel.php");
            $this->loginModel = new LoginModel();
        }

        public function loginView(){
            $data["Title"]      = "Login";
            $data["jqueryURL"]  = "assets/js/login.js";

            require_once("views/Templates/Header.php");
            require_once("views/LoginViews/login.php");
            require_once("views/Templates/Footer.php");
        }

        public function validateLogin($data){
            $res         = $this->loginModel->validateLogin($data);
            $resValidate = NULL;

            if(isset($res["id_user"])){
                session_start();
                $_SESSION = $res;
                $resValidate["flag"] = 1;
            } else {
                $resValidate["error_message"] = $res["error_message"];
                $resValidate["flag"] = 0;
            }

            echo json_encode($resValidate);
            exit;
        }

    }
