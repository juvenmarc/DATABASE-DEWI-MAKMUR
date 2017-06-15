<?php ob_start();

$host = "localhost";
										$username = "root";
										$password = "";
										$dbname = "dewimakmur"; //database name

										mysql_connect($host,$username,$password) or die (mysql_error ());
										mysql_select_db($dbname);
										
										$id_produk=$_GET['id_produk'];
										$hapus=mysql_query("delete from db_produk where id_produk='$id_produk'");
										echo "<script type='text/javascript'>alert('Data Sukses Dihapus');</script>";
 header('location:data_produk.php');

?>