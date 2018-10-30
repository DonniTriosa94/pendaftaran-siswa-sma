<?php
	$tahun = date("Y-m-d", time()-((86400*30)*12)*16);
	$bulan = date("Y-m-d", time()-((86400*30)*12)*14);
?>


<!DOCTYPE html>
<html lang="en">
		<head>
				<title>Pendaftaran Siswa Baru SMA YPWKS CILEGON </title>
				<link href="<?php echo base_url('plugin/css/bootstrap.min.css');?>"rel="stylesheet">
				<link href="<?php echo base_url('plugin/css/bootstrap.css');?>"rel="stylesheet">
		</head>
<link href="<?php echo base_url('plugin/css/bootstrap.css');?>"rel="stylesheet" type='text/css'>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
			<link href="<?php echo base_url('plugin/js/jquery.min.js');?>"rel="stylesheet"/>

<!-- Custom Theme files -->
		<link href="<?php echo base_url('plugin/css/style.css');?>"rel="stylesheet" type='text/css'>

<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
</script>
</head>
<body>
			<!----start-header---->
		<div class="header">
			<div class="container">
				<div class="logo">
					<a href="index.html"><img src="<?php echo base_url('plugin/images/logo.png'); ?>" alt=""></a>
				</div>
					<div class="menu">
					<a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
					<ul class="nav" id="nav">
						<li><a href="<?php echo site_url('c_tubes/index'); ?>">Beranda</a></li>
						<li class="current"><a href="<?php echo site_url('c_tubes/tambah_data'); ?>">Pendaftaran</a></li>
						<li><a href="<?php echo site_url('c_tubes/penerima'); ?>">Penerimaan</a></li>
						<li><a href="<?php echo site_url('c_tubes/kontak'); ?>">Kontak</a></li>
						<div class="clear"></div>
					</ul>
					<script type="text/javascript" src="js/responsive-nav.js"></script>
				</div>              
					<div class="clearfix"> </div>
					<!----//End-top-nav---->
			 </div>
		</div>
		<!----//End-header---->
		<div class="about">
		 <!----//start-banner---->
			<div class="container">
			<section class="title-section">
				<h1 class="title-header">Pendaftaran Siswa Baru SMA YPWKS CILEGON</h1>
				<h3 class="">Tahun Ajaran 2015/2016</h3>
			</section> 
				 </div>
		</div>

		<body>
		<div class="container">
			<div class="main">
				<div class="content-white turun">
	

				<?php 
					echo form_open_multipart('c_tubes/upload');?>
						<br><br>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 form-control-label">NISN</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nisn" value="<?php echo set_value('nisn')?>" placeholder="NISN" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 form-control-label">Nama</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama_siswa" value="<?php echo set_value('nama_siswa')?>" placeholder="Nama" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 form-control-label">Foto Diri</label>
							<div class="col-sm-10">
								<?php echo form_upload('foto');?>
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-2">Jenis Kelamin</label>
							<div class="col-sm-10">
								<div class="radio">
									<label>
										<input type="radio" name="jk" value="Perempuan" checked>
									 Perempuan
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="jk" value="laki-laki">
										Laki-laki
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group row">
							 <label for="inputEmail3" class="col-sm-2 form-control-label">Tempat Lahir</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="tempat_lahir" value="<?php echo set_value('tempat_lahir')?>" placeholder="Tempat Lahir" required>
							</div>
						</div>

						<div class="form-group row">
							 <label for="inputEmail3" class="col-sm-2 form-control-label">Tanggal Lahir</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir')?>" min="<?php echo "".$tahun;?>" max="<?php echo "".$bulan;?>"placeholder="Tanggal Lahir" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 form-control-label">Alamat</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="alamat" value="<?php echo set_value('alamat')?>" placeholder="Alamat" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 form-control-label">Agama</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="agama" value="<?php echo set_value('agama')?>" placeholder="Agama" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 form-control-label">Anak ke-</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="anakke" value="<?php echo set_value('anakke')?>" placeholder="Anak ke-" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 form-control-label">No Telepon</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="tlp" value="<?php echo set_value('tlp')?>" placeholder="No Telepon"required>
							</div>
						</div>

						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 form-control-label">Asal Sekolah</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="asal" value="<?php echo set_value('asal')?>" placeholder="Asal Sekolah" required>
							</div>
						</div>

						<?php echo form_submit('upload','Kirim');
					echo form_close();
		 		?>
		 		<br><br>
				</div>
			</div>
		</div>
				<div class="footer">
				</div>
				<div class="footer_bottom">
					<div class="copy">
							<p>&copy; Anisa & Donni 2015 Framework by Bootstrap</a></p>
					 </div>
				</div>
		</div>
		</body>
</html>


	