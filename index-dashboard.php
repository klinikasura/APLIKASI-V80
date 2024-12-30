<?php
session_start();
if (empty($_SESSION['username'])) {
    header('location:../index.php');
} else {
    include "conn.php";
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
      <title>Aplikasi RS. Asura</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
       <link href="http://192.168.88.203/dashboard/download.jpeg" rel="icon" type="image/png" />
        <!-- bootstrap 3.0.2 -->
        <link href="css-version/bootstrap.min.css" rel="stylesheet" type="text/css" />

 <link rel="stylesheet" href="http://192.168.88.203/dashboard/APPS-ROBOT/assets/css/vendor.css">
    <link rel="stylesheet" href="http://192.168.88.203/dashboard/APPS-ROBOT/assets/css/style.css">
    <link rel="stylesheet" href="http://192.168.88.203/dashboard/APPS-ROBOT/assets/css/responsive.css">

  <link rel="stylesheet" href="vendors-V80/feather/feather.css">
  <link rel="stylesheet" href="vendors-V80/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors-V80/css/vendor.bundle.base.css">
 <link rel="stylesheet" href="assets-V80/css/vendor.css">
    <link rel="stylesheet" href="assets-V80/css/style.css">
    <link rel="stylesheet" href="assets-V80/css/responsive.css">





        <!-- font Awesome -->
        <link href="css-version/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css-version/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css-version/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css-version/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="css-version/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
        <!-- Daterange picker -->
        <link href="css-version/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- iCheck for checkboxes and radio inputs -->
        <link href="css-version/iCheck/all.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <!-- Theme style -->
        <link href="css-version/style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="refresh" content="100;url=logout.php"/>  

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

        <style type="text/css">

        </style>

<audio autoplay>
    <source src="INFO2.mp3" type="audio/mpeg">
    </audio>


    </head>







 <div class="footer-area">
        <div class="footer-top text-center" style="background-image: url();">
            <div class="container">
                
            </div>
        </div>








    <body class="">
        <!-- header logo: style can be found in header.less -->
        <header class="">
            
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="" role="">
                <!-- Sidebar toggle button-->
                <a href="#" class="" data-toggle="" role="">                </a>
                <div class="">
                    <ul class="nav navbar-nav">

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="">
                            <a href="#" class="" data-toggle="">
                                <i class="fa fa-user"></i>
                                <span><?php echo $_SESSION['nama']; ?>




  <div class="col-6">


<a href="edit-anggota.php?hal=edit&kd=<?php echo $_SESSION['id']; ?>" class="btn btn-green ba-add-balance-btn" Target="_blank"> CETAK KARTU KARYAWAN <i ></i></a>





                           
                        
                                <li class=""></li>
    <p>&nbsp;</p>
                                
<!-- Menampilkan Jam (Aktif) -->
	<right><div id="clock"></div>
		<script type="text/javascript">
		<!--
		function showTime() {
		    var a_p = "";
		    var today = new Date();

		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 24) {

		        a_p = "(WIB)";
		    } else {
		        a_p = "(WIB)";
		    }

		    if (curr_hour == 0) {

		        curr_hour = 24;
		    }
		    if (curr_hour > 24) {

		        curr_hour = curr_hour - 24;
		    }
		    curr_hour = checkTime(curr_hour);
		    curr_minute = checkTime(curr_minute);

		    curr_second = checkTime(curr_second);
		 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		    }


		function checkTime(i) {
		    if (i < 10) {


		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);
		//-->
		</script>

		<!-- Menampilkan Hari, Bulan dan Tahun -->
		
		<script type='text/javascript'>
			<!--

			var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;
			document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
			//-->
		</script>

      
      




<p>
<center><div id="idb32fcf3b124c9" a='{"t":"s","v":"1.2","lang":"id","locs":[],"ssot":"c","sics":"ds","cbkg":"rgba(255,255,255,0)","cfnt":"#000000","slfs":"33","slis":"45","slgp":"14"}'><a href="https://cuacalab.id/widget/">HTML Weather widget for website by cuacalab.id</a></div>
<script async src="https://static1.cuacalab.id/widgetjs/?id=idb32fcf3b124c9"></script>

<p>
                                
                                    
                                
                            
                                <p>&nbsp;</p>
                                </div>
            </nav>
        </header>
        
    <?php } ?>
    
       

<p>


