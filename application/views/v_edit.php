<!DOCTYPE html>
<html>
<head>
	<title>TOUR MURCE</title>
</head>
<body>
	<center>
		<h1>Tour Murah Cekali</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($konten as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Judul</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="judul" value="<?php echo $u->judul ?>">
				</td>
			</tr>
			<tr>
				<td>Fasilitas</td>
				<td><input type="text" name="fasilitas" value="<?php echo $u->fasilitas ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $u->harga ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>