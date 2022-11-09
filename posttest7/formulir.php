<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALBUM KPOP</title>
    <link rel="stylesheet" href="stylesheet/style2.css">
</head>
<body>
    <header>
        <h1><b><center>DATA PEMESANAN ALBUM</center></b></h1>
    </header>
    
    <div class="form-class">
        <h3>Tambah Pesanan</h3>
        <form action="tambah.php" method="post" enctype="multipart/form-data">
            
            <label for="">Nama Album</label><br>
            <input type="text" name="nama_album" class="form-text"><br></br>
            
            <label for="">Jumlah Album</label><br>
            <input type="text" name="jumlah_album" class="form-text"><br></br>
            
            <label for="">Nama Customer</label><br>
            <input type="text" name="nama_customer" class="form-text"><br></br>
            
            <label for="">Nomor Telepon</label><br>
            <input type="text" name="no_telepon" class="form-text"><br></br>

            <label for="">Upload Bukti Pembayaran </label><br>
            <input type="file" name="gambar"><br></br>
            
            <label for="">Waktu Sekarang</label><br>
            <input type="time" name="waktu_upload"><br></br>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>
    
</body>
</html>