<?php
session_start();
?>

<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_supply ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Beranda</title>
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

    <h2>Stok Bahan</h2>

    <table width='80%' border=1>

    <tr>
        <th>Kode Warna</th> <th>Bahan</th> <th>Stok</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kode_warna']."</td>";
        echo "<td>".$user_data['bahan']."</td>";
        echo "<td>".$user_data['stok']."</td>";        }
    ?>
    </table>
</body>
</html>