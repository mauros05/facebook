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
            $data["Title"] = "Create New User";
            
            require_once "views/Templates/Header.php";
            require_once "views/Components/Navbar.php";
            require_once "views/UserViews/new.php";
            require_once "views/Templates/Footer.php";
        }

        public function create($data){
            $this->UserModel->create($data);
            
            header('Location: index.php');
        }

        public function edit($id){
            $data["Title"] = "Edit User";

            $res = $this->UserModel->edit($id);

            require_once "views/Templates/Header.php";
            require_once "views/Components/Navbar.php";
            require_once "views/UserViews/edit.php";
            require_once "views/Templates/Footer.php";
        }

        public function update($data){
            $this->UserModel->update($data);
        }

        public function delete(){

        }
    }
?>