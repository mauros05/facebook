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
                         p.user_id,
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
                    $data["post_id"][$i]   = $rows["post_id"];
                    $data["user_id"][$i]   = $rows["user_id"];
                    $data["user_name"][$i] = $rows["user_name"];
                    $data["text"][$i]      = $rows["text"];
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
                        VALUES('".$data["user_id"]."',
                               '".$data["text"]."')";

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

    public function updatePost($data){
        $querySearch = "SELECT * 
                        FROM posts 
                        WHERE post_id=".$data["post_id"]."
                        AND user_id=".$data["user_id"];

        $resQuerySearch = mysqli_query($this->db, $querySearch);

        if(mysqli_num_rows($resQuerySearch) == 1){
            $queryUpdate = "UPDATE posts SET text ='".$data["text"]."' 
                                    WHERE post_id=".$data["post_id"]."
                                    AND user_id=".$data["user_id"];

            $resQueryUpdate = mysqli_query($this->db, $queryUpdate);

            if(!$resQueryUpdate){
                $res["flag"] = 0;
                $res["res_message"] = "No se ha podido actualizar el post";
                return $res;
            } else {
                $res["flag"] = 1;
                $res["res_message"] = "El post se actualizo correctamente";
                return $res;
            }
        } else {
            $res["flag"] = 0;
            $res["res_message"] = "No se ha encontrado el post que desea editar";
            return $res;
        }
    }

    public function deletePost($data){
        $query = "UPDATE posts SET status = 0 
                  WHERE post_id =".$data["postId"];

        $queryRes = mysqli_query($this->db, $query);

        if(!$queryRes){
            $res["flag"] = 0;
            $res["res_message"] = "No se ha podido actualizar el post";
            return $res;
        } else {
            $res["flag"] = 1;
            $res["res_message"] = "El post se borro correctamente";
            return $res;
        }
    }
}
?>