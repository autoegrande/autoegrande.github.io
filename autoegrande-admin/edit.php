<?php include_once "./assets/view/view_navbar.php"; ?>

	<div class="space-navbar"></div>

	<div class="container">
		<div class="text;center">	

	<button type="button" class="btn btn-default navbar-btn" name="navbarbtn" value="car" onclick="window.location='car.php'">Lihat Semua Data</button>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$ID_MOBIL = $_GET['ID_MOBIL'];
	$query_mysql = $conn->query("SELECT * FROM nama_mobil WHERE ID_MOBIL='$ID_MOBIL'")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)) :
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
			<td class="td-space">ID MOBIL</td>
				<td>
					<input type="text" name="ID_MOBIL" value="<?php echo $data['ID_MOBIL'] ?>">
				</td>					
			</tr>	
			<tr>
				<td class="td-space">ID MEREK MOBIL</td>
				<td><input type="text" name="ID_MEREK_MOBIL" value="<?php echo $data['ID_MEREK_MOBIL'] ?>"></td>					
			</tr>	
			<tr>
				<td class="td-space">NAMA MOBIL</td>
				<td><input type="text" name="MOBIL" value="<?php echo $data['MOBIL'] ?>"></td>					
			</tr>	
			<tr>
				<tr>
				<td class="td-space">HARGA MOBIL</td>
				<td><input type="text" name="HARGA_MOBIL" value="<?php echo $data['HARGA_MOBIL'] ?>"></td>					
			</tr>	
			<tr>
				<tr>
				<td class="td-space">SPESIFIKASI</td>
				<td><input type="text" name="SPESIFIKASI" value="<?php echo $data['SPESIFIKASI'] ?>"></td>					
			</tr>	
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php endwhile; ?>

		</div>
	</div>

	<div class="space-navbar"></div>

	<?php include_once "./assets/view/view_footer.php"; ?>