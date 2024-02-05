<?php

class LoginModel {
    public function __construct(){
        require_once("connect/Connect.php");
        $dbConnect = new Connect();
        $this->db  = $dbConnect->connect(); 
    }

    public function validateLogin($data){
        $query = "SELECT * 
                  FROM users 
                  WHERE email='".$data["emailOrusername"]."' 
                  AND password='".$data["password"]."'";

        $resQuery = mysqli_query($this->db, $query);

        if(mysqli_num_rows($resQuery) > 0){
            while($rows = mysqli_fetch_assoc($resQuery)){
                $res["id_user"] = $rows["id_user"];
            }

            return $res;
        } else {
            $res["error_message"] = "El correo/usuario o la contraseña no son correctos";

            return $res;
        }
    }
}

?>