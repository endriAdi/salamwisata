<!DOCTYPE html>
<html>
<head>
	<title>Tambah Hotel</title>
</head>
<body>
	<h2>Tambah Hotel</h2>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Nama Hotel</label>
			<input type="text" name="nama_hotel" class="form-control">
		</div>
		<div class="form-group">
			<label>Harga</label>
			<input type="text" name="harga_hotel" class="form-control">
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
			<label>Fasillitas</label>
			<textarea class="form-control" name="fasilitas" rows="8"></textarea>
		</div>
		<button class="btn btn-primary" name="save"><i class="glyphicon glyphicon-plus"></i> Tambahkan</button>
	</form>

	<?php 
		if (isset($_POST['save']))
		{
			$nama =$_FILES['foto']['name'];
			$lokasi =$_FILES['foto']['tmp_name'];
			move_uploaded_file($lokasi[0], "../img/".$nama[0]);
			$koneksi->query("INSERT INTO hotel
				(nama_hotel,harga_hotel,foto_hotel,fasilitas_hotel) 
				VALUES ('$_POST[nama_hotel]','$_POST[harga_hotel]','$nama[0]','$_POST[fasilitas]')");

			//mendapatkan id produk barusan
			$id_produk_barusan=$koneksi->insert_id;

			foreach ($nama as $key => $tiap_nama) 
			{
				$tiap_lokasi=$lokasi[$key];
				move_uploaded_file($tiap_lokasi, "../img/".$tiap_nama);

			//simpan ke database (tapi kita perlu tau id_produknya berapa)
			$koneksi->query("INSERT INTO hotel_foto (id_hotel,nama_hotel_foto)  
				VALUES('$id_produk_barusan','$tiap_nama')");
			}
			


			echo "<div class='alert alert-info'>Data Tersimpan</div>";
			echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=hotel'>";
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