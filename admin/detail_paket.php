<?php 
$id_paket=$_GET["id"];

$ambil=$koneksi->query("SELECT * FROM paket WHERE id_paket='$id_paket'");
$detailpaket=$ambil->fetch_assoc();

$fotopaket=array();
$ambilfoto=$koneksi->query("SELECT * FROM paket_foto WHERE id_paket='$id_paket'");

while($tiap=$ambilfoto->fetch_assoc())
{
	$fotopaket[]=$tiap;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Paket</title>
</head>
<body>
	<h2>Detail Paket</h2>
	<table class="table table-bordered">
		<tr>
			<th>Nama Paket</th>
			<td><?php echo $detailpaket['nama_paket'] ?></td>
		</tr>
		<tr>
			<th>Harga Paket</th>
			<td>Rp. <?php echo number_format($detailpaket['harga_paket']) ?></td>
		</tr>
		<tr>
			<th>Keterangan</th>
			<td><?php echo $detailpaket['keterangan'] ?></td>
		</tr>
	</table>

	<strong>Foto Paket :</strong> <br><br>
	<?php foreach ($fotopaket as $key => $value): ?>
		<div class="col-md-3 text-center">
			<img src="../img/<?php echo $value["nama_paket_foto"] ?>" class="img-responsive margin-auto">
			<a href="index.php?halaman=hapus_paket_foto&idfoto=<?php echo $value["id_paket_foto"] ?>&idpaket=<?php echo $id_paket ?>" class="btn btn-danger" style="margin-top: 10px">Hapus</a>
		</div>
	<?php endforeach ?>

</body>
</html>