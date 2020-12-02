<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pesan Bahan</title>
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

<h2>Form Pemesanan Bahan</h2>
<form action="3pesanbahan.php" method="post">
    <table width="35%" border="0">
        <tr> 
            <td>Bahan</td>
            <td><input type="text" name="bahan"></td>
        </tr>
        <tr> 
            <td>Jumlah</td>
            <td><input type="text" name="jumlah"></td>
        </tr>
            <td></td>
            <td><input type="submit" name="Submit" value="PESAN"></td>
        </tr>
    </table>
</form>

<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $bahan = $_POST['bahan'];
    $jumlah = $_POST['jumlah'];

    
    include_once("config.php");
    
    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO tb_bahan(bahan, jumlah) VALUES ('$bahan', '$jumlah')");

    echo "Pesanan anda akan diproses.<a href='3rincianpesanbahan.php'>Lihat Rincian Pesanan</a>";
}
?>
</body>
</html>