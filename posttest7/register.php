<?php
    require('config.php');
    
    if(isset($_POST['daftar'])){
        $nama_username = $_POST['nama_customer'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_com = $_POST['password_com'];
        if ($password === $password_com){
            $sql = mysqli_query($conn_log,"INSERT INTO `login`(`nama_customer`, `username`, `password`) VALUES ('".$nama_customer."','".$username."','".$password."')");
            if ($sql == 0 ){
                echo '<script language = "javascript">
                alert("Daftar Gagal"); document.location = "index.php";</script>' ;
                
            }elseif($sql > 0){
                echo '<script language = "javascript">
                alert("Daftar Berhasil"); document.location = "index.php";</script>' ;
            }
        }else{
            echo '<script language = "javascript">
            alert("Password Tidak Sama"); document.location = "index.php";</script>' ;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album KPOP</title>
    <link rel="stylesheet" href="stylesheet/style.css">
        
</head>
<body >
    <div class = "container">
        <div class = "daftar" >
            <div class ="wrap">
                <form action=""method="POST" class="daftar-user">
                <p class="daftar-text" style="font-size: 2rem; font-weight: 800;">Register</p>    
                    <div class="input-group">
                        <input type="text" name="nama_customer" placeholder="Nama Customer" required>
                    </div>
                    <div class="input-group">
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password_com" placeholder="Confirmasi Password" required>
                    </div>
                    <div class="input-group">
                        <button type="submit" name="daftar" class="btn" ><b>Daftar</b></button>
                    </div>
                    <p class="login-register-text">punya Akun? <a href="login.php">Login disini</a>.</p>
                </form>
            </div>
        </div>
        </div>
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>