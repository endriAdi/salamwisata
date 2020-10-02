<?php 
session_start();
include 'koneksi.php';

$id_hotel=$_GET["id"];

$ambil=$koneksi->query("SELECT * FROM hotel WHERE id_hotel='$id_hotel'");
$detail=$ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Hotel</title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
	<?php include'css.php'; ?>
</head>
<body>
	<?php include'navbar.php'; ?>

	<section class="single-product">
	    <div class="container">
		    <div class="row">
		        <div class="col-lg-3">
		          <figure class="figure">
		            <img src="img/<?php echo $detail['foto_hotel'] ?>" class="figure-img img-fluid"  id="image-container">
		            <figcaption class="figure-caption product-thumbnail-container d-flex justify-content-between">
						<?php $ambil=$koneksi->query("SELECT * FROM hotel_foto WHERE id_hotel='$id_hotel'"); ?>
  						<?php while($perfoto=$ambil->fetch_assoc()){ ?>
						
						
								<img class="img-thumbnail img-fluid" src="img/<?php echo $perfoto['nama_hotel_foto']; ?>" onclick="change_img(this)">
							
						
						<?php } ?>
					</figcaption>
		          </figure>
		        </div>
		    </div>
		</div>
	</section>

	<?php include'js.php'; ?>
	<script src="admin/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
    	var container=document.getElementById("image-container");
    	function change_img(image){
    		container.src=image.src;
    	}
    </script>
</body>
</html>