<p>
 <table width="340">
                    <tr>
                      <td width="74">
                      <p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/index.php"><img src="GAMBAR/KARYAWAN-V80.png" width="52" height="57" border="0"></a></p>                        <p align="center">Karyawan</p></td>
                      <td width="83">
                      <p align="center"><a href="http://192.168.88.203/dashboard/MASTER-APLIKASI/E-DOKTER/E-DOKTER-V2/login.php"><img src="GAMBAR/DOKTER.png" width="52" height="57" border="0"></a></p>                        <p align="center">Dokter</p></td>
                      <td width="79">
                      <p align="center"><a href="http://192.168.88.203/dashboard/APLIKASI/pendaftaran/login.php"><img src="GAMBAR/PASIEN.png" width="52" height="57" border="0"></a></p>                        <p align="center"> Pasien                      </p></td>
                      <td width="84">
                      <p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/DATABASE-KARYAWAN/LOGIN-SYSTEM/GITHUB/KEPEGAWAIAN/"><img src="GAMBAR/MANAJEMEN.png" width="52" height="57" border="0"></a></p>                        
                      <p align="center">Manajemen</p></td>
                    </tr>
                    <tr>
                      <td>
                        <p align="center"><a href="http://192.168.88.203/dashboard/LOGIN-SYSTEM-ROBOT/"><img src="GAMBAR/LAB.png" width="52" height="57" border="0"></a></p>
                        <p align="center">Lab</p>                      </td>
                      <td>
                        <p align="center"><a href="http://192.168.88.203/dashboard/LOGIN-SYSTEM-ROBOT/"><img src="GAMBAR/FARMASI.png" width="52" height="57" border="0"></a></p>
                        <p align="center">Farmasi</p>                      </td>
                      <td>
                        <p align="center"><a href="http://192.168.88.203/webapps/presensi/"><img src="GAMBAR/ABSENSI.png" width="52" height="57" border="0"></a></p>
                        <p align="center">Absensi</p>                      </td>
                      <td>
                      <p align="center"><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/GAJI.png" width="52" height="57" border="0"></a></p>                        
                      <p align="center">Gaji</p></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#CCCCCC"><strong>E - Rekam Medik </strong></td>
                    </tr>
                    <tr>
                      <td colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/E-MCU/"><img src="GAMBAR/MCU.png" width="52" height="57" border="0"></a></p>
                      <p align="center">MCU</p></td>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APLIKASI-FARMASI/DATAOBAT/index2.php"><img src="GAMBAR/OBAT.png" width="52" height="57" border="0"></a></p>
                      <p align="center"> Obat </p></td>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/CPU-GRAFIK-PASIEN/"><img src="GAMBAR/GRAFIK.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Grafik</p></td>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APLIKASI-SATUSEHAT/mlite-master/APLIKASI-RANAP/aplikasi-ranap2.php"><img src="GAMBAR/SIRANAP.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Siranap</p></td>
                    </tr>
                    <tr>
                      <td><p align="center"><a href="http://192.168.88.203/webapps/"><img src="GAMBAR/SURAT.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Surat</p></td>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/GRAFIK/index2.php"><img src="GAMBAR/KUNJUNGAN.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Kunjungan</p></td>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/TAMPILAN/dashboard/?module=5.1"><img src="GAMBAR/PR.png" width="52" height="57" border="0"></a></p>
                      <p align="center">PR</p></td>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/TAMPILAN/dashboard/?module=3.15"><img src="GAMBAR/PB.png" width="52" height="57" border="0"></a></p>
                      <p align="center">PB</p></td>
                    </tr>
                    <tr>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/TAMPILAN/dashboard/?module=5.2"><img src="GAMBAR/JP.png" width="52" height="57" border="0"></a></p>
                      <p align="center">JP</p></td>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/display2.php"><img src="GAMBAR/DISPLAY.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Display</p></td>
                      <td><p align="center"><a href="http://192.168.88.203/webapps/jadwaloperasi.php""><img src="GAMBAR/VK.png" width="52" height="57" border="0"></a></p>
                      <p align="center">VK</p></td>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/index-asuransi2.php"><img src="GAMBAR/ASKES.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Askes</p></td>
                    </tr>
                    <tr>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/DAFTAR-PASIEN/index-daftarpasien2.php"><img src="GAMBAR/DAFTAR.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Daftar </p></td>
                      <td><p align="center"><a href="https://kamus.rekam-medis.id/"><img src="GAMBAR/ICD.png" width="52" height="57" border="0"></a></p>
                      <p align="center">ICD 9 -10 </p></td>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/antrian-ralan2.php"><img src="GAMBAR/ANTRIAN.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Antrian</p></td>
                      <td><p align="center"><a href="https://docs.google.com/forms/d/e/1FAIpQLSfRTFrLQ67n5v288iXX9CCtclQGmJwJak0UEl31Z6lqaBDyLQ/viewform"><img src="GAMBAR/KUIS.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Kusioner</p></td>
                    </tr>
                    <tr>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/TAMPIL2/index2.php"><img src="GAMBAR/ERM.png" width="52" height="57" border="0"></a></p>
                      <p align="center">E-RM</p></td>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/CETAK/index2.php"><img src="GAMBAR/CETAK.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Cetak</p></td>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APLIKASI/epasien/index.php?act=Home"><img src="GAMBAR/BOOKING.png" width="52" height="57" border="0"></a></p>
                      <p align="center">E-Booking</p></td>
                      <td><p align="center"><a href="https://tr.ee/jkgiScvOBa"><img src="GAMBAR/LINKTR.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Linktr</p></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#CCCCCC"><strong>SIKRS</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/DATABASE-KARYAWAN/index2.php"><img src="GAMBAR/LAPORAN.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Riquest</p></td>
                      <td><p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/DATABASE-KARYAWAN/index-riquest2.php"><img src="GAMBAR/EVENT.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Cek Riquest</p></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#CCCCCC"><strong>Kemenkes</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>
                        <p align="center"><a href="https://lms.kemkes.go.id/my-courses"><img src="GAMBAR/LMS.png" width="52" height="57" border="0"></a></p>
                        <p align="center">LMS</p>                        </td>
                      <td>
                        <p align="center"><a href="https://skp.kemkes.go.id/"><img src="GAMBAR/SKP.png" width="52" height="57" border="0"></a></p>
                        <p align="center">SKP</p>                        </td>
                      <td>
                        <p align="center"><a href="https://sisrute.kemkes.go.id/"><img src="GAMBAR/SISRUT.png" width="52" height="57" border="0"></a></p>
                        <p align="center">SISRUT</p>                      </td>
                      <td>
                        <p align="center"><a href="https://sipnap.kemkes.go.id/"><img src="GAMBAR/SIPNAP.png" width="52" height="57" border="0"></a></p>
                        <p align="center">SIPNAP</p>                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/DATABASE-KARYAWAN/LOGIN-SYSTEM/GITHUB/SATUSEHAT/"><img src="GAMBAR/SATUSEHAT.png" width="52" height="57" border="0"></a></p>                        <p align="center">Satu Sehat</p></td>
                      <td>
                      <p align="center"><a href="https://satusehat.kemkes.go.id/platform/login"><img src="GAMBAR/PLATFROM.png" width="52" height="52" border="0"></a></p>                        <p align="center">Platform</p></td>
                      <td>
                      <p align="center"><a href="https://satusehat.kemkes.go.id/sdmk/login?from=%2Fdashboard"><img src="GAMBAR/SDMK.png" width="52" height="57" border="0"></a></p>                        <p align="center"> SDMK </p></td>
                      <td>
                      <p align="center"><a href="https://nakes.kemkes.go.id/pembaruan-data"><img src="GAMBAR/NAKES.png" width="52" height="57" border="0"></a></p>                        <p align="center">Nakes</p></td>
                    </tr>
                    <tr>
                      <td><p align="center"><a href="https://satusehat.kemkes.go.id/data/dashboard/47ef4c43-4ea0-4d1f-a5e5-7d38afcb4edf"><img src="GAMBAR/DATA.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Data </p>                      </td>
                      <td><p align="center"><a href="https://akun-yankes.kemkes.go.id/?continued=https%3A%2F%2Fdfo.kemkes.go.id%2FLanding%2Flogin"><img src="GAMBAR/DFO.png" width="52" height="57" border="0"></a></p>
                      <p align="center">DFO</p></td>
                      <td><p align="center"><a href="https://akun-yankes.kemkes.go.id/?continued=https://mutufasyankes.kemkes.go.id/halaman/landing"><img src="GAMBAR/INM.png" width="52" height="57" border="0"></a></p>
                      <p align="center">INM</p></td>
                      <td><p align="center"><a href="https://www.pom.go.id/"><img src="GAMBAR/BPOM.png" width="52" height="57" border="0"></a></p>
                      <p align="center">BPOM</p></td>
                    </tr>


 <tr>
                      <td><p align="center"><a href="https://anggota.idionline.org/login"><img src="IDI.png" width="52" height="57" border="0"></a></p>
                      <p align="center">IDI </p>                      </td>
                      <td><p align="center"><a href="https://satusehat.kemkes.go.id/kfa-browser/"><img src="KFA.png" width="52" height="57" border="0"></a></p>
                      <p align="center">KFA</p></td>
                      <td><p align="center"><a href="https://ppni-inna.org/"><img src="PPNI.png" width="52" height="57" border="0"></a></p>
                      <p align="center">PPNI</p></td>
                      <td><p align="center"><a href="https://ibi.data-online.id/apps/v2/signin"><img src="IBI.png" width="52" height="57" border="0"></a></p>
                      <p align="center">IBI</p></td>















