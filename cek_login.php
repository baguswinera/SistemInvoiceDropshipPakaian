<?php 
session_start();
 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($conn,"SELECT * FROM user where username='$username' and password=md5('$password')");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="pelanggan"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pelanggan";
		header("location:1berandapelanggan.php");
 
	}else if($data['level']=="dropshipper"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "dropshipper";
		header("location:2berandadropshipper.php");
 
	}else if($data['level']=="toko"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "toko";
		header("location:3berandatoko.php");
 
	}else if($data['level']=="supplier"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "supplier";
		header("location:4berandasupplier.php");
	}	
}else{
    header("location:index.php?pesan=gagal");
}
 
?>