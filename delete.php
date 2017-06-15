<?php
include('connection.php');
$host = $_SERVER['HTTP_HOST'];

if(isset($_POST['delete_bahan'])){
	$id_bahan = $_POST['id_bahan'];
	$del_bahan = "DELETE FROM `db_bahan` WHERE `id_bahan` = '$id_bahan'";
	$conn->query($del_bahan);
	echo "<script type='text/javascript'>alert('Hapus Data Sukses');</script>";

	header("Location: data_bahanbaku.php");
}

if(isset($_POST['delete_produk'])){
	$id_produk = $_POST['id_produk'];
	$del_produk = "DELETE FROM `db_produk` WHERE `id_produk` = '$id_produk'";
	$conn->query($del_produk);
	echo "<script type='text/javascript'>alert('Hapus Data Sukses');</script>";

	header("Location: data_produk.php");
}

if(isset($_POST['delete_supplier'])){
	$id_supplier = $_POST['id_supplier'];
	$del_supl = "DELETE FROM `db_supplier` WHERE `id_supplier` = '$id_supplier'";
	$conn->query($del_supl);
	echo "<script type='text/javascript'>alert('Hapus Data Sukses');</script>";

	header("Location: data_supplier.php");
}

if(isset($_POST['delete_customer'])){
	$id_customer = $_POST['id_customer'];
	$del_cust = "DELETE FROM `db_customer` WHERE `id_customer` = '$id_customer'";
	$conn->query($del_cust);
	echo "<script type='text/javascript'>alert('Hapus Data Sukses');</script>";

	header("Location: data_customer.php");
}

if(isset($_POST['delete_bbm'])){
	$id_bbm = $_POST['id_bbm'];
	$del_bbm = "DELETE FROM `db_bbm` WHERE `id_bbm` = '$id_bbm'";
	$conn->query($del_bbm);
	echo "<script type='text/javascript'>alert('Hapus Data Sukses');</script>";

	header("Location: data_bbm.php");
}

if(isset($_POST['delete_tb'])){
	$id_tb = $_POST['id_tb'];
	$del_tb = "DELETE FROM `db_transaksi_bahan` WHERE `id_tb` = '$id_tb'";
	$conn->query($del_tb);
	echo "<script type='text/javascript'>alert('Hapus Data Sukses');</script>";

	header("Location: data_transaksi_bahanbaku.php");
}

if(isset($_POST['delete_tp'])){
	$id_tp = $_POST['id_tp'];
	$del_tp = "DELETE FROM `db_transaksi_produk` WHERE `id_tp` = '$id_tp'";
	$conn->query($del_tp);
	echo "<script type='text/javascript'>alert('Hapus Data Sukses');</script>";

	header("Location: data_transaksi_produk.php");
}

if(isset($_POST['delete_produksi'])){
	$id_produksi = $_POST['id_produksi'];
	$del_prods = "DELETE FROM `db_produksi` WHERE `id_produksi` = '$id_produksi'";
	$conn->query($del_prods);
	echo "<script type='text/javascript'>alert('Hapus Data Sukses');</script>";

	header("Location: data_transaksi_produksi.php");
}

if(isset($_POST['delete_forecast'])){
	$id_forecast = $_POST['id_forecast'];
	$del_fc = "DELETE FROM `db_forecast` WHERE `id_forecast` = '$id_forecast'";
	$conn->query($del_fc);
	echo "<script type='text/javascript'>alert('Hapus Data Sukses');</script>";

	header("Location: data_forecast.php");
}
?>