<tr>
                      <td><p align="center"><a href="https://hfis.bpjs-kesehatan.go.id/hfis/login"><img src="BPJS.png" width="52" height="57" border="0"></a></p>
                      <p align="center">HFIS </p>                      </td>
                      <td><p align="center"><a href="https://pcarejkn.bpjs-kesehatan.go.id/eclaim/login"><img src="BPJS.png" width="52" height="57" border="0"></a></p>
                      <p align="center">ECLAIM</p></td>
                      <td><p align="center"><a href="https://antrean.bpjs-kesehatan.go.id/antrean-faskes/#/access/signin"><img src="BPJS.png" width="52" height="57" border="0"></a></p>
                      <p align="center">ANTREAN</p></td>
                      <td><p align="center"><a href="https://pelkesonline.inhealth.co.id/Account/Login?ReturnUrl=%2f"><img src="INHEALTH.png" width="52" height="57" border="0"></a></p>
                      <p align="center">PALKES</p></td>









<tr>
                      <td><p align="center"><a href="https://p2ab.net/#!/cpd/showcase"><img src="IAI.png" width="52" height="57" border="0"></a></p>
                      <p align="center">IAI </p>                      </td>
                      <td><p align="center"><a href="https://www.patelki.or.id/"><img src="PATELKI.png" width="52" height="57" border="0"></a></p>
                      <p align="center">PALTELKI</p></td>
                      <td><p align="center"><a href="https://kemkes.go.id/id/informasi-klinik"><img src="SATUSEHAT-INTEGRASI-VERSI-80-2.png" width="52" height="57" border="0"></a></p>
                      <p align="center">FASKES</p></td>
                      <td><p align="center"><a href="https://akun-yankes.kemkes.go.id/?continued=https%3A%2F%2Fregistrasifasyankes.kemkes.go.id%2Flanding"><img src="SATUSEHAT-INTEGRASI-VERSI-80-2.png" width="52" height="57" border="0"></a></p>
                      <p align="center">ASKES</p></td>







