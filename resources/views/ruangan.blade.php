<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>UMBJM | Peminjaman Ruangan</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cassi Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/elegant-icons.css"/>
	<link rel="stylesheet" href="css/fresco.css"/>

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
			<li><a href="{{url('/home')}}">Beranda</a></li>
			<li><a href="{{url('/ruangan')}}" class="active">Peminjaman Ruangan</a></li>
			<li><a href="{{url('/mobil')}}">Peminjaman Mobil</a></li>
			<li><a href="{{url('/admin')}}">Admin</a></li>
			<li><a href="{{url('/info')}}">Informasi</a></li>
		</ul>
		<!-- <div class="menu-footer">
			<div class="footer-social">
				<a href="#">Facebook</a>
				<a href="#">Twitter</a>
				<a href="#">Instagram</a>
			</div>
			<div class="copyright"><p> Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
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

	<!-- Main content -->
<section class="content">
	<div class="container-fluid">
	  <div class="row">
		<!-- left column -->
		<div class="col-md-6">
		  <!-- general form elements -->
		  <div class="card card-primary">
			<div class="card-header">
			  <h3 class="card-title">Form Peminjaman</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form role="form">
			  <div class="card-body">
				<div class="form-group">
				  <label>Nama Organisasi</label>
				  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="DPM, BEM, HIMA, UKM,...">
				</div>
				<div class="form-group">
				  <label>Fakultas</label>
				  <select class="form-control">
					<option>Fakultas Teknik</option>
					<option>Fakultas Farmasi</option>
					<option>Fakultas Psikologi</option>
					<option>Fakultas Agama Islam</option>
					<option>Fakultas Keguruan dan Ilmu Pendidikan</option>
					<option>Fakultas Keperawatan Ilmu Kesehatan</option>
				  </select>
				</div>
				<div class="form-group">
				  <label for="exampleInputEmail1">Email Organisasi</label>
				  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="@gmail.com">
				</div>
				<div class="form-group">
				  <label>Ruangan yang Dipinjam</label>
				  <select class="form-control">
					<option>option 1</option>
					<option>option 2</option>
					<option>option 3</option>
					<option>option 4</option>
					<option>option 5</option>
				  </select>
				</div>
				<div class="form-group">
				  <label>Nama Kegiatan</label>
				  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pembukaan/Penutupan/Kuliah Umum/....">
				</div>
				<div class="form-group">
				  <label>Tanggal Peminjaman:</label>
				  <div class="input-group">
					<div class="input-group-prepend">
					  <span class="input-group-text">
						<i class="far fa-calendar-alt"></i>
					  </span>
					</div>
					<input type="text" class="form-control float-right" id="reservation">
				  </div>
				  <br>
				<div class="form-group">
				  <label for="exampleInputFile">Upload Surat</label>
				  <div class="input-group">
					<div class="custom-file">
					  <input type="file" class="custom-file-input" id="exampleInputFile">
					  <label class="custom-file-label" for="exampleInputFile">Masukkan Surat</label>
					</div>
					<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Upload</button>
				  </div>
				</div>
				<!-- <div class="form-check">
				  <input type="checkbox" class="form-check-input" id="exampleCheck1">
				  <label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div> -->
			  </div>
			  <!-- /.card-body -->
			  <!-- /.col (left) -->  
				  <form id="contact" action="" method="post">
					<h3>Data Penanggung Jawab</h3>
					<label for="exampleInputEmail1">Nama Peminjam</label>
					<fieldset>
					  <input placeholder="Nama" type="email" tabindex="2" required>
					</fieldset>
					<br>
					<label for="exampleInputEmail1">Email Peminjam</label>
					<fieldset>
					  <input placeholder="@gmail.com" type="email" tabindex="2" required>
					</fieldset>
					<br>
					<label for="exampleInputEmail1">Kontak Peminjam</label>
					<fieldset>
					  <input placeholder="08__-____-____" type="tel" tabindex="3" required>
					</fieldset>
					<br>
					<fieldset>
					  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
					</fieldset>
					<br>
				  </form>
			  <!-- /.form group -->


	<!-- Footer section -->
	<footer class="footer-section">
		<!-- <div class="footer-social">
			<a href="#">Facebook</a>
			<a href="#">Twitter</a>
			<a href="#">Instagram</a>
		</div>
		<div class="copyright"><p> Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/fresco.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
