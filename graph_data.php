<?php
include "connection.php";
$host = $_SERVER['HTTP_HOST'];

$graph_data = $conn->query("SELECT jan, feb, mar, apr, mei, jun, jul, agu, sep, okt, nov, des FROM db_forecast");
$jan_graph = array(); $feb_graph = array(); $mar_graph = array(); $apr_graph = array(); $mei_graph = array(); $jun_graph = array();
$jul_graph = array(); $agu_graph = array(); $sep_graph = array(); $okt_graph = array(); $nov_graph = array(); $des_graph = array();
if($graph_data->num_rows>0) {
	while($row = $graph_data->fetch_assoc()) {
		$jan_graph[] = $row['jan']; $feb_graph[] = $row['feb']; $mar_graph[] = $row['mar']; $apr_graph[] = $row['apr'];
		$mei_graph[] = $row['mei']; $jun_graph[] = $row['jun']; $jul_graph[] = $row['jul']; $agu_graph[] = $row['agu'];
		$sep_graph[] = $row['sep']; $okt_graph[] = $row['okt']; $nov_graph[] = $row['nov']; $des_graph[] = $row['des'];
	}
}

$conn->close();
?>
