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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../DM.png" />
  <title>Report | Data BBM</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

	<!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
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
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Data Bahan Baku Masuk <!-- <small>different form elements</small> --></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a><i class="fa fa-wrench"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>ID BBM</th>
                        <th>ID Transaksi Bahan</th>
                        <th>Bahan</th>
						<th>Tanggal Bahan Diperlukan</th>
                        <th>Tanggal Bahan Masuk</th>
                        <th>Volume (Kg)</th>
						<th>Edit</th>
						<th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
										<?php 
										$host = "localhost";
										$username = "root";
										$password = "";
										$dbname = "dewimakmur"; //database name

										mysql_connect($host,$username,$password) or die (mysql_error ());
										mysql_select_db($dbname);
										
										$tampil="SELECT db_bbm.*, db_transaksi_bahan.id_tb, db_transaksi_bahan.tanggal_perlu, db_bahan.nama_bahan FROM db_bbm 
												INNER JOIN db_transaksi_bahan ON db_bbm.id_tb=db_transaksi_bahan.id_tb 
												INNER JOIN db_bahan ON db_bbm.id_bahan=db_bahan.id_bahan";
										$sql=mysql_query($tampil);
										if($sql===FALSE){
										die (mysql_error());
										}
												while ($rows = mysql_fetch_array($sql)) {
													echo "<tr>";
													echo "<td>" . $rows['id_bbm'] . "</td>";
													echo "<td>" . $rows['id_tb'] . "</td>";
													echo "<td>" . $rows['nama_bahan'] . "</td>";
													echo "<td>" . $rows['tanggal_perlu'] . "</td>";
													echo "<td>" . $rows['tanggal_bbm'] . "</td>";
													echo "<td>" . $rows['volume'] . "</td>";
													echo "<td><form action='editbbm.php' method='GET'>
															<input type = 'submit' name = 'tombol' value='Edit' class='edit' style='height:34px;width:60px'>
															<input type='hidden' name='id_bbm' value='".$rows['id_bbm']."'></form></td>
															<td><a href='delete_bbm.php?id_bbm=$rows[id_bbm]'><button class='btn btn-danger'>Delete</i></button></td>";
													echo "</tr>";
												} 
											?>
										<?php $conn->close(); ?>
										</tbody>
									</table>
								</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
</body>

</html>
<?php } ?>