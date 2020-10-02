<?php 
$id_hotel=$_GET["id"];

$ambil=$koneksi->query("SELECT * FROM hotel WHERE id_hotel='$id_hotel'");
$detailhotel=$ambil->fetch_assoc();

$fotohotel=array();
$ambilfoto=$koneksi->query("SELECT * FROM hotel_foto WHERE id_hotel='$id_hotel'");

while($tiap=$ambilfoto->fetch_assoc())
{
	$fotohotel[]=$tiap;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail hotel</title>
</head>
<body>
	<h2>Detail Hotel</h2>
	<table class="table table-bordered">
		<tr>
			<th>Nama Hotel</th>
			<td><?php echo $detailhotel['nama_hotel'] ?></td>
		</tr>
		<tr>
			<th>Fasilitas</th>
			<td><?php echo $detailhotel['fasilitas_hotel'] ?></td>
		</tr>
	</table>

	<strong>Foto Hotel :</strong> <br><br>
	<?php foreach ($fotohotel as $key => $value): ?>
		<div class="col-md-3 text-center">
			<img src="../img/<?php echo $value["nama_hotel_foto"] ?>" class="img-responsive margin-auto">
			<a href="index.php?halaman=hapus_hotel_foto&idfoto=<?php echo $value["id_hotel_foto"] ?>&idhotel=<?php echo $id_hotel ?>" class="btn btn-danger" style="margin-top: 10px">Hapus</a>
		</div>
	<?php endforeach ?>

</body>
</html>