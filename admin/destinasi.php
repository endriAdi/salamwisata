<!DOCTYPE html>
<html>
<head>
	<title>Destinasi</title>
</head>
<body>
	<h2>Destinasi</h2>
	<a href="index.php?halaman=tambah_destinasi" class="btn btn-primary" style="margin-bottom: 10px">+ Tambah Data</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Destinasi</th>
				<th>Foto</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM destinasi"); ?>
			<?php while($pecah=$ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah["nama_destinasi"] ?></td>
				<td><?php echo $pecah["foto_destinasi"] ?></td>
				<td><?php echo $pecah["keterangan"] ?></td>
				<td class="p-2">
					<a href="index.php?halaman=hapus_destinasi&id= <?php echo $pecah['id_destinasi']; ?>" class="btn btn-danger ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-trash"></i></a>
					<a href="index.php?halaman=edit_destinasi&id= <?php echo $pecah['id_destinasi']; ?>" class="btn btn-warning ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-edit"></i></a>
					<a href="index.php?halaman=detail_destinasi&id= <?php echo $pecah['id_destinasi']; ?>" class="btn btn-info ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-edit"></i></a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php } ?>	
		</tbody>
	</table>

</body>
</html>