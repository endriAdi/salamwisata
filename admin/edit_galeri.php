<?php 
	$ambil =$koneksi->query("SELECT * FROM galeri WHERE id_galeri='$_GET[id]'");
	$pecah =$ambil->fetch_assoc();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Edit Galeri</title>
 </head>
 <body>
 	<form>
 		<div class="form-group">
 			<label>Foto</label> <br>
	 		<img src="../img/<?php echo $pecah['foto_galeri'] ?>" width="290">
 		</div>
 		<div class="form-group">
	 		<label>Ganti Foto</label>
	 		<input type="file" name="fotoganti" class="form-control">
	 	</div>
	 	<button class="btn btn-primary" name="edit">Simpan Perubahan</button>
 	</form>

 	<?php 
	 	if (isset($_POST['edit'])) 
	 	{
	 		$namafoto =$_FILES['fotoganti']['name'];
	 		$lokasifoto =$_FILES['fotoganti']['tmp_name'];
	 		//JIKA FOTO DIRUBAH
	 		if (!empty($lokasifoto)) 
	 		{
	 			move_uploaded_file($lokasifoto, "../img/$namafoto");

	 			$koneksi->query("UPDATE galeri SET foto_galeri='$namafoto' WHERE id_galeri='$_GET[id]'");
	 		}
	 		// else
	 		// {
	 		// 	$koneksi->query("UPDATE galeri SET nama_destinasi='$_POST[nama_destinasi]',keterangan='$_POST[keterangan]' WHERE id_destinasi='$_GET[id]'");
	 		// }



	 		echo "<script>alert ('Data Berhasil Diubah');</script>";
	 		echo "<script>location='index.php?halaman=destinasi';</script>";		
	 	}
	?>
 
 </body>
 </html>