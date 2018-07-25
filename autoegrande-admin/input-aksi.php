<?php 
include 'koneksi.php';
$idmobil = $_POST['ID_MOBIL'];
$idmerekmobil = $_POST['ID_MEREK_MOBIL'];
$namamobil = $_POST['NAMA_MOBIL'];
$hargamobil = $_POST['HARGA_MOBIL'];
$Spesifikasi = $_POST['SPESIFIKASI'];

$conn->query("INSERT INTO nama_mobil VALUES('$idmobil','$idmerekmobil','$namamobil','$hargamobil','$Spesifikasi')");

header("location:car.php?pesan=input");
?>