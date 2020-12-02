<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pesan</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <ul>
        <li><a href="2berandadropshipper.php">Daftar Pesanan</a></li>
        <li><a href="2stokpakaian.php">Stok Pakaian</a></li>
        <li><a href="2pesanpakaian.php">Pesan Pakaian</a></li>
        <li><a href="2rincianpesanantoko.php">Rincian Pesanan Toko</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul><br><br>

    <h2>Form Pemesanan Pakaian</h2>
    <form action="2pesanpakaian.php" method="post">
        <table width="35%" border="0">
            <tr> 
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr> 
                <td>Jumlah Barang</td>
                <td><input type="text" name="jumlah_barang"></td>
            </tr>
            <tr> 
                <td>Nama Penerima</td>
                <td><input type="text" name="nama_penerima"></td>
            </tr>
            <tr> 
                <td>Alamat Pengiriman</td>
                <td><input type="text" name="alamat_pengiriman"></td>
            </tr>
            <tr> 
                <td>Telepon</td>
                <td><input type="text" name="telepon"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="PESAN"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_barang = $_POST['nama_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $nama_penerima = $_POST['nama_penerima'];
        $alamat_pengiriman = $_POST['alamat_pengiriman'];
        $telepon = $_POST['telepon'];
        
        include_once("config.php");
        
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pemesanan_dropship(nama_barang,jumlah_barang,nama_penerima,alamat_pengiriman,telepon) VALUES ('$nama_barang', '$jumlah_barang', '$nama_penerima', '$alamat_pengiriman', '$telepon')");

        echo "Pesanan anda akan diproses.<a href='2rincianpesanantoko.php'>Lihat Rincian Pesanan</a>";
    }
    ?>

</body>
</html>