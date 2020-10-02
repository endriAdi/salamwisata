<!DOCTYPE html>
<html>
<head>
	<title>Pesanan</title>
</head>
<body>
	<h2>Pesanan</h2>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th>Nomor</th>
				<th>Alamat</th>
				<th>Foto</th>
				<th>Tgl Berangkat</th>
				<th>Tujuan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="p-2">
					<a href="index.php?halaman=hapus_pesanan&id= <?php echo $pecah['id_produk']; ?>" class="btn btn-danger ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-trash"></i></a>
					<a href="index.php?halaman=edit_pesanan&id= <?php echo $pecah['id_produk']; ?>" class="btn btn-warning ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-edit"></i></a>
					<a href="index.php?halaman=detail_pesanan&id= <?php echo $pecah['id_produk']; ?>" class="btn btn-info ml-2 mr-2  btn-block"><i class="glyphicon glyphicon-edit"></i></a>
				</td>
			</tr>
		</tbody>
	</table>

</body>
</html>