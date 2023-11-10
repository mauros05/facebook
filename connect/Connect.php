<?php 
    class Connect {
        public function connect(){
            $db = mysqli_connect("localhost", "root", "", "facebook");
            if(!$db){
                echo "Error con la conexion de la base de datos";
            }
            return $db;
        }
    }
?>