<?php 

$conn = mysqli_connect("localhost", "root" , "", "jual_mobil");

echo $conn->connect_errno?'Koneksi gagal :'.
$conn->connect_error:'';
?>