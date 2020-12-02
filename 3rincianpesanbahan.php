<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_bahan ORDER BY kode_warna DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rincian Pesanan Bahan</title>
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

<h2>Rincian Pesanan Bahan</h2>

<table width='80%' border=1>

    <tr>
        <th>Bahan</th> <th>Jumlah</th> <th>Perbarui</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['bahan']."</td>";
        echo "<td>".$user_data['jumlah']."</td>";   
        echo "<td><a href='3batal.php?kode_warna=$user_data[kode_warna]'>Batal</a></td></tr>";        
    }
    ?>
</table>
</body>
</html>