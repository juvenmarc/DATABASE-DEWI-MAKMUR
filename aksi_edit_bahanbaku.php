<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dewimakmur"; //database name

mysql_connect($host,$username,$password) or die (mysql_error ());
mysql_select_db($dbname);

$Idbahan = $_POST['id-bahan'];
$Nama = $_POST['nama-bahan'];
$Harga = $_POST['harga-bahan'];
$Lt = $_POST['lt-deliv'];


$update ="UPDATE db_bahan SET nama_bahan = '$Nama', lt_deliv = '$Lt', harga_bahan = '$Harga' where id_bahan = '$Idbahan'";
$hasil = mysql_query($update);
if($hasil === FALSE){
	die(mysql_error());
}




if ($hasil){
header ('location:data_bahanbaku.php');
echo " <center> Data Berhasil diupdate <br/>
<br> Untuk kembali pada halaman sebelumnya klik <a href = 'data_transaksi_produksi.php'> Disini </a></center>";
} else { echo " <center>Data gagal diupdate <br> <a href = 'data_transaksi_produksi.php'>Kembali</a></center>";
}

?>