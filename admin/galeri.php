<!DOCTYPE html>
<html>
<head>
	<title>Galeri</title>
</head>
<body>
	<h2>Galeri</h2>
	<a href="index.php?halaman=tambah_galeri" class="btn btn-primary" style="margin-bottom: 10px">+ Tambah Data</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Foto</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM galeri"); ?>
			<?php while($pecah=$ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah["foto_galeri"] ?></td>
				<td class="p-2">
					<a href="index.php?halaman=hapus_galeri&id= <?php echo $pecah['id_galeri']; ?>" class="btn btn-danger ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-trash"></i></a>
					<a href="index.php?halaman=edit_galeri&id= <?php echo $pecah['id_galeri']; ?>" class="btn btn-warning ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-edit"></i></a>
					<a href="index.php?halaman=detail_galeri&id= <?php echo $pecah['id_galeri']; ?>" class="btn btn-info ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-edit"></i></a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php } ?>	
		</tbody>
	</table>

</body>
</html>