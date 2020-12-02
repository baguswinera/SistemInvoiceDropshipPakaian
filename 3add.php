<html>
<head>
    <title>Tambah Stok</title>
</head>

<body>
    <a href="3stokpakaian.php">Kembali</a>
    <br/><br/>

    <h2>Tambah Stok</h2>

    <form action="3add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>nama_barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr> 
                <td>bahan</td>
                <td><input type="text" name="bahan"></td>
            </tr>
            <tr> 
                <td>kode_warna</td>
                <td><input type="text" name="kode_warna"></td>
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
        $nama_barang = $_POST['nama_barang'];
        $bahan = $_POST['bahan'];
        $kode_warna = $_POST['kode_warna'];
        $stok = $_POST['stok'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pemesanan_toko(nama_barang,bahan,kode_warna,stok) VALUES('$nama_barang','$bahan','$kode_warna','$stok')");

        // Show message when user added
        echo "Item berhasil ditambah. <a href='3stokpakaian.php'>Lihat Stok</a>";
    }
    ?>
</body>
</html>
