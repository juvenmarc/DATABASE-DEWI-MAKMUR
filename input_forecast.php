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
  <!--  <link rel="icon" href="favicon.ico"> -->
  <title>Data | Data Forecast</title>

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
			<?php include 'sidebar_produksi.php'; ?>
			
      <!-- Top Navigation -->
			<?php include 'topnav.php'; ?>

      <!-- Page Content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Tambah Data Forecast</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a><i class="fa fa-wrench"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
										<?php	$ddl_produk=$conn->query("SELECT id_produk,nama_produk FROM db_produk"); ?>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id-produk">Pilih Produk <span class="required">*</span></label>
                      <div class="input-group col-md-5 col-sm-5 col-xs-12">
                        <select class="form-control" id="id-produk" name="id-produk" required="required">
												<?php	if($ddl_produk->num_rows>0) {
														while($rows=$ddl_produk->fetch_assoc()) {
															echo "<option value=" . $rows['id_produk'] . ">" . $rows['nama_produk'] . "</option>";
														} 
													}?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="thn">Tahun <span class="required">*</span></label>
                      <div class="input-group col-md-2 col-sm-2 col-xs-12">
                        <input type="number" id="thn" name="thn" required="required" class="form-control col-md-7 col-xs-12">
												<span class="input-group-addon">Tahun</span>
                      </div>
                    </div>
										<?php	$f = array('jan','feb','mar','apr','mei','jun','jul','agu','sep','okt','nov','des');
										for($n = 0; $n <12; $n++) {
											echo "<div class='col-md-3 col-sm-3 col-xs-12 form-group has feedback'>
												<div class='input-group col-md-12 col-sm-12 col-xs-12'>
													<span class='input-group-addon' style='text-transform:capitalize'>" . $f[$n] . "</span>
													<input type='number' id='sale-" . $f[$n] . "' name='sale-" . $f[$n] . "' required='required' class='form-control col-md-7 col-xs-12'>
												</div>
											</div>";
										} ?>
										<div class="clearfix"></div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-danger" type="button">Cancel</button>
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>
                      </div>
                    </div>
                  </form>
									<?php if(isset($_POST['submit'])){
										$id_produk = $_POST['id-produk'];
										$tahun = $_POST['thn'];
										$jan = $_POST['sale-jan']; $feb = $_POST['sale-feb']; $mar = $_POST['sale-mar']; $apr = $_POST['sale-apr'];
										$mei = $_POST['sale-mei']; $jun = $_POST['sale-jun']; $jul = $_POST['sale-jul']; $agu = $_POST['sale-agu'];
										$sep = $_POST['sale-sep']; $okt = $_POST['sale-okt']; $nov = $_POST['sale-nov']; $des = $_POST['sale-des'];
										$sql_forecast = "INSERT INTO `db_forecast` (`id_produk`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `agu`, `sep`, `okt`, `nov`, `des`, `tahun`) VALUES ('$id_produk', '$jan', '$feb', '$mar', '$apr', '$mei', '$jun', '$jul', '$agu', '$sep', '$okt', '$nov', '$des', '$tahun')";
										$conn->query($sql_forecast);
										echo "<script type='text/javascript'>alert('Input Data Sukses');</script>";
										$conn->close();
									} ?>
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