<?php ob_start(); 
$host = "localhost";
										$username = "root";
										$password = "";
										$dbname = "dewimakmur"; //database name

										mysql_connect($host,$username,$password) or die (mysql_error ());
										mysql_select_db($dbname);
										
										$id_tp=$_GET['id_tp'];
										$hapus=mysql_query("delete from db_transaksi_produk where id_tp='$id_tp'");
										echo "<script type='text/javascript'>alert('Data Sukses Dihapus');</script>";
 header('location:data_transaksi_produk.php');

?>