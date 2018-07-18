<?php 
include 'koneksi.php';
$idmobil = $_POST['ID_MOBIL'];
$idmerekmobil = $_POST['ID_MEREK_MOBIL'];
$namamobil = $_POST['MOBIL'];
$Hargamobil = $_POST['HARGA_MOBIL'];
$Spesifikasi = $_POST['SPESIFIKASI'];

$conn->query("INSERT INTO nama_mobil VALUES('$ID_MOBIL','$ID_MEREK_MOBIL','$MOBIL','$HARGA_MOBIL','$SPESIFIKASI')");

header("location:car.php?pesan=input");
?>