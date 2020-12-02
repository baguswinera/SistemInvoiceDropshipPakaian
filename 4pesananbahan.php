<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_bahan ORDER BY kode_warna DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Stok</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <ul>
        <li><a href="4berandasupplier.php">Stok Bahan</a></li>
        <li><a href="4pesananbahan.php">Pesanan Bahan</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul><br><br>
    <h2>Rincian Pesanan Bahan</h2>

<table width='80%' border=1>

    <tr>
        <th>Bahan</th> <th>Jumlah</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['bahan']."</td>";
        echo "<td>".$user_data['jumlah']."</td>";   
    }
    ?>
</body>
</html>