<tr>
                      <td><p align="center"><a href="https://ditmutunakes.kemkes.go.id/index.php/institusi-terakreditasi/1"><img src="SATUSEHAT-INTEGRASI-VERSI-80-2.png" width="52" height="57" border="0"></a></p>
                      <p align="center">AKRE </p>                      </td>
                      <td><p align="center"><a href="https://kki.go.id/registrasi/auth/login"><img src="KKI.png" width="52" height="57" border="0"></a></p>
                      <p align="center">KKI</p></td>
                      <td><p align="center"><a href="https://kki.go.id/cekdokter/form"><img src="SATUSEHAT-INTEGRASI-VERSI-80-2.png" width="52" height="57" border="0"></a></p>
                      <p align="center">CEKDOK</p></td>
                      <td><p align="center"><a href="https://www.bidan-delima.id/cari-bidan"><img src="SATUSEHAT-INTEGRASI-VERSI-80-2.png" width="52" height="57" border="0"></a></p>
                      <p align="center">CEKBID</p></td>








<tr>
                      <td><p align="center"><a href="https://www.postman.com/satusehat/satusehat-public/overview"><img src="POSMAN.svg" width="52" height="57" border="0"></a></p>
                      <p align="center">POSMAN </p>                      </td>
                      <td><p align="center"><a href="https://api.whatsapp.com/send/?phone=628118165165&text=&type=phone_number&app_absent=0&utm_medium=social&utm_source=linktree&utm_campaign=pandawa+%28pelayanan+administrasi+melalui+whatsapp%29"><img src="BPJS.png" width="52" height="57" border="0"></a></p>
                      <p align="center">PANDAWA</p></td>
                      <td><p align="center"><a href="https://faskes.bpjs-kesehatan.go.id/aplicares/#/app/dashboard"><img src="BPJS.png" width="52" height="57" border="0"></a></p>
                      <p align="center">APLICER</p></td>
                      <td><p align="center"><a href="https://satusehat.kemkes.go.id/platform/docs/id/kyc/kyc-doc/guide-it-fasyankes/"><img src="PANDUAN.png" width="52" height="57" border="0"></a></p>
                      <p align="center">PANDUAN</p></td>




























                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#CCCCCC"><strong>Transfer</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><div align="center">
                        <p><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/TOPUP.png" width="52" height="57" border="0"></a></p>
                        <p>Top-Up</p>
                      </div></td>
                      <td><div align="center">
                        <div align="center">
                          <p><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/TRANSFER.png" width="52" height="57" border="0"></a></p>
                          <p>Transfer</p>
                        </div>
                        </div></td>
                      <td><div align="center">
                        <p><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/GOPAY.png" width="52" height="57" border="0"></a></p>
                        <p>GoPay</p>
                      </div></td>
                      <td><div align="center">
                        <p><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/DANA.png" width="52" height="57" border="0"></a></p>
                        <p>DANA</p>
                      </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#CCCCCC"><strong>Pembelian</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><div align="center">
                        <p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/e-wallet2.php"><img src="GAMBAR/EWALLET.png" width="52" height="57" border="0"></a></p>
                        <p align="center">E-Wallet</p>
                        </div></td>
                      <td><div align="center">
                        <p><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/VOUCHER.png" width="52" height="57" border="0"></a></p>
                        <p>Voucher</p>
                      </div></td>
                      <td><div align="center">
                        <p><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/PAKETDATA.png" width="52" height="57" border="0"></a></p>
                        <p>Paket Data </p>
                      </div></td>
                      <td><div align="center">
                        <p><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/PLN.png" width="52" height="57" border="0"></a></p>
                        <p>Token PLN </p>
                      </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#CCCCCC"><strong>Pembayaran</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>
                      <p align="center"><a href="https://djponline.pajak.go.id/account/login"><img src="GAMBAR/PAJAK.png" width="52" height="57" border="0"></a></p>                        <p align="center">Pajak</p></td>
                      <td>
                      <p align="center"><a href="https://esppt.kaboki.go.id/"><img src="GAMBAR/PBB.png" width="52" height="57" border="0"></p>                        <p align="center">PBB</p></td>
                      <td>
                        <p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/kode2.php"><img src="GAMBAR/PEMBAYARAN.png" width="52" height="57" border="0"></a></p>                        <p align="center">VA</p></td>
                      <td>
                        <p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/index-tagihan2.php"><img src="GAMBAR/PEMBELIAN.png" width="52" height="57" border="0"></a></p>                        <p align="center">Tagihan</p></td>
                    </tr>
                    <tr>
                      <td><p align="center"><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/SELULER.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Seluler</p></td>
                      <td>
                      <p align="center"><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/EMONEY.png" width="52" height="57" border="0"></a></p>                        <p align="center">E-Money</p></td>
                      <td>
                      <p align="center"><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/TAP.png" width="52" height="57" border="0"></a></p>                        <p align="center">TapCash</p></td>
                      <td>
                      <p align="center"><a href="https://www.traveloka.com/id-id/tiket-pesawat"><img src="GAMBAR/TIKET.png" width="52" height="57" border="0"></a></p>                        <p align="center">Tiket</p></td>
                    </tr>
                    <tr>
                      <td><p align="center"><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/BPJS.png" width="52" height="57" border="0"></a></p>
                      <p align="center">BPJS</p></td>
                      <td><p align="center"><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/PDAM.png" width="52" height="57" border="0"></a></p>
                      <p align="center">PDAM</p></td>
                      <td><p align="center"><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/TOKOPEDIA.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Tokopedia</p></td>
                      <td><p align="center"><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/SHOPEE.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Shopee</p></td>
                    </tr>
                    <tr>
                      <td><p align="center"><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/SAMSAT.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Samsat</p></td>
                      <td><p align="center"><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/PENDIDIKAN.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Pendidikan</p></td>
                      <td><p align="center"><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/SMARTTV.png" width="52" height="57" border="0"></a></p>
                      <p align="center">SmartTV</p></td>
                      <td><p align="center"><a href="https://ib.bri.co.id/ib-bri/"><img src="GAMBAR/PGN.png" width="52" height="57" border="0"></a></p>
                      <p align="center">Gas &amp; PGN </p></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#CCCCCC"><strong>Lainnya</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><div align="center">
                        <p><a href="https://cuaca.bmkg.go.id/"><img src="GAMBAR/CUACA.png" width="50" height="57" border="0"></a></p>
                        <p>Cuaca</p>
                      </div></td>
                      <td><div align="center">
                        <p><a href="http://192.168.88.203:631/"><img src="GAMBAR/PRINTER.png" width="52" height="57" border="0"></a></p>
                        <p>Printer</p>
                      </div></td>
                      <td><div align="center">
                        <p><a href="https://www.wieistmeineip.de/speedtest/run.php#dslspeedtest"><img src="GAMBAR/SPEED.png" width="52" height="57" border="0"></a></p>
                        <p>Speed</p>
                      </div></td>
                      <td><div align="center">
                        <p align="center"><a href="http://192.168.88.203/dashboard/APPS-ROBOT/media2.php"><img src="GAMBAR/LIFE.png" width="52" height="57" border="0"></a></p>
                        <p align="center">Lifestyle</p>
                        </div></td>
                    </tr>
                    <tr>
                      <td><div align="center">
                          <p><a href="https://github.com/klinikasura/APLIKASI-V80/releases/"><img src="GAMBAR/UPDATE.png" width="52" height="57" border="0"></a></p>
                          <p>Update</p>
                      </div></td>
                      <td><div align="center">
                          <p><a href="https://ui-login.oss.go.id/login"><img src="GAMBAR/OSS.png" width="52" height="57" border="0"></a></p>
                          <p>OSS</p>
                      </div></td>

                      <td><div align="center">
                          <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSdRNzYT72xdfIbznzSqdhVxYT7oYjgR8mRxUdAgChM6hzMT-A/viewform"><img src="GAMBAR/JAT.png" width="52" height="57" border="0"></a></p>
                          <p>Limbah B3  </p>
                      </div></td>

                      <td><div align="center">
                          <p><a href="https://www.youtube.com/live/DOOrIxw5xOw"><img src="GAMBAR/TV.png" width="52" height="57" border="0"></a></p>
                          <p>TV</p>
                      </div></td>
                    </tr>


 <td><div align="center">
                          <p><a href="https://jadwal-sholat.tirto.id/kab-ogan-komering-ilir"><img src="SHOLAT.png" width="52" height="57" border="0"></a></p>
                          <p>SHOLAT</p>
                      </div></td>
                

 <td><div align="center">
                          <p><a href="https://www.facebook.com/profile.php?id=100094220515423"><img src="FACEBOOK.png" width="52" height="57" border="0"></a></p>
                          <p>FACEBOOK</p>
                      </div></td>
                   


 <td><div align="center">
                          <p><a href="https://www.instagram.com/klinik_asura/"><img src="INSTAGRAM.png" width="52" height="57" border="0"></a></p>
                          <p>INSTAGRAM</p>
                      </div></td>
                  


 <td><div align="center">
                          <p><a href="http://192.168.88.1/webfig/"><img src="MIKROTIK.png" width="52" height="57" border="0"></a></p>
                          <p>MIKROTIK</p>
                      </div></td>
                  
 </tr>




 <td><div align="center">
                          <p><a href="https://www.canva.com/folder/FAFg-xJ_xrk"><img src="CANVA.png" width="52" height="57" border="0"></a></p>
                          <p>CANVA</p>
                      </div></td>
                   



 <td><div align="center">
                          <p><a href="https://www.ocr2edit.com/id/konversi-ke-txt"><img src="OCR.png" width="52" height="57" border="0"></a></p>
                          <p>OCR</p>
                      </div></td>
               



 <td><div align="center">
                          <p><a href="https://maps.app.goo.gl/rP1D3AfV9StKLv6E7"><img src="MAPS.png" width="52" height="57" border="0"></a></p>
                          <p>MAPS</p>
                      </div></td>
              



 <td><div align="center">
                          <p><a href="https://www.google.com/maps/search/ATM/@-3.8768296,104.8456719,12284m/data=!3m1!1e3?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D"><img src="ATM.png" width="52" height="57" border="0"></a></p>
                          <p>ATM</p>
                      </div></td>
                    </tr>


                </table>
                  <p>&nbsp;</p>
                  <p class="font-weight-normal mb-0">&nbsp;</p>
                </div>








           

                <!-- Main row -->
                <div class="row">

                    <div class="col-md-8">
                        <!--earning graph start-->
                


                        </section>
                    


                        <!--chat start-->
                       
                               
                            </header>
                           <center> <div class="" id="">
                                <?php
                                $tampil = mysqli_query($conn, "select * from robot80_data_anggota order by id desc limit 1");
                                while ($data2 = mysqli_fetch_array($tampil)) {
                                ?>
                                    <div class="alert alert-info">
                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                            <i class="fa fa-times"></i>                                        </button>
                                        <strong><?php echo $data2['nama']; ?></strong>, Telah terdaftar menjadi Karyawan RS. Asura                                    </div>
                                <?php } ?>

                                <?php
                                $tampil = mysqli_query($conn, "select * from robot80_admin order by user_id desc limit 0");
                                while ($data3 = mysqli_fetch_array($tampil)) {
                                ?>
                                    <div class="alert alert-info">
                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                            <i class="fa fa-times"></i>                                        </button>
                                        <strong><?php echo $data3['fullname']; ?></strong>, Telah ditambahkan menjadi Admin Aplikasi Karyawan RS. Asura                                    </div>
                                <?php } ?>

                                <?php
                                $tampil = mysqli_query($conn, "select * from robot80_data_buku order by id desc limit 1");
                                while ($data4 = mysqli_fetch_array($tampil)) {
                                ?>
                                    <div class="alert alert-info">
                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                            <i class="fa fa-times"></i>                                        </button>
                                        <strong><?php echo $data4['judul']; ?></strong>, File Baru                                    </div>
                                <?php } ?>

                                <?php
                                $tampil = mysqli_query($conn, "select * from robot80_pengunjung order by id desc limit 0");
                                while ($data5 = mysqli_fetch_array($tampil)) {
                                ?>
                                    <div class="alert alert-info">
                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                            <i class="fa fa-times"></i>                                        </button>
                                        <strong><?php echo $data5['nama']; ?> </strong> Riquest File                                    </div>
                                <?php } ?>
                            </div>
                        </section>
                    </div>
                </div>

               
               
             
                    </div>
                </div>
                <!-- row end -->
            </section><!-- /.content -->
          
        </aside><!-- /.right-side -->

    </div><!-- ./wrapper -->



