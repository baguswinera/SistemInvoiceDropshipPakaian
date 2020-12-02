<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pemesanan_pelanggan ORDER BY id_transaksi DESC");
?>

<html>
<head>
    <title>Pesanan Barang</title>
</head>

<body>
    <a href="2berandadropshipper.php">Kembali</a>
    <br/><br/>

    <h2>Daftar Barang Yang Dipesan</h2>

<table width='80%' border=1>

    <tr>
        <th>Nama Barang</th> <th>Jumlah Barang</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama_barang']."</td>";
        echo "<td>".$user_data['jumlah_barang']."</td>";      
    }
    ?>
</table>
    </body>
</html>