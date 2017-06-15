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
  <title>Dewi Makmur | Hasil Peramalan Produk</title>

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
        <div class="row">
			<div class="col-md-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Hasil Peramalan Produk</h2>
				<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
							<li><a><i class="fa fa-wrench"></i></a></li>
							<li><a class="close-link"><i class="fa fa-close"></i></a></li>
				</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<p class="text-muted font-13 m-b-30">
						
						<?php 
						include 'datajaticina.php';?>
						
						<table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th rowspan="2" style="vertical-align:middle">Bulan</th>
						<th rowspan="2" style="vertical-align:middle">Tahun</th>
						<th colspan="12" style="text-align:center">Nama Produk (Pack)</th>
                      </tr>
					  <tr>
						<th>Teh Celup Rosella</th>
						<th>Teh Celup Jati Cina</th>
						<th>Teh Celup Daun Sirsak</th>
						<th>Teh Celup Kulit Manggis</th>
						<th>Teh Celup Sarang Semut</th>

					  </tr>
                    </thead>
                    <tbody style="text-align:center">
						<tr>
							<td>Januari</td>
							<td><?php echo $jumlahdata+2014 ;?></td>
							<td><?php include "datarosella.php"; echo number_format($dekomjan,0) ;?></td>
							<td><?php include "datajaticina.php"; echo number_format($dekomjan,0) ;?></td>
							<td><?php include "datasirsak.php"; echo number_format($dekomjan,0) ;?></td>
							<td><?php include "datamanggis.php"; echo number_format($dekomjan,0) ;?></td>
							<td><?php include "datasarangsemut.php"; echo number_format($dekomjan,0) ;?></td>
						</tr>
						<tr>
							<td>Februari</td>
							<td><?php echo $jumlahdata+2014 ;?></td>
							<td><?php include "datarosella.php"; echo number_format($dekomfeb,0) ;?></td>
							<td><?php include "datajaticina.php"; echo number_format($dekomfeb,0) ;?></td>
							<td><?php include "datasirsak.php"; echo number_format($dekomfeb,0) ;?></td>
							<td><?php include "datamanggis.php"; echo number_format($dekomfeb,0) ;?></td>
							<td><?php include "datasarangsemut.php"; echo number_format($dekomfeb,0) ;?></td>
						</tr>
						<tr>
							<td>Maret</td>
							<td><?php echo $jumlahdata+2014 ;?></td>
							<td><?php include "datarosella.php"; echo number_format($dekommar,0) ;?></td>
							<td><?php include "datajaticina.php"; echo number_format($dekommar,0) ;?></td>
							<td><?php include "datasirsak.php"; echo number_format($dekommar,0) ;?></td>
							<td><?php include "datamanggis.php"; echo number_format($dekommar,0) ;?></td>
							<td><?php include "datasarangsemut.php"; echo number_format($dekommar,0) ;?></td>
						</tr>
						<tr>
							<td>April</td>
							<td><?php echo $jumlahdata+2014 ;?></td>
							<td><?php include "datarosella.php"; echo number_format($dekomapr,0) ;?></td>
							<td><?php include "datajaticina.php"; echo number_format($dekomapr,0) ;?></td>
							<td><?php include "datasirsak.php"; echo number_format($dekomapr,0) ;?></td>
							<td><?php include "datamanggis.php"; echo number_format($dekomapr,0) ;?></td>
							<td><?php include "datasarangsemut.php"; echo number_format($dekomapr,0) ;?></td>
						</tr>
						<tr>
							<td>Mei</td>
							<td><?php echo $jumlahdata+2014 ;?></td>
							<td><?php include "datarosella.php"; echo number_format($dekommei,0) ;?></td>
							<td><?php include "datajaticina.php"; echo number_format($dekommei,0) ;?></td>
							<td><?php include "datasirsak.php"; echo number_format($dekommei,0) ;?></td>
							<td><?php include "datamanggis.php"; echo number_format($dekommei,0) ;?></td>
							<td><?php include "datasarangsemut.php"; echo number_format($dekommei,0) ;?></td>
						</tr>
						<tr>
							<td>Juni</td>
							<td><?php echo $jumlahdata+2014 ;?></td>
							<td><?php include "datarosella.php"; echo number_format($dekomjun,0) ;?></td>
							<td><?php include "datajaticina.php"; echo number_format($dekomjun,0) ;?></td>
							<td><?php include "datasirsak.php"; echo number_format($dekomjun,0) ;?></td>
							<td><?php include "datamanggis.php"; echo number_format($dekomjun,0) ;?></td>
							<td><?php include "datasarangsemut.php"; echo number_format($dekomjun,0) ;?></td>
						</tr>
