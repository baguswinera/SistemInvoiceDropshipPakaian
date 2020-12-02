<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pemesanan_dropship ORDER BY id_transaksi DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rincian Pesanan Toko</title>
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

    <h2>Rincian Pesanan</h2>

    <table width='80%' border=1>

        <tr>
            <th>Nama Barang</th> <th>Jumlah Barang</th> <th>Nama Penerima</th> <th>Alamat Pengiriman</th> <th>Telepon</th> <th>Perbarui</th>
        </tr>
        <?php  
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$user_data['nama_barang']."</td>";
            echo "<td>".$user_data['jumlah_barang']."</td>";
            echo "<td>".$user_data['nama_penerima']."</td>";
            echo "<td>".$user_data['alamat_pengiriman']."</td>";
            echo "<td>".$user_data['telepon']."</td>";    
            echo "<td><a href='2batal.php?id_transaksi=$user_data[id_transaksi]'>Batal</a></td></tr>";        
        }
        ?>
    </table>

</body>
</html>