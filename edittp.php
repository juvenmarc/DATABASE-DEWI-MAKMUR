<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dewimakmur"; //database name

mysql_connect($host,$username,$password) or die (mysql_error ());
mysql_select_db($dbname);
session_start();

// membaca informasi yang dikirim dari file view.php pada address bar
$id = $_GET['id_tp'];

// Perintah sql untuk menampilkan database
$queri = "SELECT db_transaksi_produk.*, db_customer.nama_customer, db_produk.nama_produk FROM db_transaksi_produk 
		  INNER JOIN db_customer ON db_transaksi_produk.id_customer=db_customer.id_customer
		  INNER JOIN db_produk ON db_transaksi_produk.id_produk=db_produk.id_produk where id_tp = '$id'";

// perintah untuk menjalankan sql
$hasil = mysql_query($queri);
if($hasil === FALSE){
	die(mysql_error());
}

// menjadikan data dalam bentuk array
$data  = mysql_fetch_array($hasil);

$nomor = $data['id_tp'];
$idproduk = $data['id_produk'];
$namaproduk = $data['nama_produk'];
$jumlah = $data['jumlah_tp'];
$Tgl = $data['tanggal_jual'];
$idcust = $data['id_customer'];
$namacust = $data['nama_customer'];


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
  <title>Data | Transaksi Produk</title>

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
			<?php include 'sidebar_produk.php'; ?>
			
      <!-- Top Navigation -->
			<?php include 'topnav.php'; ?>

      <!-- Page Content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Edit Laporan Transaksi Produk</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a><i class="fa fa-wrench"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" role="form" action="aksi_edit_tp.php" method="post">
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id-bahan"> <span class="required"></span></label>
                      <div class="input-group col-md-5 col-sm-5 col-xs-12">
                        <font size="3"color="grey"><b><span class="required">*</span>Harap Mengisikan Data dengan Benar dan Teliti<span class="required">*</span></b></font>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id-produk">Pilih Produk <span class="required">*</span></label>
					  <input type="hidden" name="id-tp" value="<?php echo "$nomor";?>">
                      <div class="input-group col-md-5 col-sm-5 col-xs-12">
                        <select class="form-control" id="id-produk" name="id-produk" required="required">
							<?php	$ddl_produk=$conn->query("SELECT id_produk,nama_produk FROM db_produk"); ?>
							<option value="<?php echo "$idproduk";?>"> <?php echo "$namaproduk";?></option>
							<?php	if($ddl_produk->num_rows>0) {
														while($rows=$ddl_produk->fetch_assoc()) {
															echo "<option value=" . $rows['id_produk'] . ">" . $rows['nama_produk'] . "</option>";
														} 
													}?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jml-tp">Jumlah <span class="required">*</span></label>
                      <div class="input-group col-md-2 col-sm-2 col-xs-12">
                        <input type="number" id="jml-tp" name="jml-tp" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$jumlah";?>">
												<span class="input-group-addon">Pack</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id-cust">Pilih Customer <span class="required">*</span></label>
                      <div class="input-group col-md-5 col-sm-5 col-xs-12">
                        <select class="form-control" id="id-cust" name="id-cust" required="required">
							<?php	$ddl_customer=$conn->query("SELECT id_customer,nama_customer FROM db_customer"); ?>
							<option value="<?php echo "$idcust";?>"> <?php echo "$namacust";?></option>
							<?php	if($ddl_customer->num_rows>0) {
														while($rows=$ddl_customer->fetch_assoc()) {
															echo "<option value=" . $rows['id_customer'] . ">" . $rows['nama_customer'] . "</option>";
														} 
													}?>
                        </select>
                      </div>
                    </div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl-jual">Tanggal Penjualan <span class="required">*</span></label>
											<div class="input-group col-md-3 col-sm-3 col-xs-12">
												<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
												<input type="date" id="tgl-jual" name="tgl-jual" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$Tgl";?>">
											</div>
										</div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-danger" type="button">Cancel</button>
                        <button type="submit" class="btn btn-success" name="submit">Save</button>
                      </div>
                    </div>
                  </form>
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