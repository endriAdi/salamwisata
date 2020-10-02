<!DOCTYPE html>
<html>
<head>
	<title>Transpostasi</title>
</head>
<body>
	<h2>Transportasi</h2>
	<a href="index.php?halaman=tambah_transportasi" class="btn btn-primary" style="margin-bottom: 10px">+ Tambah Data</a>
		<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Transportasi</th>
				<th>Foto</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM transportasi"); ?>
			<?php while($pecah=$ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah["nama_transportasi"] ?></td>
				<td><?php echo $pecah["foto_transportasi"] ?></td>
				<td><?php echo $pecah["keterangan"] ?></td>
				<td class="p-2">
					<a href="index.php?halaman=hapus_transportasi&id= <?php echo $pecah['id_transportasi']; ?>" class="btn btn-danger ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-trash"></i></a>
					<a href="index.php?halaman=edit_transportasi&id= <?php echo $pecah['id_transportasi']; ?>" class="btn btn-warning ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-edit"></i></a>
					<a href="index.php?halaman=detail_transportasi&id= <?php echo $pecah['id_transportasi']; ?>" class="btn btn-info ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-edit"></i></a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>