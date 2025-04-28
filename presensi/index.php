<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php title();?></title>
    <script src="js/jquery.min.js"></script>
    <script src="js/webcam.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style type="text/css">
        #results { padding: 0px; background:#EEFFEE; width: 490; height: 390 }
    </style>
    <link href="css/default.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="library/tiny_mce/tiny_mce.js"></script>
    <script type="text/javascript" src="conf/validator.js"></script>
    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    <script type="text/javascript" src="js/jquery/jquery.dropdown.js"></script>



 <link rel="stylesheet" href="http://10.10.20.253/dashboard/APPS-ROBOT/GITHUB/assets/css/vendor.css">
    <link rel="stylesheet" href="http://10.10.20.253/dashboard/APPS-ROBOT/GITHUB/assets/css/style.css">
    <link rel="stylesheet" href="http://10.10.20.253/dashboard/APPS-ROBOT/GITHUB/assets/css/responsive.css">




  <link rel="stylesheet" href="http://10.10.20.253/dashboard/APPS-ROBOT/GITHUB/vendors-V80/feather/feather.css">
  <link rel="stylesheet" href="http://10.10.20.253/dashboard/APPS-ROBOT/GITHUB/vendors-V80/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="http://10.10.20.253/dashboard/APPS-ROBOT/GITHUB/vendors-V80/css/vendor.bundle.base.css">
 <link rel="stylesheet" href="http://10.10.20.253/dashboard/APPS-ROBOT/GITHUB/assets-V80/css/vendor.css">
    <link rel="stylesheet" href="http://10.10.20.253/dashboard/APPS-ROBOT/GITHUB/assets-V80/css/style.css">
    <link rel="stylesheet" href="http://10.10.20.253/dashboard/APPS-ROBOT/GITHUB/assets-V80/css/responsive.css">

  

</head>
<!--This template was created by www.flash-templates-today.com
Flash-Templates-Today.com - Gives a possibility to obtain a ready free flash template, free css template and other kind of website template!-->
<body>


<!-- begin #container -->
<h1><div id="container">
    <!-- begin #header -->
    <div id="header">
    	<h1><div class="headerBackground">
            <h1><?php echo $setting["nama_instansi"]; ?><br/>SISTEM INFORMASI PRESENSI PEGAWAI</h1>
            <h3><?php echo $setting["alamat_instansi"].", ".$setting["kabupaten"].", ".$setting["propinsi"].". ".$setting["kontak"].", E-mail : ".$setting["email"] ?></h3>
        </div>
        <div id="navcontainer">
           <h1> <?php tampilMenu();?>
         </div>
    </div>
    <!-- end #header -->
    <!-- begin #sidebar1 -->

    <!-- end #sidebar1 -->
    <!-- begin #mainContent -->
    <div id="mainContent">
		
	<div class="t">
        <div class="b">
        <div class="l">
        <div class="r">
        <div class="bl">
        <div class="br">
        <div class="tl">
        <div class="tr">
        <div class="y">
      <?php
           $halaman= validTeks(isset($_GET["page"])?$_GET["page"]:NULL);
           if($halaman=="Input"){
               include "inputdata.php";
           }elseif($halaman=="TampilDatang"){
               include "tampildatang.php";
           }elseif($halaman=="TampilPulang"){
               include "tampilpulang.php";
           }elseif($halaman=="GantiKeterangan"){
               include "ubah.php";
           }elseif($halaman=="Cari"){
               include "cari.php";
           }else{
               include "inputdata.php";
           }
        ?>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    <!-- end #mainContent -->
    <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
    <!-- begin #footer -->
    <div id="footer">
        <p>
        <?php bawah();?>
        </p>
    </div>
    <!-- end #footer -->
</div>
<!-- end #container -->
</body>
</html>


