<?php ob_start();

$host = "localhost";
										$username = "root";
										$password = "";
										$dbname = "dewimakmur"; //database name

										mysql_connect($host,$username,$password) or die (mysql_error ());
										mysql_select_db($dbname);
										
										$id_bahan=$_GET['id_bahan'];
										$hapus=mysql_query("delete from db_bahan where id_bahan='$id_bahan'");
										echo "<script type='text/javascript'>alert('Data Sukses Dihapus');</script>";
 header('location:data_bahanbaku.php');

?>