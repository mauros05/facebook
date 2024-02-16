<?php 
class PostModel{
    public function  __construct(){
        require_once ("connect/Connect.php");
        $dbConnect = new Connect;
        $this->db  = $dbConnect->connect();
    }


    public function listPosts(){
        $query = "SELECT p.user_id,
                         p.text,
                         p.post_id,
                         u.user_name 
                  FROM posts p 
                  INNER JOIN users u 
                  ON u.id_user = p.user_id
                  WHERE p.status = 1
                  ORDER BY p.post_id DESC";

        $queryRes = mysqli_query($this->db, $query);

        if(!$queryRes){
            return $res["error_message"] = "Hubo un error al cargar publicaciones";
        } else {
            if(mysqli_num_rows($queryRes) > 0){
                $i = 0;
                while($rows = mysqli_fetch_assoc($queryRes)){
                    $data["id_post"][$i]   = $rows["post_id"];
                    $data["id_user"][$i]   = $rows["user_id"];
                    $data["post_text"][$i] = $rows["text"];
                    $data["user_name"][$i] = $rows["user_name"];
                    $i++;
                }

                return $data;
            } else {
               return $res["message"] = "No hay publicaciones disponibles";
            }
        }
    }

    public function createPost($data){
        $query = "INSERT INTO posts(user_id, text) 
                        VALUES('".$data["id_user"]."',
                               '".$data["post_text"]."')";

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

    public function editPost($id){
        $query = "SELECT * 
                  FROM posts 
                  WHERE post_id =".$id;

        $queryRes = mysqli_query($this->db, $query);

        if(mysqli_num_rows($queryRes) > 0){
           while($rows = mysqli_fetch_assoc($queryRes)){
                $data["post_id"] = $rows["post_id"];
                $data["user_id"] = $rows["user_id"]; 
                $data["text"]    = $rows["text"]; 
           } 
           return $data;
        } else {
            return $data["error_msg"] = "No se ha encontrado ninguna publicacion";
        }
    }

    public function deletePost(){
        
    }
}
?>