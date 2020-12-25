<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	echo "<script>alert('Berhasil melakukan proses login');document.location.href='home.php';</script>";
}else{
	echo "<script>alert('Gagal melakukan login, coba lagi');</script>";
	header("location:login.php?pesan=gagal");
}
?>