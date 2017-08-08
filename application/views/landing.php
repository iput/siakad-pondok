<!DOCTYPE html>
<html lang="en">
<head>
	<title>Siakad | Pondok Pesantren Sabilurrosyad Gasek</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Free landing page website template">
	<meta name="author" content="The Develovers">

	<!-- CORE CSS -->
	<link href="<?php echo base_url() ?>landing/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>landing/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- THEME CSS -->
	<link href="<?php echo base_url() ?>landing/css/main.css" rel="stylesheet" type="text/css">
	
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:300,400,700" rel="stylesheet">
	
	<!-- FAVICONS -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>landing/ico/landee144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>landing/ico/landee114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>landing/ico/landee72.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>landing/ico/landee57.png">
	<link rel="shortcut icon" href="<?php echo base_url() ?>landing/img/pondok.png">
</head>
<body data-spy="scroll">
	
	<!-- WRAPPER -->
	<div id="wrapper">

		<!-- NAVBAR -->
		<nav id="main-navbar" class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars"></i>
				</button>
				<a href="<?php echo base_url('actLanding') ?>" class="navbar-brand">
					<img src="<?php echo base_url() ?>landing/img/g-logo.png" alt="Siakad" >
				</a>
				<div id="main-nav-collapse" class="collapse navbar-collapse">
					<ul class="nav navbar-nav nav-onepage">
						<li class="active"><a href="#home">Beranda</a></li>
						<li><a href="#overview">Layanan</a></li>
						<li><a href="#features">Bantuan</a></li>
						<li><a href="#pricing">Daftar</a></li>
						<li><a href="#team">Pengembang</a></li>
						<li><a href="#contact">Kontak</a></li>
						<li><a href="<?php echo base_url('actLanding/Login') ?>">Login</a></li>
					</ul>
				</div>
				
			</div>
		</nav>
		<!-- END NAVBAR -->

		<!-- HERO SECTION -->
		<section id="home" class="hero-unit-fullscreen parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>landing/img/pengurus.jpg">
			<div class="overlay"></div>
			<div class="container">
				<div class="hero-content">
					<div class="alert alert-success" style="display:  none;"></div>
					<div class="alert alert-danger" style="display:  none;"></div>
					<h1 class="hero-heading">SELAMAT DATANG DI LAYANAN SISTEM INFORMASI PONPES SABILURROSYAD</h1>
					<p class="lead">Gasek is Ours-Gasek Paseduluran-Khidmah Barokah</p>
					<span class="onepage-links"><a href="#overview" class="btn btn-lg btn-primary">Tentang Siakad</a></span>
				</div>
			</div>
		</section>
		<!-- END HERO SECTION -->

		<!-- OVERVIEW -->
		<section id="overview">
			<div class="container">
				<div class="section-heading">
					<h2 class="heading">LAYANAN SIAKAD</h2>
				</div>
				<p class="text-center lead">Siakad berbasis pondok pesantren ini dibuat dengan tujuan untuk melakukan manajemen terhadap data santri, mulai dari santri aktif hingga alumni</p>

				<div class="row">
					<div class="col-md-4">
						<div class="icon-info icon-info-center">
							<i class="fa fa-thumbs-o-up"></i>
							<h3 class="title">ALUMNI</h3>
							<p>Melalui siakad pondok pesantren sabilurrosyad diharapkan bisa menjadi bank data alumni yang tersebar di seluruh wilayah di Indonesia untuk mempermudah silaturrahmi.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="icon-info icon-info-center">
							<i class="fa fa-laptop"></i>
							<h3 class="title">SANTRI BARU</h3>
							<p>Siakad pondok pesantren sabilurrosyad juga menjadi bank data santri baru yang terdaftar secara resmi dalam pesantren. Sehingga santri bisa terawasi secara online maupun offline.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="icon-info icon-info-center">
							<i class="fa fa-star-o"></i>
							<h3 class="title">INVENTARIS DINIYAH</h3>
							<p>Siakad ponpes sabilurrosyad menyediakan layanan untuk inventaris kegiatan manajemen kelas belajar mengajar diniyah .</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END OVERVIEW -->

		<!-- FEATURES -->
		<section id="features">
			<div class="container">
				<div class="section-heading">
					<h2 class="heading">BANTUAN PENDAFTARAN DIRI</h2>
				</div>
				<div class="container">
					<div class="row feature-item">
						<div class="col-sm-7">
							<h3 class="section-heading"><i class="fa fa-check-square-o"></i> Prosedur pendaftaran</h3>
							<p class="lead">berikut prosedur pendaftaran santri dan alumni terkait manajemen data diri ke dalam siakad pondok pesantren sabilurrosyad.</p>
							<ul>
								<li><h3>Isikan form pendaftaran yang telah disediakan dalam halaman landing sesuai data asli</h3></li>
								<li><h3>Gunakan nama panggilan anda sebagai username dan password untuk melengkapi data</h3></li>
								<li><h3>hubungi pengelola jika ada kesulitan selama proses pendaftaran</h3></li>
							</ul>
						</div>
						<div class="col-sm-5">
							<img src="<?php echo base_url() ?>landing/img/feature1.png" class="img-responsive" alt="Feature">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END FEATURES -->

		<!-- PRICING -->
		<section id="pricing">
			<div class="container">
				<div class="section-heading">
					<h2 class="heading">FORM PENDAFTARAN DIRI</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h3>Bantuan Pendaftaran</h3>
						<p class="text-justify">Berikut sedikit panduan untuk mengisi form pendaftaran santri dan alumni siakad pondok pesantren sabilurosyad</p>
						<ul>
							<li><h4>Isilah data berdasarkan data asli</h4></li>
							<li><h4>Gunakan module status `santri` jika anda masih aktif di pondok.</h4></li>
							<li><h4>Gunakan module status `alumni` jika anda telah lulus pondok.</h4></li>
							<li><h4>Gunakan nama panggilan sebagai username dan nomor hp sebagai password</h4></li>
							<li><h4>Masukan username dan password untuk login dan melengkapi data</h4></li>
							<li><h4>Tanyakan pengurus jika terjadi kebingungan</h4></li>
							<li><h4>Tinggalkan kritik dan saran demi perbaikan sistem yang lebih baik</h4></li>
						</ul>
					</div>
					<div class="col-md-6">
					<h3>Form Isian</h3>
						<form class="form-vertical" method="POST"  action="<?php echo base_url('actLanding/AddRegister') ?>">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" name="namaLengkap" class="form-control" placeholder="Nama lengkap anda">
							</div>
							<div class="form-group">
								<label>Nama Panggilan</label>
								<input type="text" name="namaPanggilan" class="form-control" placeholder="Nama panggilan anda">
							</div>
							<div class="form-group">
								<label>Nomor HP/Telepon</label>
								<input type="text" name="teleponBaru" class="form-control" placeholder="masukan nomor telepon anda">
							</div>
							<div>
								<button type="submit" class="btn btn-success " id="btn_simpan"><i class="glyphicon glyphicon-save"></i>&nbsp;Daftar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- END PRICING -->

		<!-- TEAM -->
		<section id="team">
			<div class="container">
				<div class="section-heading">
					<h2 class="heading">Pengembang</h2>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="team-member">
							<img src="<?php echo base_url() ?>landing/img/person2.jpg" class="img-responsive img-circle" alt="Person" style="width: 175px;height: 175px;">
							<div class="member-info">
								<h3 class="name">Ahmad Tajuddin Zahrou</h3>
								<span class="title text-muted">SEO gasek multimedia</span>
								<p class="short-bio">Penggerak tim gasek multimedia dan pengelola sistem informasi pesantren gasek.</p>
								<ul class="list-inline social-icons">
									<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="instagram-bg"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#" class="youtube-bg"><i class="fa fa-youtube-play"></i></a></li>
									<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="team-member">
							<img src="<?php echo base_url() ?>landing/img/person2.jpg" class="img-responsive img-circle" alt="Person" style="width: 175px;height: 175px;">
							<div class="member-info">
								<h3 class="name">Irwansyah Ibrahim</h3>
								<span class="title text-muted">Pengelola sistem (Putra)</span>
								<p class="short-bio">pengelola pusat data santri putra sistem informasi pesantren sabilurrosyad.</p>
								<ul class="list-inline social-icons">
									<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="instagram-bg"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#" class="youtube-bg"><i class="fa fa-youtube-play"></i></a></li>
									<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="team-member">
							<img src="<?php echo base_url() ?>landing/img/mbak.png" class="img-responsive img-circle" alt="Person" style="width: 175px;height: 175px;">
							<div class="member-info">
								<h3 class="name">Indy</h3>
								<span class="title text-muted">Pengelola Sistem (Putri)</span>
								<p class="short-bio">Pengelola pusat data santri putri sistem informasi pesantren sabilurrosyad.</p>
								<ul class="list-inline social-icons">
									<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="instagram-bg"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#" class="youtube-bg"><i class="fa fa-youtube-play"></i></a></li>
									<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END TEAM -->

		<!-- CONTACT -->
		<section id="contact">
			<div class="container">
				<div class="section-heading">
					<h2 class="heading">KONTAK KAMI</h2>
				</div>
				<div class="row">
					<div class="col-md-4">
						<p>
							<strong><i class="icon icon_pin_alt"></i> ALAMAT</strong>
							<br>
							<span>Jln. Raya Candi No. 303 Blok VI/C <br> Ponpes Sabilurrosyad Gasek Karangbesuki Sukun Malang</span>
						</p>
						<br>
						<p>
							<strong><i class="icon icon_phone"></i> KONTAK TELEPON</strong>
							<br>
							<span>Indy : 085855214895</span>
							<br>
							<span>Mahfud : 085735209127</span>
						</p>
						<br>
						<p>
							<strong><i class="icon icon_mail"></i> EMAIL</strong>
							<br>
							<span>Email  : <a href="mailto:pondoksaibilurrosyad@gmail.com">pondoksabilurrosyad@gmail.com</a></span>
						</p>
					</div>
					<div class="col-md-8">
					<h3>Tinggalkan kritik dan saran anda</h3>
						<form id="contact-form" class="form-horizontal form-minimal" method="POST" action="<?php echo base_url('actLanding/TambahkanSaran') ?>">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="contact-name" class="control-label sr-only">Name</label>
										<input type="text" class="form-control" name="contact_name" placeholder="Nama (harap diisi)" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="contact-email" class="control-label sr-only">Email</label>
										<input type="email" class="form-control" name="contact_email" placeholder="Email (harap diisi)" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="contact-subject" class="control-label sr-only">Subject</label>
								<div class="col-sm-12">
									<input type="text" class="form-control" name="contact_subject" placeholder="Tentang (optional)">
								</div>
							</div>
							<div class="form-group">
								<label for="contact-message" class="control-label sr-only">Message</label>
								<div class="col-sm-12">
									<textarea class="form-control" name="contact_message" name="contact-message" rows="5" cols="30" placeholder="Pesan (harap diisi)" required></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-primary"><span class="fa fa-send"></span>&nbsp;Kirim Saran</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- END CONTACT -->

		<!-- FOOTER -->
		<footer class="footer-minimal">
			<div class="container">
				<nav>
					<ul class="list-unstyled list-inline margin-bottom-30px">
						<li><a href="#">About</a></li>
						<li><a href="#">Terms &amp; Condition</a></li>
						<li><a href="#">Help</a></li>
					</ul>
				</nav>
				<ul class="list-inline social-icons social-icons-circle">
					<li><a href="https://www.facebook.com/ponpesgasek/"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCZyQenuT3lIsqPuF_kmxlwQ"><i class="fa fa-youtube-play"></i></a></li>
					<li><a href="https://www.instagram.com/ponpesgasek/"><i class="fa fa-instagram"></i></a></li>
				</ul>
				<p class="copyright-text">Dikembangkan : <a href="https://www.ponpesgasek.com/" target="_blank">Gasek Multimedia</a></p>
			</div>
		</footer>
		<!-- END FOOTER -->

	</div>
	<!-- END WRAPPER -->

	<!-- JAVASCRIPT -->
	<script src="<?php echo base_url() ?>landing/js/jquery-2.1.1.min.js"></script>
	<script src="<?php echo base_url() ?>landing/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>landing/js/plugins/scrolling/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="<?php echo base_url() ?>landing/js/plugins/scrolling/jquery.localscroll-1.2.7-min.js"></script>
	<script src="<?php echo base_url() ?>landing/js/plugins/parallax/parallax.min.js"></script>
	<script src="<?php echo base_url() ?>landing/js/plugins/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo base_url() ?>landing/js/landee.js"></script>
	<script type="text/javascript">
		<?php if ($this->session->flashdata('sukses')): ?>
			$('.alert-success').html('<?php echo $this->session->flashdata('sukses') ?>').fadeIn();
		<?php endif ?>
		<?php if ($this->session->flashdata('gagal')): ?>
			$('.alert-danger').html('<?php echo $this->session->flashdata('gagal') ?>').fadeIn();
		<?php endif ?>
	</script>
	
</body>

</html>