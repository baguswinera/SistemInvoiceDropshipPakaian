<?php 
session_start();
 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($conn,"SELECT * FROM tb_admin where username='$username' and password=md5('$password')");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
        header("location:0berandaadmin.php");
	}	
}else{
    header("location:0admin.php?pesan=gagal");
}
 
?>