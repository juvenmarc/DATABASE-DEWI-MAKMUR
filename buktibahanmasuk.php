
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dewimakmur"; //database name

mysql_connect($host,$username,$password) or die (mysql_error ());
mysql_select_db($dbname);
session_start();

// membaca informasi yang dikirim dari file view.php pada address bar
$id = $_GET['id_tb'];

// Perintah sql untuk menampilkan database
$queri = "SELECT db_transaksi_bahan.*, db_supplier.nama_supplier, db_bahan.nama_bahan FROM db_transaksi_bahan 
		  INNER JOIN db_supplier ON db_transaksi_bahan.id_supplier=db_supplier.id_supplier
		  INNER JOIN db_bahan ON db_transaksi_bahan.id_bahan=db_bahan.id_bahan where id_tb = '$id'";

// perintah untuk menjalankan sql
$hasil = mysql_query($queri);
if($hasil === FALSE){
	die(mysql_error());
}

// menjadikan data dalam bentuk array
$data  = mysql_fetch_array($hasil);

$nomor = $data['id_tb'];
$idbhn = $data['id_bahan'];
$namabhn = $data['nama_bahan'];
$jumlah = $data['jumlah_tb'];
$Tgl = $data['tanggal_order'];
$idsup = $data['id_supplier'];
$namasup = $data['nama_supplier'];
$Perlu = $data['tanggal_perlu'];


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
  <title>Data | Bukti Bahan Masuk</title>

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
                  <h2>Bukti Bahan Masuk</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a><i class="fa fa-wrench"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" role="form" action="buktibahanmasuk.php" method="post">
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id-bahan"> <span class="required"></span></label>
                      <div class="input-group col-md-5 col-sm-5 col-xs-12">
                        <font size="3"color="grey"><b><span class="required">*</span>Harap Mengisikan Data dengan Benar dan Teliti<span class="required">*</span></b></font>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id-bahan">Pilih Bahan <span class="required">*</span></label>
                      <div class="input-group col-md-5 col-sm-5 col-xs-12">
                        <select class="form-control" id="id-bahan" name="id-bahan" required="required">
								<option value="<?php echo "$idbhn";?>"><?php echo "$namabhn";?></option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id-tb">Pilih ID Transaksi <span class="required">*</span></label>
                      <div class="input-group col-md-5 col-sm-5 col-xs-12">
                        <select class="form-control" id="id-tb" name="id-tb" required="required">
							<option value="<?php echo "$nomor";?>"><?php echo "$nomor";?></option>
                        </select>
                      </div>
                    </div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl-masuk">Tanggal Bahan Masuk <span class="required">*</span></label>
											<div class="input-group col-md-3 col-sm-3 col-xs-12">
												<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
												<input type="date" id="tgl-masuk" name="tgl-masuk" required="required" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vol-pdks">Volume (Kg)<span class="required">*</span></label>
                      <div class="input-group col-md-2 col-sm-2 col-xs-12">
                        <input type="text" id="vol-bbm" name="vol-bbm" required="required" class="form-control col-md-7 col-xs-12">
						<span class="input-group-addon">Kg</span>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-danger" type="button">Cancel</button>
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>
                      </div>
                    </div>
                  </form>
									<?php if(isset($_POST['submit'])){
										$id_tb = $_POST['id-tb'];
										$id_bahan = $_POST['id-bahan'];
										$bbm = $_POST['vol-bbm'];
										$tanggal_bbm = $_POST['tgl-masuk'];
										$sql_bbm = "INSERT INTO `db_bbm` (`id_tb`, `id_bahan`, `tanggal_bbm`, `volume`) VALUES ('$id_tb', '$id_bahan', '$tanggal_bbm', '$bbm')";
										$conn->query($sql_bbm);
										$conn->close();
										echo "<script type='text/javascript'>alert('Input Data Sukses');</script>";
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