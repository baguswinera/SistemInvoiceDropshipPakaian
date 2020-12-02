<?php
session_start();
?>

<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pemesanan_dropship ORDER BY id_transaksi DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pesanan Pakaian</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <ul>
        <li><a href="3berandatoko.php">Daftar Pesanan Pakaian</a></li>
        <li><a href="3stokpakaian.php">Stok Pakaian</a></li>
        <li><a href="3stokbahan.php">Stok Bahan</a></li>
        <li><a href="3pesanbahan.php">Pesan Bahan</a></li>
        <li><a href="3rincianpesanbahan.php">Rincian Pesanan</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul><br><br>

    <h2>Rincian Pesanan</h2>

    <table width='80%' border=1>

        <tr>
            <th>Nama Barang</th> <th>Jumlah Barang</th> <th>Nama Penerima</th> <th>Alamat Pengiriman</th> <th>Telepon</th>
        </tr>
        <?php  
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$user_data['nama_barang']."</td>";
            echo "<td>".$user_data['jumlah_barang']."</td>";
            echo "<td>".$user_data['nama_penerima']."</td>";
            echo "<td>".$user_data['alamat_pengiriman']."</td>";
            echo "<td>".$user_data['telepon']."</td>";         
        }
        ?>
    </table>
</body>
</html>