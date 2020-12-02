<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id_user DESC");
?>

<html>
<head>    
    <title>Manajemen Akun</title>
</head>

<body>
<a href="0add.php">Buat Akun</a><br/><br/>

    <h2>Daftar Akun Pengguna</h2>

    <table width='80%' border=1>

    <tr>
        <th>Username</th> <th>Password</th> <th>Level</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['password']."</td>";
        echo "<td>".$user_data['level']."</td>";    
        echo "<td><a href='0delete.php?id_user=$user_data[id_user]'>Delete</a></td></tr>";        
    }
    ?>
    </table><br><br>

    <a href="logout.php">Logout</a>
</body>
</html>
