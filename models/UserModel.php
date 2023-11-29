<?php 
    class UserModel {
        public function __construct() {
            require_once("connect/Connect.php");
            $dbConnect = new Connect();
            $this->db  = $dbConnect->connect();
        }


        public function index(){
            $query = "SELECT *
                    FROM users WHERE status = 1";

            $queryRes = mysqli_query($this->db, $query);

            if(mysqli_num_rows($queryRes) > 0 ){
                $i = 0;
                while($rows = mysqli_fetch_assoc($queryRes)){
                    $data["id_user"][$i]     = $rows["id_user"];
                    $data["first_name"][$i]  = $rows["first_name"];
                    $data["middle_name"][$i] = $rows["middle_name"];
                    $data["last_name"][$i]   = $rows["last_name"];
                    $data["email"][$i]       = $rows["email"];
                    $data["password"][$i]    = $rows["password"];
                    $data["username"][$i]    = $rows["user_name"];
                    $i++;
                }

                return $data;
            } else {
                return "No se encontraron usuarios registrados";
            }
        }

        public function show($id){
            $query = "SELECT * 
                    FROM users 
                    WHERE id_user =".$id;
            
            $queryRes = mysqli_query($this->db, $query);

            if(mysqli_num_rows($queryRes) > 0){
                while($rows = mysqli_fetch_assoc($queryRes)){
                    $data["id_user"]     = $rows["id_user"];
                    $data["first_name"]  = $rows["first_name"];
                    $data["middle_name"] = $rows["middle_name"];
                    $data["last_name"]   = $rows["last_name"];
                    $data["email"]       = $rows["email"];
                    $data["password"]    = $rows["password"];
                    $data["username"]    = $rows["user_name"];
                    $data["full_name"]   = $rows["first_name"]." ".$rows["middle_name"]." ".$rows["last_name"];
                }

                return $data;
            } else {
                return "Usuario no encontrado";
            }
        }

        public function create($data){
            $query = "INSERT INTO users(first_name, middle_name, last_name, email, password, user_name)
                            VALUES('".$data["first_name"]."',
                                   '".$data["middle_name"]."',
                                   '".$data["last_name"]."',
                                   '".$data["email"]."',
                                   '".$data["password"]."',
                                   '".$data["user_name"]."')";
            

            $queryRes = mysqli_query($this->db, $query);

            if(!$queryRes){
                $res["flag"] = 0;
                $res["res_message"] = "Hubo un error al guardar el apartamento";
                return $res;
            }else {
                $res["flag"] = 1;
                $res["res_message"] = "Guardado Exitoso";
                return $res;
            }
        }

        public function edit($id){
            $query = "SELECT * 
                    FROM users 
                    WHERE id_user =".$id;
            
            $queryRes = mysqli_query($this->db, $query);

            if(mysqli_num_rows($queryRes) > 0){
                while($rows = mysqli_fetch_assoc($queryRes)){
                    $data["id_user"]     = $rows["id_user"];
                    $data["first_name"]  = $rows["first_name"];
                    $data["middle_name"] = $rows["middle_name"];
                    $data["last_name"]   = $rows["last_name"];
                    $data["email"]       = $rows["email"];
                    $data["password"]    = $rows["password"];
                    $data["username"]    = $rows["user_name"];
                    $data["full_name"]   = $rows["first_name"]." ".$rows["middle_name"]." ".$rows["last_name"];
                }

                return $data;
            } else {
                return "Usuario no encontrado";
            }
        }

        public function update($data){
            $queryVerificar = "SELECT * 
                             FROM users 
                             WHERE id_user ='".$data["id_user"]."'
                             AND first_name = '".$data["first_name"]."'
                             AND middle_name ='".$data["middle_name"]."'
                             AND last_name ='".$data["last_name"]."'
                             AND email ='".$data["email"]."'
                             AND password ='".$data["password"]."'
                             AND user_name ='".$data["username"]."'";

            $resQueryVerificar = mysqli_query($this->db, $queryVerificar);

            if(mysqli_num_rows($resQueryVerificar) == 0){
                $queryUpdate = "UPDATE users SET first_name  ='".$data["first_name"]."',
                                                 middle_name ='".$data["middle_name"]."',
                                                 last_name   = '".$data["last_name"]."',
                                                 email       = '".$data["email"]."',
                                                 password    = '".$data["password"]."',
                                                 user_name   ='".$data["username"]."'
                                                 WHERE id_user =".$data["id_user"];
                
                $resEdit = mysqli_query($this->db, $queryUpdate);

                if(!$resEdit){
                    return "No se ha podido editar al usuario";
                } else {
                    $res["message"] = "El usuario ha sido editado exitosamente";
                    $res["id_user"] = $data["id_user"];
                    return $res;
                }   
            } else {
                return "El usario ya existe";
            }
        }

        public function delete($id){
            $query = "UPDATE users SET status = 0 WHERE id_user =".$id;
            
            $resQuery = mysqli_query($this->db, $query);

            if(!$resQuery){
                return "Hubo un error al borrar al Usuario";
            } else {
                return "Usuario borrado exitosamente";
            }
        }
    }

?>