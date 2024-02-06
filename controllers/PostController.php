<?php 
    class PostController{
        public function __construct(){
            require_once("models/PostModel.php");
            $this->postModel = new PostModel();
        }

        public function listPosts(){
            require_once("views/Templates/Header.php");
            require_once("views/Components/Navbar.php");
            require_once("views/PostViews/index.php");
            require_once("views/Templates/Footer.php");
        }
    
        public function createPost(){
    
        }
    
        public function editPost(){
    
        }
    
        public function deletePost(){
            
        }
    }
?>