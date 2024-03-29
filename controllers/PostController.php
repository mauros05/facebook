<?php 
    class PostController{
        public function __construct(){
            require_once("models/PostModel.php");
            $this->postModel = new PostModel();
        }

        public function listPosts(){
            $data["jqueryURL"] = "assets/js/post.js";
            $data["css_url"]   = "assets/css/post.css";
            $data["Title"]     = "Facebook";

            $res = $this->postModel->listPosts();

            require_once("config/Config.php");
            require_once("views/Templates/Header.php");
            require_once("views/Components/Navbar.php");
            require_once("views/PostViews/index.php");
            require_once("views/Templates/Footer.php");
        }

        public function createPost($data){
            $res = $this->postModel->createPost($data);

            echo json_encode($res);
        }
    
        public function editPost($id){
            $data["jqueryURL"] = "assets/js/post.js";
            $data["css_url"]   = "assets/css/post.css";
            $data["Title"]     = "Edit Post";

            $res = $this ->postModel->editPost($id);

            require_once("config/Config.php");
            require_once("views/Templates/Header.php");
            require_once("views/Components/Navbar.php");
            require_once("views/PostViews/edit.php");
            require_once("views/Templates/Footer.php");
        }

        public function updatePost($data){
            $res = $this->postModel->updatePost($data);

            echo json_encode($res);
        }
    
        public function deletePost($data){
            $res = $this->postModel->deletePost($data);

            echo json_encode($res);
        }
    }
?>