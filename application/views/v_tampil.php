<!DOCTYPE html>
<html>
<head>
	<title>TOUR MURCE</title>
</head>
<body>
	<center><h1>Tour Murah Cekali</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Fasilitas</th>
			<th>Harga</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($konten as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->judul ?></td>
			<td><?php echo $u->fasilitas ?></td>
			<td><?php echo $u->harga ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>