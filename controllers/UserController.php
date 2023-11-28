<?php 
    class UserController {
        function __construct() {
            require_once("models/UserModel.php");
            $this->UserModel = new UserModel();
        }

        public function index() {
            $data["Title"] = "All Users";

            $res = $this->UserModel->index();

            require_once "views/Templates/Header.php";
            require_once "views/Components/Navbar.php";
            require_once "views/UserViews/index.php";
            require_once "views/Templates/Footer.php";
        }

        public function show($id) {
            
            $res = $this->UserModel->show($id);
            
            $data["Title"] = $res["full_name"];
            require_once "views/Templates/Header.php";
            require_once "views/Components/Navbar.php";
            require_once "views/UserViews/show.php";
            require_once "views/Templates/Footer.php";
        }

        public function new(){

        }

        public function create(){

        }

        public function edit(){
            
        }

        public function update(){

        }

        public function delete(){

        }
    }
?>