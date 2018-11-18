<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Form Registrasi Calon Mahasiswa</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/university/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo base_url();?>assets/university/css/noscript.css" /></noscript>
		<style>
			img {
				border-radius: 50%;
			}
			
			
			h5 {
				text-align: left;
				color: #000000;
			}

			
			
			
			
		</style>
	</head>
	

			<!-- Header -->
				
<header id="header">
					
					<h1 id="logo"><a href="#">Ansor University</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="#">Home</a></li>
							<li>
								<a href="#">Fakultas</a>
								<ul>
									<!--<li><a href="left-sidebar.html">Left Sidebar</a></li>
									<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li><a href="no-sidebar.html">No Sidebar</a></li>-->
									<li>
										<a href="#">Teknologi</a>
										<ul>
											<li><a href="#">Teknik Informatika</a></li>
											<li><a href="#">Teknik Elektro</a></li>
											<li><a href="#">DKV</a></li>
											
										</ul>
									</li>

									<li>
										<a href="#">Pendidikan</a>
										<ul>
											<li><a href="#">Bahasa Inggris</a></li>
											<li><a href="#">Bahasa Jepang</a></li>
											<li><a href="#">Matematika</a></li>
										</ul>		
									</li>
								</ul>
							</li>
							
							<li><a href="<?php echo site_url()?>/university/confirm">Konfirmasi Pendaftaran</a></li>
							<li><a href="<?php echo site_url();?>/university/register" class="button primary">Pendaftaran Online</a></li>
						</ul>
					</nav>
				</header>
			<!-- Main -->
				
		
		
		<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<img src="<?php echo base_url();?>assets/university/images/logoAU.jpeg" alt="" height="10%" width="10%" border="" />
							<h2>Konfirmasi Pendaftaran</h2>
												
							<section>
									
								<form method="post" action="#">
									<div class="row gtr-uniform gtr-50">
										<div class="col-99">
											
											No.Registrasi<input type="text" name="noReg" id="noReg" value="" placeholder="Nomor Registrasi" />
											
											
											Nama Pemilik Rekening<input type="text" name="namaRek" id="namaRek" value="" placeholder="Nama Pemilik Rekening" />

											Email<input type="text" name="email" id="email" value="" placeholder="Masukkan alamat Email Anda" />

											No.Telp / HP<input type="text" name="noHp" id="noHp" value="" placeholder="Nomor Telepon/HP" />

											Bank<input type="text" name="Bank" id="Bank" value="" placeholder="Bank" />

											Keterangan (Opsional) <input type="text" name="keterangan" id="keterangan" value="" placeholder="Keterangan(Opsional)" />
											
											 Bukti Pengiriman </br> <input type="file" name="pic" accept="image/*">
  												<input type="submit" />
										</div>
								</form>
								
							</section>							
						</header>
<!-- Form -->
							<section>
								
								<ul class="actions">

									<li><a href="#" class="button primary"	name="kirim">Kirim</a></li>
									
								</ul>
								
							</section>
							


									
						

			<!-- Footer -->
			<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Taksama.id . All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="<?php echo base_url();?>assets/university/js/jquery.min.js"></script>
			<script src="<?php echo base_url();?>assets/university/js/jquery.scrolly.min.js"></script>
			<script src="<?php echo base_url();?>assets/university/js/jquery.dropotron.min.js"></script>
			<script src="<?php echo base_url();?>assets/university/js/jquery.scrollex.min.js"></script>
			<script src="<?php echo base_url();?>assets/university/js/browser.min.js"></script>
			<script src="<?php echo base_url();?>assets/university/js/breakpoints.min.js"></script>
			<script src="<?php echo base_url();?>assets/university/js/util.js"></script>
			<script src="<?php echo base_url();?>assets/university/js/main.js"></script>

	</body>
</html>