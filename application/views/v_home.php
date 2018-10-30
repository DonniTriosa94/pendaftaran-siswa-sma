<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>SMA YPWKS CILEGON</title>
	<link href="<?php echo base_url('plugin/css/bootstrap.css');?>"rel="stylesheet">
    <link href="<?php echo base_url('plugin/js/jquery.min.js');?>"rel="stylesheet"/>
	<link href="<?php echo base_url('plugin/css/style.css');?>"rel="stylesheet"/>
	<script src="<?php echo base_url('plugin/js/jquery.min.js');?>"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont---->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,600,700,900' rel='stylesheet' type='text/css'>
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
</script>
</head>
<body>
      <!----start-header---->
		<div class="header">
			<div class="container">
				<div class="logo">
				 <img src="<?php echo base_url('plugin/images/logo.png'); ?>" alt="">
				</div>
		  		<div class="menu">
					<a class="toggleMenu" href="#"><img src="<?php echo base_url('plugin/images/nav_icon.png'); ?>" alt="" /> </a>
					<ul class="nav" id="nav">
					  <li class="current"><a href="<?php echo site_url('c_tubes/index'); ?>">Beranda</a></li>
					  <li><a href="<?php echo site_url('c_tubes/tambah_data'); ?>">Pendaftaran</a></li>
					  <li><a href="<?php echo site_url('c_tubes/penerima'); ?>">Penerimaan</a></li>
					  <li><a href="<?php echo site_url('c_tubes/kontak'); ?>">Kontak</a></li>							
					  <div class="clear"></div>
					</ul>
					<link href="<?php echo base_url('plugin/js/responsive.nav.js');?>"rel="stylesheet"/>
				</div>							
	  			<div class="clearfix"> </div>
			    <!----//End-top-nav---->
			 </div>
		</div>
		<!----//End-header---->
		<!----//start-banner---->
		<div class="banner text-center">
				<div class="container">
					<div class="banner-info">
						<h1> <font color="black"> SMA YAYASAN PENDIDIKAN <br> WARGA KRAKATAU STEEL</h1>
						<p><font color="black"> Beriman, Berilmu, Berbudaya <br>dan Berwawasan Global</p>
						<label class="page-scroll"><a class="banner-btn class scroll" href="#feature"><span> </span></a></label>
				    </div>
				</div>
		</div>
		<!----//end-banner---->
		<!----//start-content---->
		<div class="main">
		   <div class="content_white">
			<h2>SMA YAYASAN PENDIDIKAN WARGA KRAKATAU STEEL</h2>
		   </div>
		   <div class="featured_content" id="feature">
		   	 <div class="container">
			   	<div class="row text-center">
			   		<div class="col-md-3 feature_grid1">
			   			<a class="icon1" ><img src="<?php echo base_url('plugin/images/iconsatu.png'); ?>" alt="" /> </a>
			   			<h3 class="m_1"><a href="#">Beriman</a></h3>
			   			<p class="m_2">Mewujudkan warga sekolah yang beriman, bertawa dengan mengembangkan sikap an perilak religius baik didalam sekolah maupun diluar sekolah</p>
			   		</div>
			   		<div class="col-md-3 feature_grid1">
			   			<a class="icon2" ><img src="<?php echo base_url('plugin/images/icondua.png'); ?>" alt="" /> </a>
			   			<h3 class="m_1"><a href="#">Berilmu</a></h3>
			   			<p class="m_2">Mewujudkan pendidikan yang menghasilkan lulusan yang memiliki nilai kecerdasan, cinta ilmu dan keingintahuan sera memiliki keunggulan kompetitif</p>
			   		</div>
			   		<div class="col-md-3 feature_grid1">
			   			<a class="icon3" ><img src="<?php echo base_url('plugin/images/icontiga.png'); ?>" alt="" /> </a>
			   			<h3 class="m_1"><a href="#">Berbudaya</a></h3>
			   			<p class="m_2">Mewujudkan perangkat kurikulum yang mengangkat nilai budaya leluhur bangsa dan meningkatkan kecintaan pada tanah air Indonesia beserta budaya yang ada</p>
			   		</div>
			   		<div class="col-md-3 feature_grid2">
			   			<a class="icon4" ><img src="<?php echo base_url('plugin/images/iconempat.png'); ?>" alt="" /> </a>
			   			<h3 class="m_1"><a href="#">Berwawasan Global</a></h3>
			   			<p class="m_2">Mewujudkan perangkat kurikulum yang lengkap dan berwawasan ke depan dalam penyelengaraan pembelajaran yang aktif, kreatif, efektif dan menyenangkan</p>
			   		</div>
			   	</div>
		    </div>
		   </div>
		  <div class="m_3"><span class="left_line"> </span> <span class="right_line"> </span></div>
		  <div class="container">
			  <ul id="flexiselDemo3">
				<li><img src="<?php echo base_url('plugin/images/mushola.jpg'); ?>" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo base_url('plugin/images/taman2.jpg'); ?>" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo base_url('plugin/images/kelas.jpg'); ?>" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo base_url('plugin/images/kantin.jpg'); ?>" class="img-responsive" alt=""/></li>
			 </ul>
			 <script type="text/javascript">
				$(window).load(function() {
					
					$("#flexiselDemo3").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			</script>
			<script src="<?php echo base_url('plugin/js/jquery.flexisel.js');?>"></script>
		   	<div class="testmonial"> 
		    <div class="row testmonial_top">
		    	<div class="col-md-6">
		    		<ul class="test_box">
		    			<li class="test_img"><img src="<?php echo base_url('plugin/images/kelas.jpg'); ?>" class="img-responsive" alt=""/> </li>
						<li class="test_desc">
							<h4><a href="#">Ruang Kelas</a></h4>
							<p>Memiliki kelas berstandar internsional dengan kapasitas 20 orang per kelas</p>
					    </li>	
					    <div class="clearfix">	</div>    				
		    		</ul>
		    	</div>
		    	<div class="col-md-6">
		    		<ul class="test_box">
		    			<li class="test_img"><img src="<?php echo base_url('plugin/images/kantin.jpg'); ?>" class="img-responsive" alt=""/> </li>
						<li class="test_desc">
							<h4><a href="#">Kantin Sehat</a></h4>
							<p>Satu-satunya sekolah yang memiliki kantin sehat dengan sistem prasmanan secara gratis setiap hainya</p>
					    </li>	
					    <div class="clearfix">	</div>    		    				
		    		</ul>
		    	</div>
		    </div>	
		    <div class="row testmonial_bottom">
		    	<div class="col-md-6">
		    		<ul class="test_box">
		    			<li class="test_img"><img src="<?php echo base_url('plugin/images/lapangan.jpg'); ?>" class="img-responsive" alt=""/> </li>
						<li class="test_desc">
							<h4><a href="#">Lapangan Luas</a></h4>
							<p>Memiliki beberapa lapangan luas untuk menunjang kegiatan olahraga dan ekstrakulikuler</p>
					    </li>	
					    <div class="clearfix">	</div>    		    				
		    		</ul>
		    	</div>
		    	<div class="col-md-6">
		    		<ul class="test_box">
		    			<li class="test_img"><img src="<?php echo base_url('plugin/images/taman.jpg'); ?>" class="img-responsive" alt=""/> </li>
						<li class="test_desc">
							<h4><a href="#">Kebun Sekolah</a></h4>
							<p>Memiliki kebun yang didalamnya terdapat lebih dari 50 macam tanaman dan bunga-bunga</p>
					    </li>	
					    <div class="clearfix">	</div>    		    				
		    		</ul>
		    	</div>
		    </div>	
		  </div>    
		</div>
		   	 <div class="container">
			   	<div class="well well-sm"><br>
			   		<h2><style="center">Syarat dan Ketentuan Pendaftaran Online Siswa Baru</h2><br>
			   		1. Mengisi formulir pendaftaran secara online <br>
			   		2. Mengupload foto resmi dengan background biru untuk perempuan dan merah untuk laki-laki<br>
			   		3. Mengisi data diri dengan lengkap <br>
			   		4. Mengupload ijasah SMP dalam bentuk gambar <br>
			   		5. Pembayaran biaya pendaftaran dilaksanakan di sekolah sehari setelah mendaftar<br> 
			   		6. Penaftaran online dilaksanakan pada tanggal 17 s.d 22 Juli 2015 <br><br>
			   	</div>
		    </div>
		<div class="footer">
		    <div class="footer_bottom">
		    	<div class="copy">
		          <p>&copy; Anisa & Donni 2015 Framework by Bootstrap</a></p>
		       </div>
		    </div>
		</div>
		</div>
</body>
</html>		