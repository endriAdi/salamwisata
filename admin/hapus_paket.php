<?php 
	$ambil =$koneksi->query("SELECT * FROM paket WHERE id_paket='$_GET[id]'");
	$pecah =$ambil->fetch_assoc();
	$foto =$pecah['foto'];
	if (file_exists("../img/$foto")) 
	{
		unlink("../img/$foto");
	}
	$koneksi->query("DELETE FROM paket WHERE id_paket='$_GET[id]'");
	echo "<script>alert ('paket Berhasil Dihapus');</script>";
	echo "<script>location='index.php?halaman=paket';</script>";
  ?>