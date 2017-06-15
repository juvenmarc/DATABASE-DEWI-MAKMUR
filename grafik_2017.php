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
  text: 'GRAFIK PENJUALAN PRODUK CV. DEWI MAKMUR 2017'
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
  "data":[392,299,338,<?php echo $rekapr4 ;?>,<?php echo $rekapr5 ;?>,<?php echo $rekapr6 ;?>,<?php echo $rekapr7 ;?>,<?php echo $rekapr8 ;?>,<?php echo $rekapr9 ;?>,<?php echo $rekapr10 ;?>,<?php echo $rekapr11 ;?>,<?php echo $rekapr12 ;?>]
  },{
  "name":"Teh Celup Jati Cina",
  "data":[512,217,590,<?php echo $rekapj4 ;?>,<?php echo $rekapj5 ;?>,<?php echo $rekapj6 ;?>,<?php echo $rekapj7 ;?>,<?php echo $rekapj8 ;?>,<?php echo $rekapj9 ;?>,<?php echo $rekapj10 ;?>,<?php echo $rekapj11 ;?>,<?php echo $rekapj12 ;?>]
 },{
  "name":"Teh Celup Daun Sirsak",
  "data":[298,282,298,<?php echo $rekapsr4 ;?>,<?php echo $rekapsr5 ;?>,<?php echo $rekapsr6 ;?>,<?php echo $rekapsr7 ;?>,<?php echo $rekapsr8 ;?>,<?php echo $rekapsr9 ;?>,<?php echo $rekapsr10 ;?>,<?php echo $rekapsr11 ;?>,<?php echo $rekapsr12 ;?>]
 },{
  "name":"Teh Celup Kulit Manggis",
  "data":[552,307,307,<?php echo $rekapm4 ;?>,<?php echo $rekapm5 ;?>,<?php echo $rekapm6 ;?>,<?php echo $rekapm7 ;?>,<?php echo $rekapm8 ;?>,<?php echo $rekapm9 ;?>,<?php echo $rekapm10 ;?>,<?php echo $rekapm11 ;?>,<?php echo $rekapm12 ;?>]
 },{
  "name":"Teh Celup Sarang Semut",
  "data":[403,341,211,<?php echo $rekapsm4 ;?>,<?php echo $rekapsm5 ;?>,<?php echo $rekapsm6 ;?>,<?php echo $rekapsm7 ;?>,<?php echo $rekapsm8 ;?>,<?php echo $rekapsm9 ;?>,<?php echo $rekapsm10 ;?>,<?php echo $rekapsm11 ;?>,<?php echo $rekapsm12 ;?>]
 }
 ]
});
</script>