<a href="https://api.whatsapp.com/send?phone=6281271138811">
<img src="https://hantamo.com/free/whatsapp.svg" class="wabutton" alt="WhatsApp-Button" /></a>
<style>
.wabutton{
width:40px;
height:40px;
position:fixed;
bottom:100px;
right:40px;
z-index:10000;
}
</style>




 <center><iframe src="http://192.168.88.203/dashboard/APPS-ROBOT/GRAFIK/" name="frame" class="container" width="100%" height="450px" allowtransparency="true" noresize="noresize"></iframe>















 <!-- blog-area start -->
    <div class="blog-area pd-top-36 pb-2 mg-top-40" style="background-image: url(#);">
        <div class="container">
            <div class="section-title">
                <center><a class="title" href="">Postingan Terbaru</h3> </center>
                <a href=""></a>            </div>
            <div class="blog-slider owl-carousel">
                <div class="item">
                    <div class="single-blog">
                        <div class="thumb">
                 <iframe src="https://snapwidget.com/embed/1081534" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:400px; height:190px" title="Klinik Asura"></iframe>
                        </div>
                        <div class="details">
                            <center><a href="blog-details.html"></a>Facebook</a>                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-blog">
                        <div class="thumb">
                      <iframe src="https://snapwidget.com/embed/1081534" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:400px; height:190px" title="Klinik Asura"></iframe>
                        </div>
                        <div class="details">
                             <center>  <a href="blog-details.html"></a>Instagram</a>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-area End -->









    
    <!-- blog-area start -->
   <div class="blog-area pd-top-36 pb-2 mg-top-40" style="background-image: url(#);">
        <div class="container">
            <div class="section-title">
               <center><a class="title" href="">SUPER HERO #AIwayswithYou</h3>
                <a href="#"></a>            </div>
            <div class="blog-slider owl-carousel">
                <div class="item">
                    <div class="single-blog">
                        <div class="thumb">
                            <img src="SISDMK-VERSI80.gif" alt="img">                        </div>
                        <div class="details">
                           <center> <a href="https://sisdmk.kemkes.go.id/login">SISDMK</a>                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-blog">
                        <div class="thumb">
                            <img src="DOKUMEN-VERSI80.gif" alt="img">                        </div>
                        <div class="details">
                             <center>  <a href="http://192.168.88.203/dashboard/APPS-ROBOT/DATABASE-KARYAWAN/login-github-sikrs.html">SIKRS</a>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-area End -->











    <div class="footer-area">
        <div class="footer-top text-center" style="background-image: url();">
            <div class="container">            </div>
        </div>
 <!-- Footer Area -->
    
            <h1><div class="footer-bottom text-center">
                <ul>
                    <li>
                        <a href="index-dashboard.php">
