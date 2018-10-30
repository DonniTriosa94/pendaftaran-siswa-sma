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

            <?php echo form_open_multipart('c_tubes/nilai')?>
            <br><br>
              <div class="form-group row">
                <label for="inputEmai9" class="col-sm-3 form-control-label">NISN</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nisn" value="<?php echo $nisn; ?>" placeholder="NISN" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 form-control-label">Nilai Matematika</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="mtk" value="<?php echo set_value('mtk')?>" placeholder="Nilai Matematika">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 form-control-label">Nilai Bahasa Indonesia</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="bindo" value="<?php echo set_value('bindo')?>" placeholder="Nilai Bahasa Indonesia">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 form-control-label">Nilai IPA</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="ipa" value="<?php echo set_value('ipa')?>" placeholder="Nilai IPA">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 form-control-label">Nilai Bahasa Inggris</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="binggris" value="<?php echo set_value('binggris')?>" placeholder="Nilai Bahasa Inggris">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 form-control-label">foto/scan daftar nilai</label>
                <div class="col-sm-9">
                  <?php echo form_upload('gambar');?>
                </div>
              </div>

            <?php echo form_submit('upload','Kirim');
            echo form_close();?>
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


  