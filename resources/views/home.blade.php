<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>UMBJM | Sistem Peminjaman</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cassi Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/elegant-icons.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Section -->
	<div class="offcanvas-menu-wrapper">
		<div class="menu-header">
			<a href="{{url('/home')}}" class="site-logo">
				<img src="img/umbjm.png" alt="">
			</a>
			<div class="menu-switch" id="menu-canvas-close">
			<i class="fas fa-times"></i>
			</div>
		</div>
		<ul class="main-menu">
			<li><a href="{{url('/home')}}" class="active">Beranda</a></li>
			<li><a href="{{url('/ruangan')}}">Peminjaman Ruangan</a></li>
			<li><a href="{{url('/mobil')}}">Peminjaman Mobil</a></li>
			<li><a href="{{url('/admin')}}">Admin</a></li>
			<li><a href="{{url('/info')}}">Informasi</a></li>
		</ul>
		<div class="menu-footer">
			<!-- <div class="footer-social">
				<a href="#">Facebook</a>
				<a href="#">Twitter</a>
				<a href="#">Instagram</a>
			</div> -->
			<!-- <div class="copyright"><p> Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div> -->
		</div>
	</div>
	<!-- Offcanvas Menu Section end -->
	
	<!-- Header section -->
	<header class="header-section">
		<a href="{{url('/home')}}" class="site-logo">
			<img src="img/umbjm.png" alt="">
		</a>
		<div class="menu-switch" id="menu-canvas-show">
		<i class="fas fa-bars"></i>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-item">
				<div class="hero-text">
					<div class="ht-cata">Alur Peminjaman</div>
					<h2>Ruangan</h2>
					<p>Klik "Ajukan Peminjaman" - Lengkapi Pengisian Form - Upload Surat Peminjaman - Tunggu Validasi Admin.</p>
					<a href="{{url('/ruangan')}}" class="ht-btn">Ajukan Peminjaman </a>
				</div>
				<div class="hi-bg set-bg" data-setbg="img/foto1.jpg"></div>
			</div>
			<div class="hero-item">
				<div class="hero-text">
					<div class="ht-cata">Alur Peminjaman</div>
					<h2>Mobil</h2>
					<p>Klik "Ajukan Peminjaman" - Lengkapi Pengisian Form - Upload Surat - Tunggu Validasi Admin.</p>
					<a href="{{url('/mobil')}}" class="ht-btn">Ajukan Peminjaman </a>
				</div>
				<div class="hi-bg set-bg" data-setbg="img/innova.jpg"></div>
			</div>
			<!-- <div class="hero-item">
				<div class="hero-text">
					<div class="ht-cata">Nature</div>
					<h2>Photo Studio</h2>
					<p>Cassi – a creative lifestyle photo studio making emotional photography communicate a story. Creative lifestyle photo studio making emotional photography.</p>
					<a href="#" class="ht-btn">See More <i class="arrow_right"></i></a>
				</div>
				<div class="hi-bg set-bg" data-setbg="img/slider-3.jpg"></div>
			</div>
		</div> -->
	</section>
	<!-- Hero section end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<!-- <div class="footer-social">
			<a href="#">Facebook</a>
			<a href="#">Twitter</a>
			<a href="#">Instagram</a>
		</div> -->
		<!-- <div class="copyright"><p> Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