<img border="0" src="http://192.168.88.203/dashboard/APPS-ROBOT/ICON/BERANDA.png"  height="40" width="40" /></a>
                            <i class=""></i>
                            <p>Beranda</p>
                        </a>                    </li>
                    <li>
                        <a href="">
<img border="0" src="http://192.168.88.203/dashboard/APPS-ROBOT/ICON/APLIKASI.png"  height="40" width="40" /></a>
                            <i class=""></i>
                            <p>Aplikasi</p>
                        </a>                    </li>
                    <li>
                        <a href="">
<img border="0" src="http://192.168.88.203/dashboard/APPS-ROBOT/ICON/UPLOAD.png"  height="40" width="40" /></a>
                            <i class=""></i>
                            <p>Upload</p>
                        </a>                    </li>
                    <li>
                        <a href="">
<img border="0" src="http://192.168.88.203/dashboard/APPS-ROBOT/ICON/POLIKLINIK.png"  height="40" width="40" /></a>
                            <i class=""></i>
                            <p>Poliklinik</p>
                        </a>                    </li>
                    <li>
                        <a href="logout2.php">
<img border="0" src="http://192.168.88.203/dashboard/APPS-ROBOT/ICON/LOGIN.png"  height="40" width="40" /></a>
                            <i class=""></i>
                            <p>Logout</p>
                        </a>                    </li>
                </ul>
            </div>
        </div>
