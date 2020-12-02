<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $kode_warna=$_POST['kode_warna'];
    $bahan=$_POST['bahan'];
    $stok=$_POST['stok'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE tb_supply SET kode_warna='$kode_warna',bahan='$bahan',stok='$stok' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: 4berandasupplier.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tb_supply WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $kode_warna = $user_data['kode_warna'];
    $bahan = $user_data['bahan'];
    $stok = $user_data['stok'];
}
?>
<html>
<head>  
    <title>Edit Stok Bahan</title>
</head>

<body>
    <a href="4berandasupplier.php">Stok</a>
    <br/><br/>

    <h2>Edit Stok Bahan</h2>

    <form name="update_user" method="post" action="4edit.php">
        <table border="0">
            <tr> 
                <td>kode_warna</td>
                <td><input type="text" name="kode_warna" value=<?php echo $kode_warna;?>></td>
            </tr>
            <tr> 
                <td>bahan</td>
                <td><input type="text" name="bahan" value=<?php echo $bahan;?>></td>
            </tr>
            <tr> 
                <td>stok</td>
                <td><input type="text" name="stok" value=<?php echo $stok;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
