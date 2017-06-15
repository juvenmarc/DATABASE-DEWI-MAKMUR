<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dewimakmur"; //database name

mysql_connect($host,$username,$password) or die (mysql_error ());
mysql_select_db($dbname);

$Idtp = $_POST['id-tp'];
$Jumlah = $_POST['jml-tp'];
$tgl = $_POST['tgl-jual'];
$idproduk = $_POST['id-produk'];
$cust = $_POST['id-cust'];


$update ="UPDATE db_transaksi_produk SET jumlah_tp = '$Jumlah', tanggal_jual = '$tgl', id_produk = '$idproduk', id_customer = '$cust' where id_tp = '$Idtp'";
$hasil = mysql_query($update);
if($hasil === FALSE){
	die(mysql_error());
}




if ($hasil){
header ('location:data_transaksi_produk.php');
echo " <center> Data Berhasil diupdate <br/>
<br> Untuk kembali pada halaman sebelumnya klik <a href = 'data_supplier.php'> Disini </a></center>";
} else { echo " <center>Data gagal diupdate <br> <a href = 'data_transaksi_produksi.php'>Kembali</a></center>";
}

?>