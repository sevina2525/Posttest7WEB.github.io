<?php 

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hapus = mysqli_query($db, "DELETE FROM kpop WHERE id='$id'");

    if($hapus){
        header("Location:index.php");
    }
}