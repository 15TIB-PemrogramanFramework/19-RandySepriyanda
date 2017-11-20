<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>RSPORT23 - Form Member</title>
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

    
  <h3>  FORM <a href="<?php echo base_url() ?>Home" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> LANJUT BERBELANJA </a></h3> 
<hr class="soft"/>
  <table class="table table-bordered">
    <tr><th> FORM DAFTAR MEMBER </th></tr>
     
     


      <form action="<?php echo $aksi; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
          <tr> 
          <td>
          <div class="control-group">
          <label class="control-label" for="inputUsername">Username</label>
          <div class="controls"> 
          </td>
          <td>
         <input type="text" name="username_member" class="form-control" placeholder="Inputkan Username" value="">
          </div>
          </div>
          </td>
          <tr>
          <td>
          <div class="control-group">
          <label class="control-label" for="inputPassword1">Password</label>
          <div class="controls">
          </td>
           <td>
          <input type="password" name="password_member" placeholder="Password"  value="">
          </div>
          </div>
          </td>
          </tr>

           <tr>
          <td>
          <div class="control-group">
          <label class="control-label" for="inputPassword1">Nama Member</label>
          <div class="controls">
          </td>
           <td>
          <input type="text" name="nama_member" placeholder="ex : Eden Hazard" value="">
          </div>
          </div>
          </td>
          </tr>

           <tr>
          <td>
          <div class="control-group">
          <label class="control-label" for="inputPassword1">Jenis Kelamin</label>
          <div class="controls">
          </td>
           <td>
           <input type="radio" name="jk_member" value="Laki">Pria
           <br>
           <input type="radio" name="jk_member" value="Wanita">Wanita
          </div>
          </div>
          </td>
          </tr>

           <tr>
          <td>
          <div class="control-group">
          <label class="control-label" for="inputPassword1">No Hp</label>
          <div class="controls">
          </td>
           <td>
          <input type="text" name="hp_member" placeholder="ex : 08127516331" value="">
          </div>
          </div>
          </td>
          </tr>

           <tr>
          <td>
          <div class="control-group">
          <label class="control-label" for="inputPassword1">Alamat Lengkap</label>
          <div class="controls">
          </td>
           <td>
          <input type="text" name="alamat_member" placeholder="ex : perum pandau blok c.19 no.16, Pekanbaru, Riau" value="">
          </div>
          </div>
          </td>
          </tr>

           <tr>
          <td>
          <div class="control-group">
          <label class="control-label" for="inputPassword1">Email</label>
          <div class="controls">
          </td>
           <td>
          <input type="text" name="email_member" placeholder="ex : randy@yahoo.com" value="">
          </div>
          </div>
          </td>
          </tr>

          
          
          <tr>

          <td>
        
        <input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
          <button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
      
          </td>
      
          </tr>
          </form>
          </table>    





    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Main -->
</body>
</html>
