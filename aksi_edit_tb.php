<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dewimakmur"; //database name

mysql_connect($host,$username,$password) or die (mysql_error ());
mysql_select_db($dbname);

$Idtb = $_POST['id-tb'];
$Jumlah = $_POST['jml-tb'];
$tgl = $_POST['tgl-order'];
$perlu = $_POST['tgl-perlu'];
$sup = $_POST['id-supl'];
$bahan = $_POST['id-bahan'];


$update ="UPDATE db_transaksi_bahan SET jumlah_tb = '$Jumlah', tanggal_order = '$tgl', tanggal_perlu = '$perlu', id_supplier = '$sup', id_bahan = '$bahan' where id_tb = '$Idtb'";
$hasil = mysql_query($update);
if($hasil === FALSE){
	die(mysql_error());
}




if ($hasil){
header ('location:data_transaksi_bahanbaku.php');
echo " <center> Data Berhasil diupdate <br/>
<br> Untuk kembali pada halaman sebelumnya klik <a href = 'data_supplier.php'> Disini </a></center>";
} else { echo " <center>Data gagal diupdate <br> <a href = 'data_transaksi_produksi.php'>Kembali</a></center>";
}

?>