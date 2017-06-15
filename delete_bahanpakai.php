<?php ob_start();
$host = "localhost";
										$username = "root";
										$password = "";
										$dbname = "dewimakmur"; //database name

										mysql_connect($host,$username,$password) or die (mysql_error ());
										mysql_select_db($dbname);
										
										$id_pakai=$_GET['id_pakai'];
										$hapus=mysql_query("delete from db_bahan_pakai where id_pakai='$id_pakai'");
										echo "<script type='text/javascript'>alert('Data Sukses Dihapus');</script>";
 header('location:data_bahan_pakai.php');

?>