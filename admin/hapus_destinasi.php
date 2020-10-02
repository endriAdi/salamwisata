<?php 
	$ambil =$koneksi->query("SELECT * FROM destinasi WHERE id_destinasi='$_GET[id]'");
	$pecah =$ambil->fetch_assoc();
	$foto =$pecah['foto'];
	if (file_exists("../img/$foto")) 
	{
		unlink("../images/$foto");
	}
	$koneksi->query("DELETE FROM destinasi WHERE id_destinasi='$_GET[id]'");
	echo "<script>alert ('destinasi Berhasil Dihapus');</script>";
	echo "<script>location='index.php?halaman=destinasi';</script>";
  ?>