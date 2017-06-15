<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dewimakmur"; //database name

mysql_connect($host,$username,$password) or die (mysql_error ());
mysql_select_db($dbname);

$Idcustomer = $_POST['id-customer'];
$Nama = $_POST['nama-cust'];
$Cp = $_POST['cp-cust'];
$telp = $_POST['no-telp-cust'];
$alamat = $_POST['almt-cust'];
$kota = $_POST['kota-cust'];


$update ="UPDATE db_customer SET nama_customer = '$Nama', cp_customer = '$Cp', alamat_customer = '$alamat', kota_customer = '$kota', no_telp_customer = '$telp' where id_customer = '$Idcustomer'";
$hasil = mysql_query($update);
if($hasil === FALSE){
	die(mysql_error());
}




if ($hasil){
header ('location:data_customer.php');
echo " <center> Data Berhasil diupdate <br/>
<br> Untuk kembali pada halaman sebelumnya klik <a href = 'data_customer.php'> Disini </a></center>";
} else { echo " <center>Data gagal diupdate <br> <a href = 'data_transaksi_produksi.php'>Kembali</a></center>";
}

?>