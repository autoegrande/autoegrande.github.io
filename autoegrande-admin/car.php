<!-- Footer -->
<?php include_once "./assets/view/view_navbar.php"; ?>
<!-- Footer -->


<!DOCTYPE html>
<html>
<head>
	<title>Car List AUTO E GRANDE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<br/>
	<button type="button" class="btn btn-default navbar-btn" name="navbarbtn" value="car" onclick="window.location='input.php'">Tambah Data Mobil</button>

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