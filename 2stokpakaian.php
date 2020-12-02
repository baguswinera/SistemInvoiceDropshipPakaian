<?php
session_start();
?>

<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pemesanan_toko ORDER BY kode_barang DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stok Pakaian</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <ul>
        <li><a href="2berandadropshipper.php">Daftar Pesanan</a></li>
        <li><a href="2stokpakaian.php">Stok Pakaian</a></li>
        <li><a href="2pesanpakaian.php">Pesan Pakaian</a></li>
        <li><a href="2rincianpesanantoko.php">Rincian Pesanan Toko</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul><br><br><br>

    <h2>Stok Pakaian</h2>

    <table width='80%' border=1>

    <tr>
        <th>Nama barang</th> <th>Bahan</th> <th>Kode Warna</th> <th>Stok</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama_barang']."</td>";
        echo "<td>".$user_data['bahan']."</td>";
        echo "<td>".$user_data['kode_warna']."</td>";
        echo "<td>".$user_data['stok']."</td>";    
        }
    ?>
    </table>
</body>
</html>