<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dewimakmur"; //database name

mysql_connect($host,$username,$password) or die (mysql_error ());
mysql_select_db($dbname);

// membaca informasi yang dikirim dari file view.php pada address bar
$id_produksi = $_GET['id_produksi'];

// Perintah sql untuk menampilkan database
$queri = "SELECT db_produksi.*, db_produk.nama_produk, db_bahan.nama_bahan FROM db_produksi 
		  INNER JOIN db_produk ON db_produksi.id_produk=db_produk.id_produk
		  INNER JOIN db_bahan ON db_produksi.id_bahan=db_bahan.id_bahan where id_produksi = '$id_produksi'";

// perintah untuk menjalankan sql
$hasil = mysql_query($queri);
if($hasil === FALSE){
	die(mysql_error());
}

// menjadikan data dalam bentuk array
$data  = mysql_fetch_array($hasil);

$nomor = $data['id_produksi'];
$idproduk = $data['id_produk'];
$idbahan = $data['id_bahan'];
$tgl = $data['tanggal_produksi'];
$vol = $data['volume'];
$kgbahan = $data['kg_bahan'];
$lt = $data['lt_produksi'];
$produk = $data['nama_produk'];
$bahan = $data['nama_bahan'];


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
  <title>Data | Transaksi Produksi</title>

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
                  <h2>Edit Kegiatan Produksi</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a><i class="fa fa-wrench"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" role="form" action="aksi_edit_produksi.php" method="post">
										
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id-produk">Pilih Produk <span class="required">*</span></label>
                      <div class="input-group col-md-5 col-sm-5 col-xs-12">
					  <input type="hidden" name="id-produksi" value="<?php echo "$nomor";?>">
                        <select class="form-control" id="id-produk" name="id-produk" required="required">
							<?php	$ddl_produk=$conn->query("SELECT id_produk,nama_produk FROM db_produk"); ?>
							<option value="<?php echo "$idproduk";?>"> <?php echo "$produk";?></option>
							<?php	if($ddl_produk->num_rows>0) {
														while($rows=$ddl_produk->fetch_assoc()) {
															echo "<option value=" . $rows['id_produk'] . ">" . $rows['nama_produk'] . "</option>";
														} 
													}?>
                        </select>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id-bahan">Pilih Bahan <span class="required">*</span></label>
                      <div class="input-group col-md-5 col-sm-5 col-xs-12">
                        <select class="form-control" id="id-bahan" name="id-bahan" required="required">
							<option value="<?php echo "$idbahan";?>"> <?php echo "$bahan";?></option>
							<?php	$ddl_bahan=$conn->query("SELECT id_bahan,nama_bahan FROM db_bahan"); ?>
							<?php	if($ddl_bahan->num_rows>0) {
														while($rows=$ddl_bahan->fetch_assoc()) {
															echo "<option value=" . $rows['id_bahan'] . ">" . $rows['nama_bahan'] . "</option>";
														} 
													}?>
                        </select>
                      </div>
                    </div>
					
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vol-pdks">Volume (Pack)<span class="required">*</span></label>
                      <div class="input-group col-md-2 col-sm-2 col-xs-12">
                        <input type="number" id="vol-pdks" name="vol-pdks" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$vol";?>">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bhn-pdks">Bahan (Kg)<span class="required">*</span></label>
                      <div class="input-group col-md-2 col-sm-2 col-xs-12">
                        <input type="text" id="bhn-pdks" name="bhn-pdks" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$kgbahan";?>">
                      </div>
                    </div>
					
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl-pdks">Tanggal Produksi <span class="required">*</span></label>
											<div class="input-group col-md-3 col-sm-3 col-xs-12">
												<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
												<input type="date" id="tgl-pdks" name="tgl-pdks" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$tgl";?>">
											</div>
										</div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lt_pdks">Lead Time Produksi <span class="required">*</span></label>
                      <div class="input-group col-md-2 col-sm-2 col-xs-12">
                        <input type="number" id="lt_pdks" name="lt_pdks" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$lt";?>">
												<span class="input-group-addon">Hari</span>
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
