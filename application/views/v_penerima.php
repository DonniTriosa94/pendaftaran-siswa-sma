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
            <li><a href="<?php echo site_url('c_tubes/tambah_data'); ?>">Pendaftaran</a></li>
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
        <h1 class="title-header">Penerimaan Siswa Baru SMA YPWKS CILEGON</h1>
        <h3 class="">Tahun Ajaran 2015/2016</h3>
      </section> 
         </div>
    </div>

    <body>
    <div class="container">           
  <table class="table table-bordered">
    <br><br><thead>
      <tr>
        <th>NISN</th>
        <th>Nama</th>
        <th>Asal Sekolah</th>
         <th>Jumlah Nilai</th>
      </tr>
      <?php foreach ($nilai as $n) {
        foreach ($siswa as $s) {
          if($s->nisn==$n->nisn){
          ?>
          <tr>
            <td><?=$s->nisn?></td>
            <td><?=$s->nama_siswa?></td>
            <td><?=$s->asal?></td>
            <td><?=$n->jumlah?></td> 
          </tr>
          <?php
          }
        }
      }
      ?>

    </thead>
    <tbody>
      
    </tbody>
  </table>
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


  