<?php 
class PostModel{
    public function  __construct(){
        require_once ("connect/Connect.php");
        $dbConnect = new Connect;
        $this->db  = $dbConnect->connect();
    }


    public function listPosts(){

    }

    public function createPost(){

    }

    public function editPost(){

    }

    public function deletePost(){
        
    }
}
?>