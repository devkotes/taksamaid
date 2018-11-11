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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
		<noscript><link rel="stylesheet" href="<?php echo base_url();?>assets/university/css/noscript.css" /></noscript>
		<style>
			img {
				border-radius: 50%;
			}
			h1	{
				color: #000000;
			}
			.swal-text{
				text-align: center;
			}
		</style>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					
					<h1 id="logo"><a href="index.html">Ansor University</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
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
											<li><a href="#">Sistem Informasi</a></li>
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
							
							<li><a href="Konfirmasi.html">Konfirmasi Pendaftaran</a></li>
							<li><a href="elements.html" class="button primary">Pendaftaran Online</a></li>
						</ul>
					</nav>
				</header>


			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Ansor University</h2>
							<img src="<?php echo base_url();?>assets/university/images/logoAU.jpeg" alt="" height="10%" width="10%" border="" />
							<br>
							<h2>Form Registrasi Calon Mahasiswa</h2>
							
							
							
							
							
						</header>
<!-- Form -->
							<section>
								<h3>Data Diri</h3>
								<form method="post" id="formRegister">
									<input type="hidden" name="no_reg" value="<?php echo $no_reg;?>" />
									<div class="row gtr-uniform gtr-50">
										<div class="col-6">
											<h1>Nama Lengkap<h1>
											<input type="text" name="name" placeholder="Nama Lengkap" />
										</div>

										<div class="col-6">
											<h1>NIK</h1>
											<input type="text" name="nik" placeholder="Nomor Induk Kewarganegaraan" />
										</div>

										<div class="col-6">
											<h1>Tempat Lahir</h1>
											<input type="text" name="birthplace" placeholder="Kota Tempat Lahir" />
										</div> 

										<div class="col-6">
											<h1>Tanggal Lahir</h1>
											<input type="text" name="birthday" id="tgl" />
										</div> 

										<div class="col-6">
											<h1>Jenis Kelamin</h1>
											
											<input type="radio" id="Laki" name="gender" value="L" checked>
											<label for="Laki">Laki-laki</label>
											<input type="radio" id="Perempuan" name="gender" value="P">
											<label for="Perempuan">Perempuan</label>

										</div>

										<div class="col-6">
											<h1>Agama</h1>
											<select name="religion">
												<option value="">- Pilih Agama -</option>
												<?php
												foreach ($rg as $row) {
													echo "<option value='".$row->religion_id."'>".$row->name."</option>";
												}
												?>
											</select>
										</div>
										

										<div class="col-12">
											<h1>Alamat Tinggal</h1>
											<textarea name="address" placeholder="Alamat Sesuai KTP" rows="6" spellcheck="false"></textarea>
										</div>

										<div class="col-6">
											<h1>Nomor Telepon / HP</h1> 
											<input type="text" name="telepon" placeholder="+62xxxxxxxxxx" />
										</div>

										<div class="col-6">
											<h1>Email</h1>
											<input type="email" name="email" placeholder="Email" />
										</div>

										<div class="col-6">
											<h1>Lulusan</h1>
											<select name="lulusan" id="lulusan">
												<option value="">- Lulusan -</option>
												<option value="smk">SMK/STM/SMKK</option>
												<option value="sma">SMA/SMU</option>
												<option value="ma">MA</option>
												<option value="d1">D1</option>
												<option value="d2">D2</option>
												<option value="d3">D3</option>
												<option value="s1">S1</option>

											</select>
										</div>											

										<div class="col-6">
											<h1>Nama Sekolah Asal<h1>
											<input type="text" name="SA" placeholder="Nama Sekolah Asal" />
										</div>

										<div class="col-12">
											<h1>Alamat Sekolah Asal</h1>
											<textarea name="alamatSA" placeholder="Alamat Sekolah Asal" rows="6" spellcheck="false"></textarea>
										</div>

										<div class="col-6">
											<h1>Jurusan Yang Dipilih</h1>
											<select name="dep" id="dep">
												<option value="">- Pilih Jurusan -</option>
												<?php
												foreach ($dp as $row) {
													echo "<option value='".$row->department_id."'>".$row->name." - SI</option>";
												}
												?>

											</select>
										</div>
										
								
								
								
										<!--<div class="col-3">
											<input type="checkbox" id="jk" name="p">
											<label for="p">Pria</label>
										</div>

										<div class="col-3">
											<input type="checkbox" id="jk" name="w">
											<label for="w">Wanita</label>
										</div>
										-->

										
									</div>
								</form>
							</section>


						
						 
							<section>
							
								<ul class="actions">
									<li><button class="button primary"	id="btnRegister"> Kirim </button></li>
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
						<li>&copy; Taksama.id . All rights reserved.</li>
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
			<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
			<script src="https://unpkg.com/sweetalert@2.1.0/dist/sweetalert.min.js"></script>
			<script type="text/javascript">
				$("#tgl").flatpickr({
					altInput: true,
				    altFormat: "j F Y",
				    dateFormat: "Y-m-d",
				});
				
				$('#btnRegister').click(function(){
					var data = $('#formRegister').serialize();
					$.ajax({
						type: 'post',
						url: '<?php echo site_url();?>university/addRegister',
						data: data,
						//dataType: 'json',
						success: function(data){
							resetForm();
							swal("Success!", "Silahkan cek email yang sudah didaftarkan untuk proses selanjutnya", "success").then(function(){
								location.reload();
							});
						}
					})
				});
				function resetForm(){
					$('#formRegister')[0].reset();
				}
			</script>

	</body>
</html>