<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login Admin</title>
</head>
<body>
		<form action="cek_loginadmin.php" method="post">
			<input type="text" name="username" placeholder="Username"><br><br>
			<input type="password" name="password" placeholder="Password"><br>
            <?php 
	        if(isset($_GET['pesan'])){
		        if($_GET['pesan']=="gagal"){
			        echo "Username dan Password yang anda masukkan salah";
		        }
	        }
	        ?><br>
			<input type="submit" value="LOGIN"><br>
            
		</form><br>

</body>
</html>