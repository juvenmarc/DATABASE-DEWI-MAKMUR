<?php ob_start();

$host = "localhost";
										$username = "root";
										$password = "";
										$dbname = "dewimakmur"; //database name

										mysql_connect($host,$username,$password) or die (mysql_error ());
										mysql_select_db($dbname);
										
										$id_supplier=$_GET['id_supplier'];
										$hapus=mysql_query("delete from db_supplier where id_supplier='$id_supplier'");
										echo "<script type='text/javascript'>alert('Data Sukses Dihapus');</script>";
 header('location:data_supplier.php');

?>