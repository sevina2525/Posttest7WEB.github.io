<?php 

    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "database_web";

    $db = mysqli_connect($server, $username, $password, $db_name);

if(!$db){
    die("Gagal terhubung");
}