<?php 
$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'jual_mobil';

$conn = new mysqli ("localhost", "root" , "", "jual_mobil");

echo $conn->connect_errno?'Koneksi gagal :'.
$conn->connect_error:'';
?>