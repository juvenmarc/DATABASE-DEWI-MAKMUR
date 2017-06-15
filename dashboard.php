<?php
	session_start();
	if(!isset($_SESSION['user_login'])){
		echo " <html>
			   <head>
			   <link rel='shortcut icon' href='../DM.png' />
			   <title>Please Login First </title>
			   </head>
			   <body background='../red.jpg'>
		       <br><br><br><br><br><br><br><center><img src='../DM.jpg'></center>
			   <br><center><b>Anda Belum Login, Silahkan Login <br><a href = 'index.php'>Disini </a></b></center>";
	}else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
  <link rel="shortcut icon" href="../DM.png" />
  <title>Dewi Makmur | Dashboard</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

	<!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom tdeme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<?php include 'connection.php';
$host = $_SERVER['HTTP_HOST']; ?>
  <div class="container body">
    <div class="main_container">
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			
      <!-- Top Navigation -->
			<?php include 'topnav.php'; ?>
			
      <!-- Page Content -->
      <div class="right_col" role="main">
        <div class="">
          <font size="3"color="grey">Hai Admin, Selamat datang di Sistem web inventory CV. Dewi Makmur, Anda bisa melakukan pengolahan data terkait kegiatan aktivitas pekerjaan 
		  Anda sesuai dengan level atau otorisasi kewenangan Anda melalui menu-menu yang disediakan.</font><br>
		  ..
		  
					<!-- Grafik Penjualan -->
					<div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Rekap Penjualan </h2>
				  <div class="dropdown col-md-6">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#E57373"><h2><small>Pilih Tahun <i class="fa fa-info"></i></small></h2></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="dashboard.php?page=januari">2014</a></li>								
								<li><a href="dashboard.php?page=februari">2015</a></li>
								<li><a href="dashboard.php?page=maret">2016</a></li>
								<li><a href="dashboard.php?page=april">2017</a></li>
								<li><a href="dashboard.php?page=mei">2018</a></li>
								<li><a href="dashboard.php?page=juni">2019</a></li>
							</ul>
				  </div>
                  <div class="clearfix"></div>
                </div>
								<?php //include 'graph_data.php';
								include 'case_grafik_penjualan.php';?>
              </div>
            </div>
          </div>

					<!-- Penjadwalan Bahan -->
					<?php 
					include 'jadwalbahanjuven.php';
					include 'jadwalbahanjaticina.php';
					include 'jadwalbahansirsak.php';
					include 'jadwalbahanmanggis.php';
					include 'jadwalbahansarmut.php';
					include 'jadwalbahanpegagan.php';
					include 'jadwalbahantehhitam.php';
					?>
        </div>
      </div>

			<!-- Footer -->
			<?php include 'footer.php'; ?>
		</div>
	</div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom theme Scripts -->
    <script src="../build/js/custom.js"></script>
    <script src="../build/js/coba.js"></script>
</body>

</html>

<?php } ?>