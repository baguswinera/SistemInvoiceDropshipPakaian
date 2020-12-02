<?php
session_start();

// Create database connection using config file
include_once("config.php");

include 'koneksi.php';

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pemesanan_toko ORDER BY kode_barang DESC");

error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Beranda</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <ul>
        <li><a href="1berandapelanggan.php">Home</a></li>
        <li><a href="1pesan.php">Pesan</a></li>
        <li><a href="1rincianpesanan.php">Rincian Pesanan</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul><br><br><br>

    <h2>Daftar Pakaian</h2>

    <form action="" method="POST">
        <input type="text" name="query" placeholder="Tulis Disini">
        <input type="submit" name="cari" value="Cari">
    </form>

    <table width='80%' border=1>

        <tr>
            <th>Nama Barang</th> 
            <th>Bahan</th> 
            <th>Kode Warna</th> 
            <th>Stok</th>
        </tr>
        <?php  
        $no = 1;

        $query = $_POST['query'];
        if ($query !=''){
            $select = mysqli_query($conn, "SELECT * FROM pemesanan_toko WHERE nama_barang LIKE '%".$query."%' OR bahan LIKE '%".$query."%' OR kode_warna LIKE '%".$query."%' ");
        }else {
            $select = mysqli_query($conn, "SELECT * FROM pemesanan_toko");
        }
        
        if(mysqli_num_rows($select)){
        while($user_data = mysqli_fetch_array($select)) {         
            echo "<tr>";
            echo "<td>".$user_data['nama_barang']."</td>";
            echo "<td>".$user_data['bahan']."</td>";
            echo "<td>".$user_data['kode_warna']."</td>";
            echo "<td>".$user_data['stok']."</td>";    
            }
        }else {
            echo '<tr><td colspan="5">Tidak Ada</td></tr>';
        }
        ?>


    </table>
    
</body>
</html>
