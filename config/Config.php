<?php 
    session_start();

    define("URL", "http/localhost/facebook/login.php");

    if(!isset($_SESSION["id_user"])){
        header("location:".URL);
    }
?>