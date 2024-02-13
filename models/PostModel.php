<?php 
class PostModel{
    public function  __construct(){
        require_once ("connect/Connect.php");
        $dbConnect = new Connect;
        $this->db  = $dbConnect->connect();
    }


    public function listPosts(){

    }

    public function createPost($data){
        $query = "INSERT INTO posts(user_id, text) 
                        VALUES('".$data["id_user"]."',
                               '".$data["post_text"]."')";

        var_dump($query);
        exit;

        $queryRes = mysqli_query($this->db, $query);

        if(!$queryRes){
            $res["flag"] = 0;
            $res["res_message"] = "Hubo un error al ejecutar la accion";
            return $res;
        } else {
            $res["flag"] = 1;
            $res["res_message"] = "El post se guardo correctamente";
            return $res;
        }
    }

    public function editPost(){

    }

    public function deletePost(){
        
    }
}
?>