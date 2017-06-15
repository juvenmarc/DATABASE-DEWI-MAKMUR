<?php ob_start(); 
$host = "localhost";
										$username = "root";
										$password = "";
										$dbname = "dewimakmur"; //database name

										mysql_connect($host,$username,$password) or die (mysql_error ());
										mysql_select_db($dbname);
										
										$id_bbm=$_GET['id_bbm'];
										$hapus=mysql_query("delete from db_bbm where id_bbm='$id_bbm'");
										echo "<script type='text/javascript'>alert('Data Sukses Dihapus');</script>";
 header('location:data_bbm.php');

?>