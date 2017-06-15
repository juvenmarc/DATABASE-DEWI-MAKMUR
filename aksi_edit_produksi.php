<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dewimakmur"; //database name

mysql_connect($host,$username,$password) or die (mysql_error ());
mysql_select_db($dbname);

$idproduksi = $_POST['id-produksi'];
$idbahan = $_POST['id-bahan'];
$tgl = $_POST['tgl-pdks'];
$vol = $_POST['vol-pdks'];
$kgbahan = $_POST['bhn-pdks'];
$lt = $_POST['lt_pdks'];
$idproduk = $_POST['id-produk'];


$update ="UPDATE db_produksi SET volume = '$vol', kg_bahan = '$kgbahan', tanggal_produksi = '$tgl', lt_produksi = '$lt', id_bahan = '$idbahan', id_produk = '$idproduk' where id_produksi = '$idproduksi'";
$hasil = mysql_query($update);
if($hasil === FALSE){
	die(mysql_error());
}




if ($hasil){
header ('location:data_transaksi_produksi.php');
echo " <center> Data Berhasil diupdate <br/>
<br> Untuk kembali pada halaman sebelumnya klik <a href = 'data_transaksi_produksi.php'> Disini </a></center>";
} else { echo " <center>Data gagal diupdate <br> <a href = 'data_transaksi_produksi.php'>Kembali</a></center>";
}

?>