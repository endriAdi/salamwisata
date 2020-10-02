<?php 
$id_transportasi=$_GET["id"];

$ambil=$koneksi->query("SELECT * FROM transportasi WHERE id_transportasi='$id_transportasi'");
$detailtransportasi=$ambil->fetch_assoc();

$fototransportasi=array();
$ambilfoto=$koneksi->query("SELECT * FROM transportasi_foto WHERE id_transportasi='$id_transportasi'");

while($tiap=$ambilfoto->fetch_assoc())
{
	$fototransportasi[]=$tiap;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail transportasi</title>
</head>
<body>
	<h2>Detail Transportasi</h2>
	<table class="table table-bordered">
		<tr>
			<th>Nama Transportasi</th>
			<td><?php echo $detailtransportasi['nama_transportasi'] ?></td>
		</tr>
		<tr>
			<th>Keterangan</th>
			<td><?php echo $detailtransportasi['keterangan'] ?></td>
		</tr>
	</table>

	<strong>Foto transportasi :</strong> <br><br>
	<?php foreach ($fototransportasi as $key => $value): ?>
		<div class="col-md-3 text-center">
			<img src="../img/<?php echo $value["nama_transportasi_foto"] ?>" class="img-responsive margin-auto">
			<a href="index.php?halaman=hapus_transportasi_foto&idfoto=<?php echo $value["id_transportasi_foto"] ?>&idtransportasi=<?php echo $id_transportasi ?>" class="btn btn-danger" style="margin-top: 10px">Hapus</a>
		</div>
	<?php endforeach ?>

</body>
</html>