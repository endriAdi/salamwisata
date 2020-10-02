<?php  
$id_foto=$_GET["idfoto"];
$id_transportasi=$_GET["idtransportasi"];

//ambil data
$ambilfoto=$koneksi->query("SELECT * FROM transportasi_foto WHERE id_transportasi_foto='$id_foto'");
$detailfoto=$ambilfoto->fetch_assoc();

$namafilefoto=$detailfoto["nama_transportasi_foto"];
//hapus file foto dari folder
unlink("../img".$namafilefoto);

//menghapus data
$koneksi->query("DELETE FROM transportasi_foto WHERE id_transportasi_foto='$id_foto'");
echo "<script>alert ('Produk Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=transportasi';</script>";
?>