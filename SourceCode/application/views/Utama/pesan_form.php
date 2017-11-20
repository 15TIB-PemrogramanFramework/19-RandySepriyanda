<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>RSPORT23</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url() ?>utama/css/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><style type="text/css" media="screen">.tabbed { height:420px; }</style><![endif]-->
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery.slide.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
  <link rel="stylesheet/less" type="text/css" href="<?php echo base_url() ?>assets/utama/themes/less/simplex.less">
  <link rel="stylesheet/less" type="text/css" href="<?php echo base_url() ?>assets/utama/themes/less/classified.less">
  <link rel="stylesheet/less" type="text/css" href="<?php echo base_url() ?>assets/utama/themes/less/amelia.less">  MOVE DOWN TO activate
  -->
  <!--<link rel="stylesheet/less" type="text/css" href="<?php echo base_url() ?>assets/utama/themes/less/bootshop.less">
  <script src="themes/js/less.js" type="text/javascript"></script> -->
  
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="<?php echo base_url() ?>assets/utama/themes/bootshop/bootstrap.min.css" media="screen"/>
   

</head>
<body>
<!-- Top -->
<div id="top">
  <div class="shell">
    <!-- Header -->
    <div id="header">
      <h1 id="logo"><a href="<?php echo base_url() ?>utama/#">Urgan Gear</a></h1>
      <div id="navigation">
        <ul>
          <li><a href="<?php echo base_url() ?>Home">Home</a></li>
          <li><a href="<?php echo base_url() ?>login_member">Login</a></li>
        </ul>
      </div>
    </div>
    <!-- End Header -->
   
  </div>
</div>
<!-- Top -->
<!-- Main -->
<div id="main">
  <div class="shell">
  
    <!-- Content -->
    <div id="content">
     <br>
     <br><br>

    
  <h3>  FORM ORDER <a href="<?php echo base_url() ?>Home" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> LANJUT BERBELANJA </a></h3> 
<hr class="soft"/>
  <table class="table table-bordered">
    <tr><th> Silahkan daftar member terlebih dahulu sebelum melakukan transaksi order! </th></tr>
     <tr> 
     
      <td><a href="<?php echo site_url('member/tambah'); ?>" class="btn btn-primary" 
    style="margin-top:20px; margin-bottom:20px">
    <i class="fa fa-plus-circle"></i> DAFTAR MEMBER</a></td>
    
<br>
<br>
      </tr>


  </table>    

<br>
<br>
<br>
<br>
<br>

<table class="table table-bordered">
              <thead>

<tr>
<td>ID Member</td>
<td><?php echo $this->session->userdata('id_member'); ?></td>

</tr>

                <tr>
                  <th>ID Barang</th>
                  <th>Nama Barang</th>
                  <th>Keterangan</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Jasa Pengiriman</th>
                  <th>Tanggal</th>
        </tr>
              </thead>
              <tbody>

        <form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
                <tr>
                  <td><?php echo $id_barang; ?></td>
                  <td><?php echo $nama_barang; ?></td>
                  <td><input type="text" name="barang_pesanan" placeholder="cth: Jersey Chelsea Home size S"></td>
                  <td>
          <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" name="jumlah_barang_pesanan"></div>
          </td>
          <td><?php echo $harga_barang; ?></td>

          <td><input type="radio" name="jasa_pesanan" value="jne"> JNE
          <br>
               <input type="radio" name="jasa_pesanan" value="pos"> POS
               <br>
               <input type="radio" name="jasa_pesanan" value="tiki"> TIKI</td>

        <td><?php echo date("Y-m-d");?></td>
                </tr>
       
         <input type="hidden" name="status_pesanan" value="Konfirmasi Transfer">
        <input type="hidden" name="id_member" value="<?php echo $this->session->userdata('id_member'); ?>">
         <input type="hidden" name="tanggal_pesanan" value="<?php echo date("Y-m-d");?>">
         
         <?php  $this->session->set_userdata('id_barang',$id_barang); ?>

         <input type="hidden" name="total_bayar_pesanan" value="<?php echo $harga_barang; ?>">
         <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
         <tr></tr> <tr></tr>
          <tr><td></td><td></td><td></td><td></td><td></td><td></td><td>
        <button class="btn btn-primary" type="submit"><?php echo $button; ?></button></td>
        </tr>


                </form>
        </tbody>
            </table>



    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Main -->
</body>
</html>
