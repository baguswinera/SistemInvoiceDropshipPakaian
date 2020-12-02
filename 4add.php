<html>
<head>
    <title>Tambah Stok</title>
</head>

<body>
    <a href="4berandasupplier.php">Kembali</a>
    <br/><br/>

    <h2>Tambah Stok</h2>

    <form action="4add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>kode_warna</td>
                <td><input type="text" name="kode_warna"></td>
            </tr>
            <tr> 
                <td>bahan</td>
                <td><input type="text" name="bahan"></td>
            </tr>
            <tr> 
                <td>stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="tambah" value="Tambah"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['tambah'])) {
        $kode_warna = $_POST['kode_warna'];
        $bahan = $_POST['bahan'];
        $stok = $_POST['stok'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_supply(kode_warna,bahan,stok) VALUES('$kode_warna','$bahan','$stok')");

        // Show message when user added
        echo "Item berhasil ditambah. <a href='4berandasupplier.php'>Lihat Stok</a>";
    }
    ?>
</body>
</html>
