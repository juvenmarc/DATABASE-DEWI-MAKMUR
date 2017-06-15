<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dewimakmur"; //database name

mysql_connect($host,$username,$password) or die (mysql_error ());
mysql_select_db($dbname);

$Idproduk = $_POST['id-produk'];
$Nama = $_POST['nama-produk'];
$Harga = $_POST['harga-produk'];
$Ss = $_POST['safety-stock'];


$update ="UPDATE db_produk SET nama_produk = '$Nama', ss = '$Ss', harga_pack = '$Harga' where id_produk = '$Idproduk'";
$hasil = mysql_query($update);
if($hasil === FALSE){
	die(mysql_error());
}




if ($hasil){
header ('location:data_produk.php');
echo " <center> Data Berhasil diupdate <br/>
<br> Untuk kembali pada halaman sebelumnya klik <a href = 'data_produk.php'> Disini </a></center>";
} else { echo " <center>Data gagal diupdate <br> <a href = 'data_transaksi_produksi.php'>Kembali</a></center>";
}

?>