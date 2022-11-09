<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "datakpop";

    $conn = mysqli_connect($server, $nama_customer, $username, $password, $db_name);

    if(!$conn){
        die("gagal connect!! :".mysqli_connect_error());
    }