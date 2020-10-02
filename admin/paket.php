<!DOCTYPE html>
<html>
<head>
	<title>Paket</title>
</head>
<body>
	<h2>Paket</h2>
	<a href="index.php?halaman=tambah_paket" class="btn btn-primary" style="margin-bottom: 10px">+ Tambah Data</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Paket</th>
				<th>Harga</th>
				<th>Foto</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM paket"); ?>
			<?php while($pecah=$ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah["nama_paket"] ?></td>
				<td><?php echo number_format($pecah["harga_paket"]) ?></td>
				<td><?php echo $pecah["foto_paket"] ?></td>
				<td><?php echo $pecah["keterangan"] ?></td>
				<td class="p-2">
					<a href="index.php?halaman=hapus_paket&id= <?php echo $pecah['id_paket']; ?>" class="btn btn-danger ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-trash"></i></a>
					<a href="index.php?halaman=edit_paket&id= <?php echo $pecah['id_paket']; ?>" class="btn btn-warning ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-edit"></i></a>
					<a href="index.php?halaman=detail_paket&id= <?php echo $pecah['id_paket']; ?>" class="btn btn-info ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-edit"></i></a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>