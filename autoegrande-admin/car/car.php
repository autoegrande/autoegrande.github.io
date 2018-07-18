<!-- Footer -->
<?php include_once "../view_navbar.php"; ?>
<!-- Footer -->


<!DOCTYPE html>
<html>
<head>
	<title>Car List AUTO E GRANDE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>MY CAR</h1>
	</div>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>NOMER</th>
			<th>ID MOBIL</th>
			<th>ID MEREK MOBIL</th>
			<th>NAMA MOBIL</th>
			<th>HARGA MOBIL</th>
			<th>SPESIFIKASI</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = $conn->query("SELECT * FROM nama_mobil")or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['ID_MOBIL']; ?></td>
			<td><?php echo $data['ID_MEREK_MOBIL']; ?></td>
			<td><?php echo $data['MOBIL']; ?></td>
			<td><?php echo $data['HARGA_MOBIL']; ?></td>
			<td><?php echo $data['SPESIFIKASI']; ?></td>
			<td>
				<a href="edit.php?ID_MOBIL=<?php echo $data['ID_MOBIL']; ?>">Edit</a> |
				<a href="hapus.php?ID_MOBIL=<?php echo $data['ID_MOBIL']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>