<?php  
$id_foto=$_GET["idfoto"];
$id_destinasi=$_GET["iddestinasi"];

//ambil data
$ambilfoto=$koneksi->query("SELECT * FROM destinasi_foto WHERE id_destinasi_foto='$id_foto'");
$detailfoto=$ambilfoto->fetch_assoc();

$namafilefoto=$detailfoto["nama_destinasi_foto"];
//hapus file foto dari folder
unlink("../img".$namafilefoto);

//menghapus data
$koneksi->query("DELETE FROM destinasi_foto WHERE id_destinasi_foto='$id_foto'");
echo "<script>alert ('Produk Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=destinasi';</script>";
?>