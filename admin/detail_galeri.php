<?php 
$id_galeri=$_GET["id"];

$ambil=$koneksi->query("SELECT * FROM galeri WHERE id_galeri='$id_galeri'");
$detailgaleri=$ambil->fetch_assoc();

$fotogaleri=array();
$ambilfoto=$koneksi->query("SELECT * FROM galeri WHERE id_galeri='$id_galeri'");

while($tiap=$ambilfoto->fetch_assoc())
{
	$fotogaleri[]=$tiap;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail galeri</title>
</head>
<body>
	<h2>Detail galeri</h2>
	<strong>Foto galeri :</strong> <br><br>
	<?php foreach ($fotogaleri as $key => $value): ?>
		<div class="col-md-3 text-center">
			<img src="../img/<?php echo $value["foto_galeri"] ?>" class=" margin-auto">
			<a href="index.php?halaman=hapus_galeri_foto&idfoto=<?php echo $value["id_galeri"] ?>&idgaleri=<?php echo $id_galeri ?>" class="btn btn-danger" style="margin-top: 10px">Hapus</a>
		</div>
	<?php endforeach ?>

</body>
</html>