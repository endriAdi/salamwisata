<?php 
	$ambil =$koneksi->query("SELECT * FROM destinasi WHERE id_destinasi='$_GET[id]'");
	$pecah =$ambil->fetch_assoc();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Destinasi</title>
</head>
<body>
	<h2>Edit Destinasi</h2>
	<form>
		<div class="form-group">
			<label>Nama Destinasi</label>
			<input type="text" required name="nama_destinasi" class="form-control" value="<?php echo $pecah['nama_destinasi']; ?>">
		</div>
		<div class="form-group">
	 		<label>Foto Produk</label> <br>
	 		<img src="../img/<?php echo $pecah['foto_destinasi'] ?>" width="290">
	 	</div>
	 	<!-- <div class="form-group">
	 		<div class="letak-input" style="margin-bottom: 10px">
				<input type="file"  name="foto_destinasi[]" class="form-control">
			</div>
	 		<span class="btn btn-primary btn-tambah">
				<i class="glyphicon glyphicon-plus"></i> Tambah Foto
			</span> 
		</div> -->
	 	<div class="form-group">
	 		<label>Ganti Foto</label>
	 		<input type="file" name="fotoganti" class="form-control">
	 	</div>
	 	<div class="form-group">
	 		<label>Keterangan</label>
	 		<textarea class="form-control" name="keterangan" rows="8"><?php echo $pecah['keterangan']; ?></textarea>
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

	 			$koneksi->query("UPDATE destinasi SET nama_destinasi='$_POST[nama_destinasi]',foto_destinasi='$namafoto', keterangan='$_POST[keterangan]' WHERE id_destinasi='$_GET[id]'");
	 		}
	 		else
	 		{
	 			$koneksi->query("UPDATE destinasi SET nama_destinasi='$_POST[nama_destinasi]',keterangan='$_POST[keterangan]' WHERE id_destinasi='$_GET[id]'");
	 		}



	 		echo "<script>alert ('Data Berhasil Diubah');</script>";
	 		echo "<script>location='index.php?halaman=destinasi';</script>";		
	 	}
	  ?>

	 <!--  <script>
	 	$(document).ready(function(){
	 		$(".btn-tambah").on("click",function(){
	 			$(".letak-input").append("<input type='file' name='foto[]' class='form-control' style='margin-top: 10px'>");
	 		})
	 	})
	  </script> -->

</body>
</html>