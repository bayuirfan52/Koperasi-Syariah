<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Favicon-->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'assets/images/icon.png'?>">
	<!-- Site Title -->
	<title>KSP Syariah</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/linearicons.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome.min.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/magnific-popup.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/nice-select.css'?>">							
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.min.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/owl.carousel.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/main.css'?>">
	</head>
	<body>	
	  <header id="header" id="home">
	    <div class="container main-menu">
	    	<div class="row align-items-center justify-content-between d-flex">
		      <div id="logo">
		        <a href="index.html"><img src="<?php echo base_url().'assets/img/logo.png'?>" alt="" title="" /></a>
		      </div>
		      <nav id="nav-menu-container">
		        <ul class="nav-menu">
		          <li class="menu-active"><a href="<?php echo base_url()?>">Beranda</a></li>
		          <li><a href="#">Tentang Kami</a></li>
		          <li><a href="#">Blog</a></li>
		          <li class="menu-has-children"><a href="">Simpanan</a>
		          	<ul>
		          		<li><a href="#">Simpanan Pokok</a></li>
		          		<li><a href="#">Simpanan Wajib</a></li>
		          	</ul>
		          </li>
		          <li class="menu-has-children"><a href="">Pinjaman</a>
		            <ul>
		              <li><a href="#">Pinjaman Usaha</a></li>
		              <li><a href="#">Pinjaman Kendaraan</a></li>
		            </ul>
		          </li>				          
		          <li><a href="<?php echo base_url().'login/'?>">Login</a></li>
		        </ul>
		      </nav><!-- #nav-menu-container -->		    		
	    	</div>
	    </div>
	  </header><!-- #header -->
  			<!-- start banner Area -->
			<section class="banner-area relative blog-home-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content blog-header-content col-lg-12">
							<h1 class="text-white">
								Ujian Bosque
								header null				
							</h1>	
							<p class="text-white">
								Lorem ipsum dolor sit amet.
							</p>
							<a href="#" class="primary-btn">View More</a>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start post-content Area -->
			<section class="post-content-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<?php foreach ($data as $berita) { 
									if (empty($berita)) { ?>
										<div class="single-post row">
											<div class="col-lg-9 col-md-9 ">
												<p class="excert">
													Tidak ada berita ditemukan!
													</p>
												</div>
											</div>
										</div>
									<?php }
									else {	?>							
							<div class="single-post row">
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img">
										<img class="img-fluid" src="<?php echo base_url().$berita->image ?>" alt="">
									</div>
									<a class="posts-title" href="blog-single.html"><h3><?php echo $berita->judul_berita; ?></h3></a>
									<p class="excert">
										<?php echo $berita->isi; ?>
									</p>
									<a href="#" class="primary-btn">View More</a>
								</div>
							</div>
							<?php } } ?>
							<nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item active"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">04</a></li>
		                            <li class="page-item"><a href="#" class="page-link">09</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav>
						</div>
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								<div class="single-sidebar-widget search-widget">
									<form class="search-form" action="#">
			                            <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
			                            <button type="submit"><i class="fa fa-search"></i></button>
			                        </form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End post-content Area -->

		<!-- start footer Area -->		
		<footer class="footer-area section-gap">
			<div class="container">

				<div class="row">
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Sekilas KSP</h6>
							<p>
								The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point 
							</p>
						</div>
					</div>
												
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Info Lanjut</h6>
							<p>
								For business professionals caught between high OEM price and mediocre print and graphic output.									
							</p>								
							<div id="mc_embed_signup">
								<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
									<div class="input-group d-flex flex-row">
										<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
										</div>
										<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
									</div>									
									<div class="mt-10 info"></div>
								</form>
							</div>
						</div>
					</div>						
				</div>

				<div class="row footer-bottom d-flex justify-content-between align-items-center">
					<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
					<div class="col-lg-4 col-sm-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->	

		<script src="<?php echo base_url().'assets/js/vendor/jquery-2.2.4.min.js'?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="<?php echo base_url().'assets/js/vendor/bootstrap.min.js'?>"></script>			
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="<?php echo base_url().'assets/js/easing.min.js'?>"></script>			
		<script src="<?php echo base_url().'assets/js/hoverIntent.js'?>"></script>
		<script src="<?php echo base_url().'assets/js/superfish.min.js'?>"></script>	
		<script src="<?php echo base_url().'assets/js/mn-accordion.js'?>"></script>
		<script src="<?php echo base_url().'assets/js/jquery.ajaxchimp.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/js/jquery.magnific-popup.min.js'?>"></script>	
		<script src="<?php echo base_url().'assets/js/owl.carousel.min.js'?>"></script>						
		<script src="<?php echo base_url().'assets/js/jquery.nice-select.min.js'?>"></script>	
		<script src="<?php echo base_url().'assets/js/jquery.circlechart.js'?>"></script>								
		<script src="<?php echo base_url().'assets/js/mail-script.js'?>"></script>	
		<script src="<?php echo base_url().'assets/js/main.js'?>"></script>	
	</body>
</html>

