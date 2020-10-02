<?php 
	$ambil =$koneksi->query("SELECT * FROM transportasi WHERE id_transportasi='$_GET[id]'");
	$pecah =$ambil->fetch_assoc();
	$foto =$pecah['foto'];
	if (file_exists("../img/$foto")) 
	{
		unlink("../img/$foto");
	}
	$koneksi->query("DELETE FROM transportasi WHERE id_transportasi='$_GET[id]'");
	echo "<script>alert ('transportasi Berhasil Dihapus');</script>";
	echo "<script>location='index.php?halaman=transportasi';</script>";
  ?>