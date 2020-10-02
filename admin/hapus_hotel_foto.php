<?php  
$id_foto=$_GET["idfoto"];
$id_hotel=$_GET["idhotel"];

//ambil data
$ambilfoto=$koneksi->query("SELECT * FROM hotel_foto WHERE id_hotel_foto='$id_foto'");
$detailfoto=$ambilfoto->fetch_assoc();

$namafilefoto=$detailfoto["nama_hotel_foto"];
//hapus file foto dari folder
unlink("../img".$namafilefoto);

//menghapus data
$koneksi->query("DELETE FROM hotel_foto WHERE id_hotel_foto='$id_foto'");
echo "<script>alert ('Produk Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=hotel';</script>";
?>