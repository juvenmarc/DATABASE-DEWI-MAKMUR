<?php ob_start();
$host = "localhost";
										$username = "root";
										$password = "";
										$dbname = "dewimakmur"; //database name

										mysql_connect($host,$username,$password) or die (mysql_error ());
										mysql_select_db($dbname);
										
										$id_produksi=$_GET['id_produksi'];
										$hapus=mysql_query("delete from db_produksi where id_produksi='$id_produksi'");
										echo "<script type='text/javascript'>alert('Data Sukses Dihapus');</script>";
 header('location:data_transaksi_produksi.php');

?>