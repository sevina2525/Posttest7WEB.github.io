<?php
    session_start();
    require('config.php');

    if(isset($_POST['login'])){
        $sql = mysqli_query($conn_log,"SELECT * FROM `login` WHERE `username` = '$_POST[username]' AND `password` = '$_POST[password]'");
        if (mysqli_num_rows($sql) == 0 ){
            echo '<script language = "javascript">
            alert("Login Gagal"); document.location = "login_admin.php";</script>' ;

        }elseif(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_array($sql)){
                if($row['nama_customer'] === "wati" && $row['username'] === "admin" && $row['password'] === "admin123"){
                    $_SESSION['login'] = $row;
                    echo '<script language = "javascript">
                    alert("Login Sebagai Admin"); document.location = "admin.php";</script>' ;
                }
                else{
                    $_SESSION['login'] = $row;
                    echo '<script language = "javascript">
                    alert("Login Berhasil"); document.location = "index.php";</script>' ;
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="stylesheet/login.css">
        
</head>
<body >
    <div class = "container">
        <div class = "login">
            <div class ="wrap">
                <form action=""method="POST" class="daftar-user">
                <p class="daftar-text" style="font-size: 2rem; font-weight: 800;">Silahkan Login</p>
                    <div class="input-group">
                        <input type="text" name="nama_customer"  placeholder="Nama Lengkap" required>
                    </div>
                    <div class="input-group">
                        <input type="text" name="username"  placeholder="Username" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-group">
                        <button type="submit" name="login" class="btn"><b>Login</b></button>
                    </div>
                    <p class="login-register-text">Belum punya akun? <a href="register.php">Registrasi disini</a>.</p>
                </form>
            </div>
        </div>
        </div>
    
</body>
</html>