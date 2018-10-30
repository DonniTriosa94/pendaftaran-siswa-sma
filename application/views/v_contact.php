<!DOCTYPE HTML>
<html>
	<head>
		<title>SMA YPWKS CILEGON</title>
		<link href="<?php echo base_url('plugin/css/bootstrap.css');?>"rel="stylesheet" type='text/css'>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<link href="<?php echo base_url('plugin/js/jquery.min.js');?>"rel="stylesheet"/>
 	   <link href="<?php echo base_url('plugin/css/style.css');?>"rel="stylesheet" type='text/css'>

<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
					  <li><a href="<?php echo site_url('c_tubes/tambah_data'); ?>">Pendaftaran</a></li>
					  <li><a href="<?php echo site_url('c_tubes/penerima'); ?>">Penerimaan</a></li>
					  <li class="current"><a href="<?php echo site_url('c_tubes/kontak'); ?>">Kontak</a></li>								
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
				<h1 class="title-header">
				Kontak</h1>
			</section> 
	       </div>
		</div>
		<div class="contact">
			<div class="container">
				<h2 class='item_title'>Kontak</h2>
			    <div class="map">
				  <iframe src="https://www.google.co.id/maps/place/Jl.+Kawat,+Kec.+Purwakarta,+Kota+Cilegon,+Banten+42434/@-5.9940186,106.0363133,17z/data=!3m1!4b1!4m2!3m1!1s0x2e4191df0825d247:0xb7d3fb876361d45f"></iframe><br><small><a href="https://www.google.co.id/maps/place/Jl.+Kawat,+Kec.+Purwakarta,+Kota+Cilegon,+Banten+42434/@-5.9940186,106.0363133,17z/data=!3m1!4b1!4m2!3m1!1s0x2e4191df0825d247:0xb7d3fb876361d45f"></a></small>
			    </div>
                <div class="row contact_top">
                	<div class="col-md-4 contact_details">
                	   <h5>Alamat :</h5>
                	   <i class="address"></i>
                	   <div class="contact_address">
						Jl. Kawat No.10 Komp.KS Cilegon <br>
						Serang- Banten. 42161
						</div>
                	</div>
                	<div class="col-md-4 contact_details">
                	   <h5>Phone :</h5>
                	   <i class="phone"></i>
                	   <div class="contact_address">
						(0254)384673<br>
						(021) 8911 2219<br>
					   </div>
                	</div>
                	<div class="col-md-4 contact_details">
                	   <h5>Email :</h5>
                	   <i class="mail"></i>
                	   <div class="contact_mail">
						 admin@smaks.sch.id 
					   </div>
                	</div>
                </div>
                <div class="contact_bottom">
                   <h3>Kritik dan Saran</h3>
                   <?php echo form_open('c_tubes/insert_kontak');?>
					<div class="contact-to">
                     	<input type="text" class="text" name="nama" value="Nama..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nama...';}">
					 	<input type="text" class="text" name="email"value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}" style="margin-left: 10px">
					 	<input type="text" class="text" name="subject"value="subject..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'subject...';}" style="margin-left: 10px">
					</div>
					<div class="text2">
	                   <textarea name="pesan" value="Pesan:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Pesan..</textarea>
	                </div>
	                <div>
	               		<input type="submit" name="submit" class="submit"></a>
	                </div>
	             <?php echo form_close();?>
                </div>
			</div>
		</div>
		<!----//end-banner---->

	    <div class="footer">
			<div class="footer_top">
				<div class="container">
					<div class="footer_head">
						<h2>SMA YPWKS CILEGON</h2>
						<p>Beriman, Berilmu, Berbudaya dan Berwawasan Global</p>
		   			</div>
			   </div>
		     </div>
		     <div class="footer_midle">
		       </div>
		    </div>
		    <div class="footer_bottom">
		    	<div class="copy">
		          <p>&copy; Anisa Donni 2015 Template by <a href="http://w3layouts.com" target="_blank">  w3layouts</a></p>
		       </div>
		    </div>
		</div>
</body>
</html>		