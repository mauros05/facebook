<?php 
    class UserModel {
        public function __construct() {
            require_once("connect/Connect.php");
            $dbConnect = new Connect();
            $this->db  = $dbConnect->connect();
        }


        public function index(){
            $query = "SELECT *
                    FROM users";

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