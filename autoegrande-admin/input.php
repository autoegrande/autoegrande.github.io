<?php include_once "./assets/view/view_navbar.php"; ?>

	<div class="space-navbar"></div>

	<div class="container">
		<div class="text;center">
		
			<button type="button" class="btn btn-default navbar-btn" name="navbarbtn" value="car" onclick="window.location='car.php'">Lihat Semua Data</button>
			<h3>Input data baru</h3>
			<form action="input-aksi.php" method="post">		
				<table>
					<tr>
						<td class="td-space">Id Mobil</td>
						<td><input type="text" name="ID_MOBIL"></td>					
					</tr>	
					<tr>
						<td class="td-space">Id Merek Mobil</td>
						<td><input type="text" name="ID_MEREK_MOBIL"></td>					
					</tr>	
					<tr>
						<td class="td-space">Nama Mobil</td>
						<td><input type="text" name="MOBIL"></td>					
					</tr>	
					<tr>
						<tr>
						<td class="td-space">Harga mobil</td>
						<td><input type="text" name="HARGA_MOBIL"></td>					
					</tr>
					<tr>
						<tr>
						<td class="td-space">Spesifikasi</td>
						<td><input type="text" name="SPESIFIKASI"></td>					
					</tr>		
						<td></td>
						<td><input type="submit" value="Simpan"></td>					
					</tr>				
				</table>
			</form>
		</div>
	</div>

	<div class="space-navbar"></div>

<?php include_once "./assets/view/view_footer.php"; ?>
