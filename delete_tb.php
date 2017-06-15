<?php ob_start();
$host = "localhost";
										$username = "root";
										$password = "";
										$dbname = "dewimakmur"; //database name

										mysql_connect($host,$username,$password) or die (mysql_error ());
										mysql_select_db($dbname);
										
										$id_tb=$_GET['id_tb'];
										$hapus=mysql_query("delete from db_transaksi_bahan where id_tb='$id_tb'");
										echo "<script type='text/javascript'>alert('Data Sukses Dihapus');</script>";
 header('location:data_transaksi_bahanbaku.php');

?>