<?php 
	$ambil =$koneksi->query("SELECT * FROM hotel WHERE id_hotel='$_GET[id]'");
	$pecah =$ambil->fetch_assoc();
	$foto =$pecah['foto_hotel'];
	if (file_exists("../img/$foto")) 
	{
		unlink("../img/$foto");
	}
	$koneksi->query("DELETE FROM hotel WHERE id_hotel='$_GET[id]'");
	echo "<script>alert ('hotel Berhasil Dihapus');</script>";
	echo "<script>location='index.php?halaman=hotel';</script>";
  ?>