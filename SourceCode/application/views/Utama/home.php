<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>RSPORT23</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url() ?>utama/css/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><style type="text/css" media="screen">.tabbed { height:420px; }</style><![endif]-->
<script src="<?php echo base_url() ?>utama/js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>utama/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>utama/js/jquery.slide.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>utama/js/jquery-func.js" type="text/javascript"></script>
</head>
<body>
<!-- Top -->
<div id="top">
  <div class="shell">
    <!-- Header -->
    <div id="header">
      <h1 id="logo">RSPORT23</a></h1>
      <div id="navigation">
        <ul>
          <li><a href="<?php echo base_url() ?>Home">Home</a></li>
          
          <li><a href="<?php echo base_url() ?>login_member">Login</a></li>
        </ul>
      </div>
    </div>
    <!-- End Header -->
    <!-- Slider -->
    <div id="slider">
      <div id="slider-holder">
        <ul>
          <li><img src="<?php echo base_url() ?>utama/css/images/slide1.jpg" alt="" /></a></li>
          <li><img src="<?php echo base_url() ?>utama/css/images/slide2.jpg" alt="" /></a></li>
          <li><img src="<?php echo base_url() ?>utama/css/images/slide1.jpg" alt="" /></a></li>
          <li><img src="<?php echo base_url() ?>utama/css/images/slide2.jpg" alt="" /></a></li>
          <li><img src="<?php echo base_url() ?>utama/css/images/slide1.jpg" alt="" /></a></li>
          <li><img src="<?php echo base_url() ?>utama/css/images/slide2.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div id="slider-nav"> <a href="#" class="prev">Previous</a> <a href="#" class="next">Next</a> </div>
    </div>
    <!-- End Slider -->
  </div>
</div>
<!-- Top -->
<!-- Main -->
<div id="main">
  <div class="shell">
    <!-- Search, etc -->
    <br><br><br>




<?php 
$datestring = '%Y - %m - %d - %h:%i %a';
$time = time();
echo mdate($datestring, $time); ?>
    <!-- End Search, etc -->
    <!-- Content -->
    <div id="content">
      <!-- Tabs -->
      <div class="tabs">
        <ul>
          <li><a href="#" class="active"><span>Jersey Club</span></a></li>
        </ul>
      </div>
      <!-- Tabs -->
      <!-- Container -->
      <div id="container">
        <div class="tabbed">
          <!-- First Tab Content -->
          <div class="tab-content" style="display:block;">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <ul>
              <?php foreach ($barang as $key => $value) { ?>
                <li>
                <h4><?php echo $value->nama_barang; ?></a></h4>
                <br>
                  <div class="image"> <img src="./assets/gambar/uploads/<?php echo $value->gambar; ?>" width="100" height="100" alt=""> </div>

                 

                  <p> Id : <span><?php echo $value->id_barang; ?></span><br />
                    Size List : <span><?php echo $value->ukuran_barang; ?></span><br />
                    Stock : <span><?php echo $value->stock_barang; ?></span><br />
                    </a> </p>
                  <p class="price">Harga: <strong><?php echo $value->harga_barang; ?></strong></p>
                  <br>
                  <p><a href="<?php echo site_url('pesanan/tambah_form/'.$value->id_barang); ?>">PESAN SEKARANG
              </a></p>
                </li>
                  <?php } ?>
               
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End Second Tab Content -->
          <!-- Third Tab Content -->
          <div class="tab-content">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <ul>
                
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End Third Tab Content -->
        </div>
        <!-- Brands -->
        <div class="brands">
          <h3>Brands</h3>
          <div class="logos"> <img src="<?php echo base_url() ?>utama/css/images/logo1.gif" alt="" /></a> <img src="<?php echo base_url() ?>utama/css/images/logo2.gif" alt="" /></a> <img src="<?php echo base_url() ?>utama/css/images/logo3.gif" alt="" /></a> <img src="<?php echo base_url() ?>utama/css/images/logo4.gif" alt="" /></a> <img src="<?php echo base_url() ?>utama/css/images/logo5.gif" alt="" /></a> </div>
        </div>
        <!-- End Brands -->
        <!-- Footer -->
        <div id="footer">
          <div class="left"> <a href="<?php echo base_url() ?>Home">Home</a> <span>|</span>  <a href="<?php echo base_url() ?>login_member">Login Member</a> <span>|</span> <a href="<?php echo base_url() ?>Login_admin">Login Admin</a> <span>|</span> Contact</a> </div>
          <div class="right"> &copy; Sitename.com. Design by <a href="http://chocotemplates.com">ChocoTemplates.com</a>  </div>
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Container -->
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Main -->
</body>
</html>

   