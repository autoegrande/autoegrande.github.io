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
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Id Mobil</td>
				<td><input type="text" name="ID_MOBIL"></td>					
			</tr>	
			<tr>
				<td>Id Merek Mobil</td>
				<td><input type="text" name="ID_MEREK_MOBIL"></td>					
			</tr>	
			<tr>
				<td>Nama Mobil</td>
				<td><input type="text" name="MOBIL"></td>					
			</tr>	
			<tr>
				<tr>
				<td>Harga mobil</td>
				<td><input type="text" name="HARGA_MOBIL"></td>					
			</tr>
			<tr>
				<tr>
				<td>Spesifikasi</td>
				<td><input type="text" name="SPESIFIKASI"></td>					
			</tr>		
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>