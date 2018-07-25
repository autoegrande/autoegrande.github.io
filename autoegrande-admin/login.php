<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['loginusername'];
$password = $_POST['loginpassword'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$_data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");


// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($_data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:../view/view_diagram_cars.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>
