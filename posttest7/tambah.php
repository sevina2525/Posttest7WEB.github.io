<?php 
date_default_timezone_set("Asia/Singapore");

require 'config.php';

if(isset($_POST['submit'])){
    $nama_album = $_POST['nama_album'];
    $jumlah_album = $_POST['jumlah_album'];
    $nama_customer = $_POST['nama_customer'];
    $no_telepon = $_POST['no_telepon'];
    $gambar = $_FILES['gambar']['name'];
    $x = explode('.',$gambar);
    $ekstensi = strtolower(end($x));

    $gambar_baru = "$nama_customer.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];
    $my_date = date('h:i:sa');


    if (move_uploaded_file($tmp, 'img/'.$gambar_baru)){
        $kirim = mysqli_query($db, "INSERT INTO kpop (nama_album,jumlah_album,nama_customer,no_telepon,gambar,waktu_upload) VALUES ('$nama_album','$jumlah_album','$nama_customer','$no_telepon','$gambar_baru','$my_date')");

        if($kirim){
            echo "<script> alert('Data Berhasil Dikirim');</script>";
            header("Location:list.php");
        }else {
            echo "gagal mengirim";
        }
    }
}