</div>




    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js-version/jquery.min.js" type="text/javascript"></script>

    <!-- jQuery UI 1.10.3 -->
    <script src="js-version/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="js-version/bootstrap.min.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="js-version/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

    <script src="js-version/plugins/chart.js" type="text/javascript"></script>

    <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
    <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
    <!-- iCheck -->
    <script src="../js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- calendar -->
    <script src="../js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

    <!-- Director App -->
    <script src="../js/Director/app.js" type="text/javascript"></script>

    <!-- Director dashboard demo (This is only for demo purposes) -->
    <script src="../js/Director/dashboard.js" type="text/javascript"></script>

    <!-- Director for demo purposes -->
    <script type="text/javascript">
        $('input').on('ifChecked', function(event) {
            // var element = $(this).parent().find('input:checkbox:first');
            // element.parent().parent().parent().addClass('highlight');
            $(this).parents('li').addClass("task-done");
            console.log('ok');
        });
        $('input').on('ifUnchecked', function(event) {
            // var element = $(this).parent().find('input:checkbox:first');
            // element.parent().parent().parent().removeClass('highlight');
            $(this).parents('li').removeClass("task-done");
            console.log('not');
        });
    </script>
    <script>
        $('#noti-box').slimScroll({
            height: '400px',
            size: '5px',
            BorderRadius: '5px'
        });

        $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
            checkboxClass: 'icheckbox_flat-grey',
            radioClass: 'iradio_flat-grey'
        });
    </script>
    <script type="text/javascript">
        $(function() {
            "use strict";
            //BAR CHART
            var data = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                        label: "My First dataset",
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: "My Second dataset",
                        fillColor: "rgba(151,187,205,0.2)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data, {
                responsive: true,
                maintainAspectRatio: false,
            });

        });
        // Chart.defaults.global.responsive = true;
    </script>