<tr>
							<td>Juli</td>
							<td><?php echo $jumlahdata+2014 ;?></td>
							<td><?php include "datarosella.php"; echo number_format($dekomjul,0) ;?></td>
							<td><?php include "datajaticina.php"; echo number_format($dekomjul,0) ;?></td>
							<td><?php include "datasirsak.php"; echo number_format($dekomjul,0) ;?></td>
							<td><?php include "datamanggis.php"; echo number_format($dekomjul,0) ;?></td>
							<td><?php include "datasarangsemut.php"; echo number_format($dekomjul,0) ;?></td>
						</tr>
						<tr>
							<td>Agustus</td>
							<td><?php echo $jumlahdata+2014 ;?></td>
							<td><?php include "datarosella.php"; echo number_format($dekomagu,0) ;?></td>
							<td><?php include "datajaticina.php"; echo number_format($dekomagu,0) ;?></td>
							<td><?php include "datasirsak.php"; echo number_format($dekomagu,0) ;?></td>
							<td><?php include "datamanggis.php"; echo number_format($dekomagu,0) ;?></td>
							<td><?php include "datasarangsemut.php"; echo number_format($dekomagu,0) ;?></td>
						</tr>
						<tr>
							<td>September</td>
							<td><?php echo $jumlahdata+2014 ;?></td>
							<td><?php include "datarosella.php"; echo number_format($dekomsep,0) ;?></td>
							<td><?php include "datajaticina.php"; echo number_format($dekomsep,0) ;?></td>
							<td><?php include "datasirsak.php"; echo number_format($dekomsep,0) ;?></td>
							<td><?php include "datamanggis.php"; echo number_format($dekomsep,0) ;?></td>
							<td><?php include "datasarangsemut.php"; echo number_format($dekomsep,0) ;?></td>
						</tr>
						<tr>
							<td>Oktober</td>
							<td><?php echo $jumlahdata+2014 ;?></td>
							<td><?php include "datarosella.php"; echo number_format($dekomokt,0) ;?></td>
							<td><?php include "datajaticina.php"; echo number_format($dekomokt,0) ;?></td>
							<td><?php include "datasirsak.php"; echo number_format($dekomokt,0) ;?></td>
							<td><?php include "datamanggis.php"; echo number_format($dekomokt,0) ;?></td>
							<td><?php include "datasarangsemut.php"; echo number_format($dekomokt,0) ;?></td>
						</tr>
						<tr>
							<td>November</td>
							<td><?php echo $jumlahdata+2014 ;?></td>
							<td><?php include "datarosella.php"; echo number_format($dekomnov,0) ;?></td>
							<td><?php include "datajaticina.php"; echo number_format($dekomnov,0) ;?></td>
							<td><?php include "datasirsak.php"; echo number_format($dekomnov,0) ;?></td>
							<td><?php include "datamanggis.php"; echo number_format($dekomnov,0) ;?></td>
							<td><?php include "datasarangsemut.php"; echo number_format($dekomnov,0) ;?></td>
						</tr>
						<tr>
							<td>Desember</td>
							<td><?php echo $jumlahdata+2014 ;?></td>
							<td><?php include "datarosella.php"; echo number_format($dekomdes,0) ;?></td>
							<td><?php include "datajaticina.php"; echo number_format($dekomdes,0) ;?></td>
							<td><?php include "datasirsak.php"; echo number_format($dekomdes,0) ;?></td>
							<td><?php include "datamanggis.php"; echo number_format($dekomdes,0) ;?></td>
							<td><?php include "datasarangsemut.php"; echo number_format($dekomdes,0) ;?></td>
						</tr>						
					</tbody>
				</table>
						
						</p>
					</div>
				</div>
		  </div>
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