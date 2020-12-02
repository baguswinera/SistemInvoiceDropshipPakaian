<html>
<head>
    <title>Buat Akun</title>
</head>

<body>
    <a href="0berandaadmin.php">Kembali</a>
    <br/><br/>

    <h2>Buat Akun</h2>

    <form action="0add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td>password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr> 
                <td>level</td>
                <td><input type="text" name="level"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="tambah" value="Buat"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['tambah'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_admin('username','password','level') VALUES('$username','$password','$level')");

        // Show message when user added
        echo "Akun berhasil dibuat. <a href='0berandaadmin.php'>Lihat List Akun</a>";
    }
    ?>
</body>
</html>
