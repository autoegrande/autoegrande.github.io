<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../koneksi.php';

echo "<script>alert('" . $_POST['loginusername'] . " dan " . $_POST['loginpassword'] . "')</script>";
 
// menangkap data yang dikirim dari form
$username = $_POST['loginusername'];
$password = (string) $_POST['loginpassword'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$_data = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE username_pegawai ='$username' and password_pegawai = '$password'");

var_dump($_POST);

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($_data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:./assets/view/view_jumbotron.php");
}else{
	header("location:index.php?pesan=gagal&username=" . $username . "&password=" . $password);
}
?>