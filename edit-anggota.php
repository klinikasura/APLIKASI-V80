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
        <link rel="stylesheet" href="http://192.168.88.203/dashboard/APPS-ROBOT/assets/css/vendor.css">
    <link rel="stylesheet" href="http://192.168.88.203/dashboard/APPS-ROBOT/assets/css/style.css">
    <link rel="stylesheet" href="http://192.168.88.203/dashboard/APPS-ROBOT/assets/css/responsive.css">
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="../css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="../css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="../css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
        <!-- Daterange picker -->
        <link href="../css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- iCheck for checkboxes and radio inputs -->
        <link href="../css/iCheck/all.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <!-- Theme style -->
        <link href="../css/style.css" rel="stylesheet" type="text/css" />

<meta http-equiv="refresh" content="100;url=index-dashboard.php"/>  

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

        <style type="text/css">

        </style>
    </head>

   
        <?php
        $timeout = 10; // Set timeout minutes
        $logout_redirect_url = "http://192.168.88.203/dashboard/APPS-ROBOT/GITHUB/"; // Set logout URL

        $timeout = $timeout * 60; // Converts minutes to seconds
        if (isset($_SESSION['start_time'])) {
            $elapsed_time = time() - $_SESSION['start_time'];
            if ($elapsed_time >= $timeout) {
                session_destroy();
                echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
            }
        }
        $_SESSION['start_time'] = time();
        ?>
    <?php } ?>
   

        
            <!-- Main content -->
             <center>  <section class="content">
<p>
                <div class="">
                    <div class="col-xs-12">
                        <div class="panel">
                            <header class="panel-heading">
                                <b>KARTU KARYAWAN RS. ASURA</b>

                            </header>
                            <!-- <div class="box-header"> -->
                            <!-- <h3 class="box-title">Responsive Hover Table</h3> -->
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM robot80_data_anggota WHERE id='$_GET[kd]'");
                            $data  = mysqli_fetch_array($query);
                            ?>
                            <!-- </div> -->
                            <div class="panel-body">
                                <form class="form-horizontal style-form" style="margin-top: 20px;" action="update-anggota.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                    <div class="form-group">
                                       
                                        <div class="col-sm-8">
                                            <input name="id" type="text" id="id" class="form-control" placeholder="Tidak perlu di isi" value="<?php echo $data['id']; ?>" autofocus="on" readonly="readonly" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      
                                        <div class="col-sm-8">
                                            <input name="no_induk" type="text" id="no_induk" class="form-control" placeholder="Ex : xxx.@gmail.com" value="<?php echo $data['no_induk']; ?>" autofocus="on" readonly="readonly" />
                                            <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                     
                                        <div class="col-sm-8">
                                            <input name="nama" type="text" id="nama" class="form-control" placeholder="Nama" value="<?php echo $data['nama']; ?>" autofocus="on" readonly="readonly" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                            
                                    </div>
                                    <div class="form-group">
                                 
                                        <div class="col-sm-8">
                                            <select class="form-control"  type="text" name="jk" id="jk" autofocus="on" readonly="readonly">
                                                <option> <?php echo $data['jk']; ?> </option>
                                                <option value="L" > Laki - Laki </option>
                                                <option value="P"> Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      
                                        <div class="col-sm-8">
                                            <input name="posisi" class="form-control" id="posisi" type="text" placeholder="Perawat/Bidan" value="<?php echo $data['posisi']; ?>" autofocus="on" readonly="readonly" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       
                                    </div>
                                    <div class="form-group">
                                   
                                        <div class="col-sm-8">
                                            
                                            <img src="<?php echo $data['foto']; ?>" height="250" width="250" alt="Foto Anggota" style="margin-bottom: 10px;" /><br />
                                           
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-8">
                                           
                                        </div>
                                    </div>
                                    <div style="margin-top: 20px;"></div>
                                </form>
                            </div>
                        </div><!-- /.box -->
                    </div>
                </div>
                <!-- row end -->
            </section><!-- /.content -->
            
        </aside><!-- /.right-side -->

    </div><!-- ./wrapper -->


    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="../js/jquery.min.js" type="text/javascript"></script>

    <!-- jQuery UI 1.10.3 -->
    <script src="../js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="../js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

    <script src="../js/plugins/chart.js" type="text/javascript"></script>

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
    </body>

    </html>
