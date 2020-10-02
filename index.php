<?php 
session_start(); 
//KONEKSI DATABADE
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Salam Wisata</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include'css.php'; ?>

</head>
<body>
	<!-- Navbar -->
	<?php include'navbar.php'; ?>
	<!-- Akhir Navbar -->

	<!-- Jumbotron -->
  	<div class="jumbotron jumbotron-fluid" id="jumbotron1">
      	<div class="slider-overlay">
      		<div class="slider-content">
      			<div class="cta-div">
		      		<a href="pesan.php" class="btn1">Contact US!</a>
		      		<a href="" class="btn2">Learn Today</a>
		      	</div>
		      	<div class="social-networks">
		      		<a href="" class="fa fa-facebook"></a>
		      		<a href="" class="fa fa-instagram"></a>
		      		<a href="" class="fa fa-whatsapp"></a>
		      	</div>
		    </div>
      	</div>
    </div>
  	<!-- Ahir Jumbotron -->

  	<!-- Takelane -->
  	<section class="about" id="about">
		<div class="container d-flex justify-content-center">
			<div class="row mt-5 ">
		        <div class="col ">
		          <h3 class="text-center">TAKELANE</h3>
		          <hr>
		        </div>
		    </div>
			<div class="row">
				<div class="col">
					<div class="box">
						<div class="icon">01</div>
						<div class="content">
							<h3>Best Price Guarantee</h3>
							<p>Sewa bus wisata yang kami tawarkan murah. Dan disertai layanan yang bagus dari crew.</p>
							
						</div>
					</div>
				</div>
				<div class="col">
					<div class="box">
						<div class="icon">02</div>
						<div class="content">
							<h3>Best Travel Agent</h3>
							<p>Tim yang solid dari salam wisata siap membantu kesulitan anda.</p>
							
						</div>
					</div>
				</div>
				<div class="col">
					<div class="box">
						<div class="icon">03</div>
						<div class="content">
							<h3>Travellers Love Us</h3>
							<p>Kepuasan pelanggan adalah kepuasan kami.</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> 
  	<!-- Akhir Takelane -->

  	<!-- KEgiatan-->
	<section class="post">
		<div class="container">
			<div class="row mt-5 mb-5">
		        <div class="col ">
		          <h3 class="text-center">KEGIATAN</h3>
		          <hr>
		        </div>
		    </div>
			<div class="row">
				<div class="col">
					<div class="box">
						<div class="imgBx">
							<img src="img/l1.png">
						</div>
					<div class="layer layer1"></div>
					<div class="layer layer2"></div>
						<div class="contentBx">
							<div>
								<h2>Family Gathering </h2>
								<p>Family Gathering seringkali diasosiasikan sebagai momen berkumpulnya keluarga para pekerja, baik istri, anak, kakak, adik maupun orangtua mereka dengan segenap manajemen perusahaan.</p>

							</div>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="imgBx">
						<img src="img/l2.png">
					</div>
					<div class="layer layer1"></div>
					<div class="layer layer2"></div>
						<div class="contentBx">
							<div>
								<h2>Outbound </h2>
								<p>Outbound adalah suatu bentuk dari pembelajaran segala ilmu terapan yang disulasikan dan dilakukan di alam terbuka atau tertutup dengan bentuk permainan yang efektif, yang menggabungkan antara intelegensia, fisik dan mental.</p>
							</div>
						</div>
				</div>
				<div class="box">
					<div class="imgBx">
						<img src="img/l3.png">
					</div>
					<div class="layer layer1"></div>
					<div class="layer layer2"></div>
						<div class="contentBx">
							<div>
								<h2>Study Tour </h2>
								<p>Study Tour yaitu sebuah sitem pendidikan pembelajaran dengan cara tour / pergi ke sebuah tempat atau daerah untuk mengetahui dan mempelajari pembelajaran tersebut</p>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir Kegiatan -->
	<br><br><br>

	<!-- Paket -->
	<section class="paket">
		<div class="container d-flex justify-content-center">
			<div class="row mb-5 ">
		        <div class="col ">
		          <h3 class="text-center">PAKET WISATA</h3>
		          <hr>
		        </div>
		    </div>
		    <div class="row">
		    	<?php $ambil=$koneksi->query("SELECT * FROM paket"); ?>
		    	<?php while($pecah=$ambil->fetch_assoc()){ ?>
		    	<div class="col-md-4">
					<div class="card" style="width: 18rem;">
					  <img src="img/<?php echo $pecah['foto_paket'] ?>" class="card-img-top" alt="...">
					  <div class="card-body text-center">
					    <h5 class="card-title"><?php echo $pecah['nama_paket'] ?></h5>
					    <p class="card-text"><?php echo $pecah['keterangan'] ?></p>
					    <a href="#" class="btn btn-primary">Detail</a>
					  </div>
					</div>
		    	</div>
		    	<?php } ?>
		    </div>
		</div>
	</section>
	<!-- Akhir Paket -->
	<br><br><br>

	<!-- Hotel -->
	<section class="similar-product">
	    <div class="container d-flex justify-content-center">
	      <div class="row mb-5">
	        <div class="col">
	          <h3 class="text-center">HOTEL PARTNER</h3>
	          <hr>
	        </div>
	      </div>

	      <div class="row">
	      	<?php $ambilhotel=$koneksi->query("SELECT * FROM hotel"); ?>
	      	<?php while($pecahhotel=$ambilhotel->fetch_assoc()){ ?>
	        <div class="col-sm-4">
	          <figure class="figure">
	            <img src="img/<?php echo $pecahhotel['foto_hotel'] ?>" class="figure-img img-fluid">
	            <figcaption class="figure-caption">
	              <div class="row">
	                <div class="col">
	                  <h4><?php echo $pecahhotel['nama_hotel'] ?></h4>
	                  <p><?php echo $pecahhotel['fasilitas_hotel'] ?></p>
	                </div>
	                <div class="col align-items-center d-flex justify-content-end">
	            		<a href="detail_hotel.php?id=<?php echo $pecahhotel['id_hotel']; ?>">
		                   <button href="" class="btn btn-primary btn-sm mt-1">DETAIL</button>
		                </a>
	                </div>
	              </div>
	            </figcaption>
	          </figure>
	        </div>
	        <?php } ?>
	      </div>
	    </div>
	  </section>
	<!-- Akhir Hotel -->

	<!-- Transportasi -->
	<section class="hotel1" id="hotel1">
		<div class="container hotel">
			<div class="row ">
		        <div class="col ">
		          <h3 class="text-center">TRANSPORTASI PARTNER</h3>
		          <hr>
		        </div>
		    </div>
		<!-- Slider -->
			<ul id="autoWidth" class="cs-hidden">
		<?php $ambiltrans=$koneksi->query("SELECT * FROM transportasi"); ?>
		<?php while($pecahtrans=$ambiltrans->fetch_assoc()){ ?>
				<!-- 1 -->
				<li class="item-a">
					<!-- Slider Box -->
					<div class="box box-hotel">
						<p class="marvel"><?php echo $pecahtrans['nama_transportasi'] ?></p>
						<!-- Gambar -->
						<img src="img/<?php echo $pecahtrans['foto_transportasi'] ?>" class="model">
						<!-- Details -->
						<div class="details">
							<p><?php echo $pecahtrans['keterangan'] ?></p>
						</div>
					</div>
					<!-- Akhir Slider Box -->
				</li>
				<?php } ?>
			</ul>
		</div>
	</section>
	<!-- Akhir -->

	

	<!-- Galeri -->
	<section class="album">
		<div class="container">
			<div class="galery-section">
				<div class="inner-width">
					<h3>Galery</h3>
					<div class="border"></div>
					<div class="row">
						<?php $ambilgaleri=$koneksi->query("SELECT * FROM galeri"); ?>
							<?php while($pecahgaleri=$ambilgaleri->fetch_assoc()){ ?>
						<div class="col-md-3">
							<div class="galery">
							
								<a href="img/<?php echo $pecahgaleri['foto_galeri'] ?>" class="image mb-4">
									<img src="img/<?php echo $pecahgaleri['foto_galeri'] ?>">
								</a>
							
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir Galeri -->

	<!-- Footer -->
	<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">dirEngine</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Service</a></li>
                <li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Become a partner</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text"> 08151119745</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text"> sigithendra11@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
	<!-- Akhir -->





	<?php include'js.php'; ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#autoWidth').lightSlider({
				autoWidth:true,
				loop:true,
				onSliderLoad:function(){
					$('#autoWidth').removeClass('cs-hidden');
				}
			});
		});
	</script>

	<script type="text/javascript">
		$(".galery").magnificPopup({
			delegate: 'a',
			type:'image',
			galery:{
				enabled:true
			}
		});
	</script>

</body>
</html>
