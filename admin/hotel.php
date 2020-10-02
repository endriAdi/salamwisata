<!DOCTYPE html>
<html>
<head>
	<title>Hotel</title>
</head>
<body>
	<h2>Hotel</h2>
	<a href="index.php?halaman=tambah_hotel" class="btn btn-primary" style="margin-bottom: 10px">+ Tambah Data</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Hotel</th>
				<th>Harga</th>
				<th>Fasilitas</th>
				<th>Foto</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM hotel"); ?>
			<?php while($pecah=$ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah["nama_hotel"] ?></td>
				<td><?php echo number_format($pecah["harga_hotel"]) ?></td>
				<td><?php echo $pecah["fasilitas_hotel"] ?></td>
				<td><?php echo $pecah["foto_hotel"] ?></td>
				<td class="p-2">
					<a href="index.php?halaman=hapus_hotel&id= <?php echo $pecah['id_hotel']; ?>" class="btn btn-danger ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-trash"></i></a>
					<a href="index.php?halaman=edit_hotel&id= <?php echo $pecah['id_hotel']; ?>" class="btn btn-warning ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-edit"></i></a>
					<a href="index.php?halaman=detail_hotel&id= <?php echo $pecah['id_hotel']; ?>" class="btn btn-info ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-edit"></i></a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>