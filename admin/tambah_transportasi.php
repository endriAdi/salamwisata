<!DOCTYPE html>
<html>
<head>
	<title>Tambah Transportasi</title>
</head>
<body>
	<h2>Tambah Transportasi</h2>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Nama Transportasi</label>
			<input type="text" name="nama_transportasi" class="form-control">
		</div>
		<div class="form-group">
			<label>Foto</label>
			<div class="letak-input" style="margin-bottom: 10px">
				<input type="file" required name="foto[]" class="form-control">
			</div>
			<span class="btn btn-primary btn-tambah">
				<i class="glyphicon glyphicon-plus"></i>
			</span>
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<textarea class="form-control" name="keterangan" rows="8"></textarea>
		</div>
		<button class="btn btn-primary" name="save"><i class="glyphicon glyphicon-plus"></i> Tambahkan</button>
	</form>

	<?php 
		if (isset($_POST['save']))
		{
			$nama =$_FILES['foto']['name'];
			$lokasi =$_FILES['foto']['tmp_name'];
			move_uploaded_file($lokasi[0], "../img/".$nama[0]);
			$koneksi->query("INSERT INTO transportasi
				(nama_transportasi,foto_transportasi,keterangan) 
				VALUES ('$_POST[nama_transportasi]','$nama[0]','$_POST[keterangan]')");

			//mendapatkan id produk barusan
			$id_produk_barusan=$koneksi->insert_id;

			foreach ($nama as $key => $tiap_nama) 
			{
				$tiap_lokasi=$lokasi[$key];
				move_uploaded_file($tiap_lokasi, "../img/".$tiap_nama);

			//simpan ke database (tapi kita perlu tau id_produknya berapa)
			$koneksi->query("INSERT INTO transportasi_foto (id_transportasi,nama_transportasi_foto)  
				VALUES('$id_produk_barusan','$tiap_nama')");
			}
			


			echo "<div class='alert alert-info'>Data Tersimpan</div>";
			echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=transportasi'>";
		}
	?>


	<script>
	 	$(document).ready(function(){
	 		$(".btn-tambah").on("click",function(){
	 			$(".letak-input").append("<input type='file' name='foto[]' class='form-control' style='margin-top: 10px'>");
	 		});
	 	});
	</script>

</body>
</html>