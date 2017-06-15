<?php include"connection.php";
include"rekap_penjualan_rosella.php";
include"rekap_penjualan_jaticina.php";
include"rekap_penjualan_sirsak.php";
include"rekap_penjualan_manggis.php";
include"rekap_penjualan_sarmut.php";?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript" src="http://code.highcharts.com/modules/exporting.js"></script>

<div class="container">
<div class="grafik" style="width:100%; height:400px;"></div>
</div>
<script type="text/javascript">
$('.grafik').highcharts({
 chart: {
  type: 'column',
  marginTop: 80
 },
 credits: {
  enabled: false
 }, 
 tooltip: {
  shared: true,
  crosshairs: true,
  headerFormat: '<b>{point.key}</b>< br />'
 },
 title: {
  text: 'GRAFIK PENJUALAN PRODUK CV. DEWI MAKMUR 2018'
 },
 subtitle: {
  text: 'Sumber: Data Olahan'
 },
 xAxis: {
  categories: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des',],
  labels: {
   rotation: 0,
   align: 'right',
   style: {
    fontSize: '10px',
    fontFamily: 'Verdana, sans-serif'
   }
  }
 },
 yAxis: {
   title: {
   text: 'Jumlah Produk ( Pack )'
   },
   plotLines: [{
   value: 0,
   width: 1,
   color: '#808080'}]
},
 legend: {
  enabled: true
 },
 series: [{
  "name":"Teh Celup Rosella",
  "data":[<?php echo $rekaprr1 ;?>,<?php echo $rekaprr2 ;?>,<?php echo $rekaprr3 ;?>,<?php echo $rekaprr4 ;?>,<?php echo $rekaprr5 ;?>,<?php echo $rekaprr6 ;?>,<?php echo $rekaprr7 ;?>,<?php echo $rekaprr8 ;?>,<?php echo $rekaprr9 ;?>,<?php echo $rekaprr10 ;?>,<?php echo $rekaprr11 ;?>,<?php echo $rekaprr12 ;?>]
  },{
  "name":"Teh Celup Jati Cina",
  "data":[<?php echo $rekapjj1 ;?>,<?php echo $rekapjj2 ;?>,<?php echo $rekapjj3 ;?>,<?php echo $rekapjj4 ;?>,<?php echo $rekapjj5 ;?>,<?php echo $rekapjj6 ;?>,<?php echo $rekapjj7 ;?>,<?php echo $rekapjj8 ;?>,<?php echo $rekapjj9 ;?>,<?php echo $rekapjj10 ;?>,<?php echo $rekapjj11 ;?>,<?php echo $rekapjj12 ;?>]
 },{
  "name":"Teh Celup Daun Sirsak",
  "data":[<?php echo $rekapsrr1 ;?>,<?php echo $rekapsrr2 ;?>,<?php echo $rekapsrr3 ;?>,<?php echo $rekapsrr4 ;?>,<?php echo $rekapsrr5 ;?>,<?php echo $rekapsrr6 ;?>,<?php echo $rekapsrr7 ;?>,<?php echo $rekapsrr8 ;?>,<?php echo $rekapsrr9 ;?>,<?php echo $rekapsrr10 ;?>,<?php echo $rekapsrr11 ;?>,<?php echo $rekapsrr12 ;?>]
 },{
  "name":"Teh Celup Kulit Manggis",
  "data":[<?php echo $rekapmm1 ;?>,<?php echo $rekapmm2 ;?>,<?php echo $rekapmm3 ;?>,<?php echo $rekapmm4 ;?>,<?php echo $rekapmm5 ;?>,<?php echo $rekapmm6 ;?>,<?php echo $rekapmm7 ;?>,<?php echo $rekapmm8 ;?>,<?php echo $rekapmm9 ;?>,<?php echo $rekapmm10 ;?>,<?php echo $rekapmm11 ;?>,<?php echo $rekapmm12 ;?>]
 },{
  "name":"Teh Celup Sarang Semut",
  "data":[<?php echo $rekapsmm1 ;?>,<?php echo $rekapsmm2 ;?>,<?php echo $rekapsmm3 ;?>,<?php echo $rekapsmm4 ;?>,<?php echo $rekapsmm5 ;?>,<?php echo $rekapsmm6 ;?>,<?php echo $rekapsmm7 ;?>,<?php echo $rekapsmm8 ;?>,<?php echo $rekapsmm9 ;?>,<?php echo $rekapsmm10 ;?>,<?php echo $rekapsmm11 ;?>,<?php echo $rekapsmm12 ;?>]
 }
 ]
});
</script>