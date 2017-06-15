<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dewimakmur"; //database name

mysql_connect($host,$username,$password) or die (mysql_error ());
mysql_select_db($dbname);

$Idsupplier = $_POST['id-supplier'];
$Nama = $_POST['nama-supl'];
$Cp = $_POST['cp-supl'];
$telp = $_POST['no-telp-supl'];
$alamat = $_POST['almt-supl'];
$kota = $_POST['kota-supl'];


$update ="UPDATE db_supplier SET nama_supplier = '$Nama', cp_supplier = '$Cp', alamat_supplier = '$alamat', kota_supplier = '$kota', no_telp_supplier = '$telp' where id_supplier = '$Idsupplier'";
$hasil = mysql_query($update);
if($hasil === FALSE){
	die(mysql_error());
}




if ($hasil){
header ('location:data_supplier.php');
echo " <center> Data Berhasil diupdate <br/>
<br> Untuk kembali pada halaman sebelumnya klik <a href = 'data_supplier.php'> Disini </a></center>";
} else { echo " <center>Data gagal diupdate <br> <a href = 'data_transaksi_produksi.php'>Kembali</a></center>";
}

?>