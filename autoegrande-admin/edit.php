<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.malasngoding.com</h3>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$ID_MOBIL = $_GET['ID_MOBIL'];
	$query_mysql = $conn->query("SELECT * FROM nama_mobil WHERE ID_MOBIL='$ID_MOBIL'")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
			<td>ID MOBIL</td>
				<td>
					<input type="text" name="ID_MOBIL" value="<?php echo $data['ID_MOBIL'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>ID MEREK MOBIL</td>
				<td><input type="text" name="ID_MEREK_MOBIL" value="<?php echo $data['ID_MEREK_MOBIL'] ?>"></td>					
			</tr>	
			<tr>
				<td>NAMA MOBIL</td>
				<td><input type="text" name="MOBIL" value="<?php echo $data['MOBIL'] ?>"></td>					
			</tr>	
			<tr>
				<tr>
				<td>HARGA MOBIL</td>
				<td><input type="text" name="HARGA_MOBIL" value="<?php echo $data['HARGA_MOBIL'] ?>"></td>					
			</tr>	
			<tr>
				<tr>
				<td>SPESIFIKASI</td>
				<td><input type="text" name="SPESIFIKASI" value="<?php echo $data['SPESIFIKASI'] ?>"></td>					
			</tr>	
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>