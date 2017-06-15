<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dewimakmur"; //database name

mysql_connect($host,$username,$password) or die (mysql_error ());
mysql_select_db($dbname);

$nomor = $_POST['id-bbm'];
$idbahan = $_POST['id-bahan'];
$Volume = $_POST['vol-bbm'];
$Tgl = $_POST['tgl-masuk'];
$Idtb = $_POST['id-tb'];


$update ="UPDATE db_bbm SET volume = '$Volume', tanggal_bbm = '$Tgl', id_bahan = '$idbahan', id_tb = '$Idtb' where id_bbm = '$nomor'";
$hasil = mysql_query($update);
if($hasil === FALSE){
	die(mysql_error());
}




if ($hasil){
header ('location:data_bbm.php');
echo " <center> Data Berhasil diupdate <br/>
<br> Untuk kembali pada halaman sebelumnya klik <a href = 'data_supplier.php'> Disini </a></center>";
} else { echo " <center>Data gagal diupdate <br> <a href = 'data_transaksi_produksi.php'>Kembali</a></center>";
}

?>