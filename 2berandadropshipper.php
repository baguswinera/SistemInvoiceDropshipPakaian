<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pemesanan_pelanggan ORDER BY id_transaksi DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pesanan</title>
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

<h2>Daftar Pesanan</h2>

<table width='80%' border=1>

    <tr>
        <th>Nama Barang</th> <th>Jumlah Barang</th> <th>Nama Pemesan</th> <th>Alamat Pengiriman</th> <th>Telepon</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama_barang']."</td>";
        echo "<td>".$user_data['jumlah_barang']."</td>";
        echo "<td>".$user_data['nama_pemesan']."</td>";
        echo "<td>".$user_data['alamat_pengiriman']."</td>";
        echo "<td>".$user_data['telepon']."</td>";          
    }
    ?>
</table><br><br>

<a href="2view1.php">Lihat Barang Saja</a><br>
<a href="2view2.php">Lihat Pemesan Saja</a>

</body>
</html>