<br />
<br />
<style>
.hide{display:none;visibility:hidden;}
.popbox{position:fixed;top:0;left:0;bottom:0;width:100%;z-index:1000000;}
.pop-content{width:850px;height:450px;display:block;position:absolute;top:50%;left:50%;margin:-225px 0 0 -425px;z-index:2;box-shadow:0 3px 20px 0 rgba(0,0,0,.5);}



.popcontent{width:100%;height:100%;display:block;background:#fff;border-radius:5px;overflow:hidden}
.pop-overlay{position:absolute;top:0;left:0;bottom:0;width:100%;z-index:1;background:rgba(0,0,0,.7)}
.popbox-close-button{position:absolute;width:28px;height:28px;line-height:28px;text-align:center;top:-14px;right:-14px;background-color:#fff;box-shadow:0 -1px 1px 0 rgba(0,0,0,.2);border:none;border-radius:50%;cursor:pointer;font-size:34px;font-weight:lighter;padding:0}
.popcontent img{width:100%;height:100%;display:block}
.flowbox{position:relative;overflow:hidden}
@media screen and (max-width:840px){.pop-content{width:90%;height:auto;top:20%;margin:0 0 0 -45%}
.popcontent img{height:auto}
}
</style><br />
 <div class="popbox hide" id="popbox">   <div aria-label='Close' class="pop-overlay" onclick='document.getElementById("popbox").style.display="none";removeClassonBody();'/>   <div class="pop-content">  <a href="http://192.168.88.203/dashboard/APPS-ROBOT/GITHUB/index-dashboard.php" target="_self" rel="noopener noreferrer" title="box"><br />
    <div class="popcontent">  


<img src="SCAM.jpeg" />    </div>  </a><br />
  <button aria-label='Close' class='popbox-close-button' onclick='document.getElementById("popbox").style.display="none";removeClassonBody();'>×</button><br />
   </div> </div><script>
//<![CDATA[
setTimeout(function(){
 document.getElementById('popbox').classList.remove('hide');
 document.body.className+=" flowbox"
 }, 2000);
function removeClassonBody(){var element=document.body;element.className=element.className.replace(/\bflowbox\b/g,"")}
//]]>
</script><br /></div>


<!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors-V80/chart.js/Chart.min.js"></script>
  <script src="vendors-V80/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors-V80/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js-V80/dataTables.select.min.js"></script>
 <script src="assets-V80/js/vendor.js"></script>
    <script src="assets-V80/js/main.js"></script>




  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js-V80/off-canvas.js"></script>
  <script src="js-V80/hoverable-collapse.js"></script>
  <script src="js-V80/template.js"></script>
  <script src="js-V80/settings.js"></script>
  <script src="js-V80/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js-V80/dashboard.js"></script>
  <script src="js-V80/Chart.roundedBarCharts.js"></script>
    </body>

    </html>
