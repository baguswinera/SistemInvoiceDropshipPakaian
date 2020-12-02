<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pemesanan_pelanggan ORDER BY id_transaksi DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rincian Pesanan</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <ul>
        <li><a href="1berandapelanggan.php">Home</a></li>
        <li><a href="1pesan.php">Pesan</a></li>
        <li><a href="1rincianpesanan.php">Rincian Pesanan</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul><br><br>

    <h2>Rincian Pesanan</h2>

    <table width='80%' border=1>

        <tr>
            <th>Nama Barang</th> <th>Jumlah Barang</th> <th>Nama Pemesan</th> <th>Alamat Pengiriman</th> <th>Telepon</th> <th>Perbarui</th>
        </tr>
        <?php  
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$user_data['nama_barang']."</td>";
            echo "<td>".$user_data['jumlah_barang']."</td>";
            echo "<td>".$user_data['nama_pemesan']."</td>";
            echo "<td>".$user_data['alamat_pengiriman']."</td>";
            echo "<td>".$user_data['telepon']."</td>";    
            echo "<td><a href='1batal.php?id_transaksi=$user_data[id_transaksi]'>Batal</a></td></tr>";        
        }
        ?>
    </table>


</body>
</html>