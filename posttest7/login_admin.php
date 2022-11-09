<?php
    session_start();

    require 'connect_Admin.php';

    if(isset($_POST['Login'])){
        $nama_customer = $_POST['nama_customer'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $hasil = mysqli_query($conn, "SELECT nama_customer, username, password FROM log_admin WHERE username = '$username'");

        if(mysqli_num_rows($hasil)== 1){
          $row = mysqli_fetch_assoc($hasil);
          if(password_verify($password, $row['password'])){
            $_SESSION['Login'] = $row;

            header("Location: ../admin.php");
          }else{
            $error_pass = true;

          }
        }else{
            $error_username= true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../stylesheet/style.css">

</head>
<body>
    <button onClick="myFuction()">Change Mode</button>
    <nav class="navbar">
        <h1 id="judul">Album_Kpop</h1>
    <h1 style="text-align:center;margin-top: 10%;">Login Sebagai Admin</h1>
    <form method="post" action="admin.html" >
    <table id="form-admin">
            <tr>
                <td><label for="nama_customer">Nama Customer</label></td>
                <td><input type="text" name="nama_customer" class="inputan" placeholder="nama_customer" required></td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" class="inputan" placeholder="Username" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" class="inputan" placeholder="Password" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="Login" class="inputan" placeholder="Password" required></td>
            </tr>
        </table>
    </form>
    <?php if (isset($error_pass)) {echo "<p>Password anda Salah</p>";} ?>
    <?php if (isset($error_username)) {echo "<p>Akun Tidak ditemukan</p>";} ?>
</body>
</html>