<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $kode_barang = $_POST['kode_barang'];

    $nama_barang = $_POST['nama_barang'];
    $bahan = $_POST['stok'];
    $kode_warna = $_POST['kode_warna'];
    $stok = $_POST['stok'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE pemesanan_toko SET nama_barang='$nama_barang',bahan='$bahan',kode_warna='$kode_warna',stok='$stok' WHERE kode_barang=$kode_barang");

    // Redirect to homepage to display updated user in list
    header("Location: 3stokpakaian.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kode_barang = $_GET['kode_barang'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pemesanan_toko WHERE kode_barang=$kode_barang");

while($user_data = mysqli_fetch_array($result))
{
    $nama_barang = $_POST['nama_barang'];
    $bahan = $_POST['bahan'];
    $kode_warna = $_POST['kode_warna'];
    $stok = $_POST['stok'];
}
?>
<html>
<head>  
    <title>Edit Stok Pakaian</title>
</head>

<body>
    <a href="3stokpakaian.php">Kembali</a>
    <br/><br/>

    <h2>Edit Stok Pakaian</h2>

    <form name="update_user" method="post" action="3edit.php">
        <table border="0">
            <tr> 
                <td>nama_barang</td>
                <td><input type="text" name="nama_barang" value=<?php echo $nama_barang;?>></td>
            </tr>
            <tr> 
                <td>bahan</td>
                <td><input type="text" name="bahan" value=<?php echo $bahan;?>></td>
            </tr>
            <tr> 
                <td>kode_warna</td>
                <td><input type="text" name="kode_warna" value=<?php echo $kode_warna;?>></td>
            </tr>
            <tr> 
                <td>stok</td>
                <td><input type="text" name="stok" value=<?php echo $stok;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="kode_barang" value=<?php echo $_GET['kode_barang'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
