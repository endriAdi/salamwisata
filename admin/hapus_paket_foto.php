<?php  
$id_foto=$_GET["idfoto"];
$id_paket=$_GET["idpaket"];

//ambil data
$ambilfoto=$koneksi->query("SELECT * FROM paket_foto WHERE id_paket_foto='$id_foto'");
$detailfoto=$ambilfoto->fetch_assoc();

$namafilefoto=$detailfoto["nama_paket_foto"];
//hapus file foto dari folder
unlink("../img".$namafilefoto);

//menghapus data
$koneksi->query("DELETE FROM paket_foto WHERE id_paket_foto='$id_foto'");
echo "<script>alert ('Produk Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=paket';</script>";
?>