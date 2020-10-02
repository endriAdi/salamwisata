<?php 
$id_destinasi=$_GET["id"];

$ambil=$koneksi->query("SELECT * FROM destinasi WHERE id_destinasi='$id_destinasi'");
$detaildestinasi=$ambil->fetch_assoc();

$fotodestinasi=array();
$ambilfoto=$koneksi->query("SELECT * FROM destinasi_foto WHERE id_destinasi='$id_destinasi'");

while($tiap=$ambilfoto->fetch_assoc())
{
	$fotodestinasi[]=$tiap;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Destinasi</title>
</head>
<body>
	<h2>Detail Destinasi</h2>
	<table class="table table-bordered">
		<tr>
			<th>Nama Destinasi</th>
			<td><?php echo $detaildestinasi['nama_destinasi'] ?></td>
		</tr>
		<tr>
			<th>Keterangan</th>
			<td><?php echo $detaildestinasi['keterangan'] ?></td>
		</tr>
	</table>

	<strong>Foto Destinasi :</strong> <br><br>
	<?php foreach ($fotodestinasi as $key => $value): ?>
		<div class="col-md-3 text-center">
			<img src="../img/<?php echo $value["nama_destinasi_foto"] ?>" class="img-responsive margin-auto">
			<a href="index.php?halaman=hapus_destinasi_foto&idfoto=<?php echo $value["id_destinasi_foto"] ?>&iddestinasi=<?php echo $id_destinasi ?>" class="btn btn-danger" style="margin-top: 10px">Hapus</a>
		</div>
	<?php endforeach ?>

</body>
</html>