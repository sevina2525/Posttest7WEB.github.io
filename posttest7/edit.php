<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM kpop WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama_album = $_POST['nama_album'];
        $jumlah_album = $_POST['jumlah_album'];
        $nama_customer = $_POST['nama_customer'];
        $no_telepon = $_POST['no_telepon'];
        $gambar = $_POST['gambar'];

        $update = mysqli_query($db, "UPDATE kpop SET nama_album='$nama_album', jumlah_album='$jumlah_album', nama_customer='$nama_customer', no_telepon='$no_telepon', gambar='$gambar_baru' WHERE id='$id'");

        if($update){
            header("Location:index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PEMESANAN</title>
    <link rel="stylesheet" href="/stylesheet/style2.css">
</head>
<body>
    <header>
        <h2>DATA PEMESANAN ALBUM KPOP</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit Pesanan</h3>
        <form action="" method="post">
            
            <label for="">Nama Album</label><br>
            <input type="text" name="nama_album" class="form-text" value=<?=$row['nama_album'];?>><br>
            
            <label for="">Jumlah Album</label><br>
            <input type="text" name="jumlah_album" class="form-text" value=<?=$row['jumlah_album'];?>><br>
            
            <label for="">Nama Customer</label><br>
            <input type="text" name="nama_customer" class="form-text" value=<?=$row['nama_customer'];?>><br>
            
            <label for="">Nomor Telepon</label><br>
            <input type="text" name="no_telepon" class="form-text" value=<?=$row['no_telepon'];?>><br>

            <label for="">Gambar</label><br>
            <input type="file" name="gambar" value=<?=$row['gambar'];?>><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>