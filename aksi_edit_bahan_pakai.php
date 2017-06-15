<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dewimakmur"; //database name

mysql_connect($host,$username,$password) or die (mysql_error ());
mysql_select_db($dbname);

$Idpakai = $_POST['id-pakai'];
$Jumlah = $_POST['jml'];
$tgl = $_POST['tgl-pakai'];
$bhn = $_POST['id-bahan'];


$update ="UPDATE db_bahan_dipakai SET jumlah = '$Jumlah', tanggal_pakai = '$tgl', id_bahan = '$bhn' where id_pakai = '$Idpakai'";
$hasil = mysql_query($update);
if($hasil === FALSE){
	die(mysql_error());
}




if ($hasil){
header ('location:data_bahan_pakai.php');
echo " <center> Data Berhasil diupdate <br/>
<br> Untuk kembali pada halaman sebelumnya klik <a href = 'data_supplier.php'> Disini </a></center>";
} else { echo " <center>Data gagal diupdate <br> <a href = 'data_transaksi_produksi.php'>Kembali</a></center>";
}

?>