<?php 
	$ambil =$koneksi->query("SELECT * FROM galeri WHERE id_galeri='$_GET[id]'");
	$pecah =$ambil->fetch_assoc();
	$foto =$pecah['foto'];
	if (file_exists("../img/$foto")) 
	{
		unlink("../img/$foto_galeri");
	}
	$koneksi->query("DELETE FROM galeri WHERE id_galeri='$_GET[id]'");
	echo "<script>alert ('galeri Berhasil Dihapus');</script>";
	echo "<script>location='index.php?halaman=galeri';</script>";
  ?>