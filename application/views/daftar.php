<!DOCTYPE HTML>

<html>
	<head>
		<title>TUNFC. - Telkom University National Futsal Championship</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/main.css'?>" />
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url().'images/tunico.png' ?>">

		<!-- Bootstrap CSS -->
   		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body class="subpage">

		<!-- Header -->
			<?php include 'header.php';?>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>TUNFC</p>
						<h2>Recruitment</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>tunfc 2019</p>
								<h2>Form Recruitment</h2>
							</header>
							<form method="post" action="<?php echo base_url().'rekruitasi/regis'; ?>">
								<div class="container">
									<div class="form-row">
										<div class="form-group col-md-12">
											<input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required>
										</div>
										<div class="form-group col-md-12">
											<!---<input type="date" name="tanggal" id="tanggal" placeholder="TTL" required>-->
											<input placeholder="Tempat Tanggal Lahir" name="tanggal" id="tanggal" type="text" onfocus="(this.type='date')" required>
										</div>
										<div class="form-group col-md-6">
											<select name="jeniskelamin">
												<option selected>--Jenis Kelamin--</option>
												<option>Laki-Laki</option>
		  										<option>Perempuan</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<input type="text" name="nim" id="nim" placeholder="NIM" required>
										</div>
										<div class="form-group col-md-6">
											<input type="Email" name="email" id="email" placeholder="E-Mail">
										</div>
										<div class="form-group col-md-6">
											<input type="text" name="telp" id="telp" placeholder="No. Telepon" required>
										</div>
										<div class="form-group col-md-6">
											<input type="text" name="idline" id="idline" placeholder="ID Line" required>
										</div>
										<div class="form-group col-md-6">
											<input type="text" name="instagram" id="instagram" placeholder="Instagram">
										</div>
										<div class="form-group col-md-12">
											<textarea name="alamat" id="alamat" placeholder="Alamat di Bandung"></textarea>
										</div>
										<div class="form-group col-md-8">
											<select name="jurusan">
												<option selected>--Jurusan--</option>
												<option>S1 Teknik Telekomunikasi</option>
		  										<option>S1 Teknik Telekomunikasi (International)</option>
		  										<option>S1 Teknik Fisika</option>
		  										<option>S1 Teknik Elektro</option>
		  										<option>S1 Sistem Komputer</option>
		  										<option>S1 Teknik Informatika</option>
												<option>S1 Teknik Informatika (International)</option>
		  										<option>S1 Teknologi Informasi</option>
		  										<option>S1 Ilmu Komputasi</option>
												<option>S1 Teknik Industri</option>
		  										<option>S1 Teknik Industri (International)</option>
		  										<option>S1 Sistem Informasi</option>
		  										<option>S1 Sistem Informasi (International) </option>
		  										<option>S1 International ICT Business</option>
		  										<option>S1 MBTI</option>
		  										<option>S1 Akuntansi</option>
		  										<option>S1 Administrasi Bisnis</option>
		  										<option>S1 Administrasi Bisnis (International)</option>
		  										<option>S1 Ilmu Komunikasi</option>
		  										<option>S1 Ilmu Komunikasi (International)</option>
		  										<option>S1 Digital Public Relation</option>
		  										<option>S1 Desain Komunikasi Visual</option>
		  										<option>S1 Desain Produk</option>
		  										<option>S1 Desain Interior</option>
		  										<option>S1 Kriya Tekstil Mode</option>
		  										<option>S1 Seni Rupa Murni</option>
		  										<option>S1 Seni Rupa Intermedia</option>
		  										<option>S1 Terapan Multimedia</option>
		  										<option>D3 Teknik Telekomunikasi</option>
		  										<option>D3 Teknik Informatika </option>
		  										<option>D3 Manajemen Informatika </option>
		  										<option>D3 Komputerisasi Akuntansi </option>
		  										<option>D3 Teknik Komputer </option>
		  										<option>D3 Manajemen Pemasaran </option>
		  										<option>D3 Perhotelan </option>
		  										<option>D4 Sistem Multimedia </option>
		  										<option>Lainnya </option>
											</select>
											</select>
											</select>
											</select>
										</div>
										<div class="form-group col-md-4">
											<select name="angkatan">
												<option selected>--Angkatan--</option>
												<option>2016</option>
		  										<option>2017</option>
		  										<option>2018</option>
											</select>
										</div>
										<div class="form-group col-md-12">
											<select name="status">
												<option selected>--Status--</option>
												<option>Single</option>
		  										<option>Relationship</option>
		  										<option>LDR</option>
		  										<option>Complicated</option>
											</select>
										</div>
										  <button class="btn btn-primary col-md-12" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
										   Klik untuk mengetahui Info Divisi TUNFC 2019
										  </button>
										<div class="collapse" id="collapseExample">
										  <div class="card card-body">
										   <ul>
											<li>CEC :<br>
											Mengonsepkan acara serta merancang sistem pertandingan TUNFC 2019<br>
											- Membuat konsep acara TUNFC 2019 mulai dari opening, pertandingan, final dan closing.<br>
											- Merancang sistem pertandingan TUNFC 2019.<br>
											</li>
											<li>POP:<br> 
											Merangkul semua elemen yang terlibat dalam kegiatan TUNFC (internal atau eksternal). Sebagai pendamping tim yang mengikuti kegiatan TUNFC 2019.<br>
											- Humas Internal: Sebagai perangkul semua elemen yang bekerja untuk TUNFC 2019 sehingga dapat terciptanya rasa kekeluargaan yang luar biasa.<br>
											- Humas Eksternal: Sebagai pencipta silaturahmi antar universitas agar terjalin hubungan yang baik dan harmonis.<br>
											- LO: Sebagai pendamping tim yang memperkenalkan TUNFC 2019 kepada universitas-universitas yang mengikuti TUNFC 2019.<br>
											- Publikasi: Mempublikasikan segala kegiatan TUNFC 2019 di social media, seperti: twitter, line, instagram, youtube,dll.<br>
											</li>

											<li>CAM:<br>
											- Konsumsi: Menyiapkan segala kebutuhan konsumsi untuk panitia, wasit, hingga peserta TUNFC 2019 selama acara berlangsung.<br>
											- Medis: Memberikan pertolongan pertama kepada peserta TUNFC 2019 yang mengalami cedera saat pertandingan berlangsung hingga membutuhkan pertolongan tingkat lanjut.<br>
											</li>
											<li>
											SoCS:<br>
											- Mendapatkan sponsor untuk bantuan dana bagi kelancaran acara TUNFC 2019.<br>
											- Menyediakan Merchendise untuk Panitia maupun Pemain.<br>
											</li>
											<li>
											PES:<br>
											- Perizinan: Mengurus surat menyurat yang berkaitan dengan perizinan pra acara, acara hingga pasca acara.<br>
											- Perlengkapan: Menyiapkan segala kebutuhan perlengkapan acara TUNFC 2019.<br>
											- Keamanan: Melakukan koordinasi dengan pihak yang berwajib (Pihak Kepolisian) dan pihak terkait lainnya yang bertanggung jawab atas keamanan guna kelancaran TUNFC 2019.<br>
											</li>
											<li>
											3D:<br>
											- Desain: Mendesain segala kebutuhan acara untuk promosi ataupun dalam bentuk lainnya.<br>
											- Dekorasi: Mendekorasi tempat yang akan digunakan untuk TUNFC 2019.<br>
											- Dokumentasi: Mendokumentasikan segala acara TUNFC 2019, dari awal sampai akhir acara, serta sebagai tambahan membuat sebuah video trailer dan video after movie.<br>
											</li>
											</ul>
										  </div>
										</div>
										<div class="form-group col-md-6">
											<br>
											<select name="divisi1">
												<option selected>--Divisi 1--</option>
												<option>CEC</option>
		  										<option>POP</option>
		  										<option>CAM</option>
		  										<option>SoCS</option>
		  										<option>PES</option>
		  										<option>3D</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<br>
											<select name="divisi2">
												<option selected>--Divisi 2--</option>
												<option>CEC</option>
		  										<option>POP</option>
		  										<option>CAM</option>
		  										<option>SoCS</option>
		  										<option>PES</option>
		  										<option>3D</option>
											</select>
										</div>
										<button type="submit" name="submit" class="button fit small" href="<?php echo base_url().'rekruitasi/akhir' ?>">Daftar</button>
									</div>									
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<?php include 'footer.php';?>

		<!-- Scripts -->
			<script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
			<script src="<?php echo base_url().'assets/js/jquery.scrollex.min.js'?>"></script>
			<script src="<?php echo base_url().'assets/js/skel.min.js'?>"></script>
			<script src="<?php echo base_url().'assets/js/util.js'?>"></script>
			<script src="<?php echo base_url().'assets/js/main.js'?>"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>
</html>