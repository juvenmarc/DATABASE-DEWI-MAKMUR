<?php ob_start();

$host = "localhost";
										$username = "root";
										$password = "";
										$dbname = "dewimakmur"; //database name

										mysql_connect($host,$username,$password) or die (mysql_error ());
										mysql_select_db($dbname);
										
										$id_customer=$_GET['id_customer'];
										$hapus=mysql_query("delete from db_customer where id_customer='$id_customer'");
										echo "<script type='text/javascript'>alert('Data Sukses Dihapus');</script>";
 header('location:data_customer.php');

?>