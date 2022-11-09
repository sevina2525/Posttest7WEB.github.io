<?php 
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM kpop");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DATA PEMESANAN</title>
        <link rel="stylesheet" href="stylesheet/style2.css">
    </head>
    <body>
        <header>
            <h2><center>DATA PEMESANAN ALBUM</center></h2>
        </header>

        <div class="list-table">
            <h3>Daftar Pesanan</h3>
            <a href="formulir.php" class="tambah">Tambah Pesanan</a>
            <table>
                <tr class="thead">
                    <th>No</th>
                    <th nowrap>nama_album</th>
                    <th>jumlah_album</th>
                    <th>nama_customer</th>
                    <th>no_telepon</th>
                    <th>gambar</th>
                    <th>waktu upload</th>
                </tr>

                <?php 
                    $i = 1;
                    while($row = mysqli_fetch_array($result)){

                ?>

                <tr>
                    <td><?=$i;?></td>
                    <td nowrap><?=$row['nama_album']?></td>
                    <td><?=$row['jumlah_album']?></td>
                    <td><?=$row['nama_customer']?></td>
                    <td><?=$row['no_telepon']?></td>
                    <td><img src="img/<?=$row['gambar']?>" alt="" width="200px"></td>
                    <td><?=$row['waktu_upload']?></td>

                </tr>
                
                <?php
                    $i++; 
                        }
                ?>

            </table>
                
        </div>
        
    </body>
</html>