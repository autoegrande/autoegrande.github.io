<?php 
include 'koneksi.php';
$ID_MOBIL = $_GET['ID_MOBIL'];
$conn->query("DELETE FROM nama_mobil WHERE ID_MOBIL='$ID_MOBIL'")or die(mysql_error());

header("location:car.php?pesan=hapus");
?>