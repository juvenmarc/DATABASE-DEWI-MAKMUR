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
  text: 'GRAFIK PENJUALAN PRODUK CV. DEWI MAKMUR 2019'
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
  "data":[<?php echo $rekaprrr1 ;?>,<?php echo $rekaprrr2 ;?>,<?php echo $rekaprrr3 ;?>,<?php echo $rekaprrr4 ;?>,<?php echo $rekaprrr5 ;?>,<?php echo $rekaprrr6 ;?>,<?php echo $rekaprrr7 ;?>,<?php echo $rekaprrr8 ;?>,<?php echo $rekaprrr9 ;?>,<?php echo $rekaprrr10 ;?>,<?php echo $rekaprrr11 ;?>,<?php echo $rekaprrr12 ;?>]
  },{
  "name":"Teh Celup Jati Cina",
  "data":[<?php echo $rekapjjj1 ;?>,<?php echo $rekapjjj2 ;?>,<?php echo $rekapjjj3 ;?>,<?php echo $rekapjjj4 ;?>,<?php echo $rekapjjj5 ;?>,<?php echo $rekapjjj6 ;?>,<?php echo $rekapjjj7 ;?>,<?php echo $rekapjjj8 ;?>,<?php echo $rekapjjj9 ;?>,<?php echo $rekapjjj10 ;?>,<?php echo $rekapjjj11 ;?>,<?php echo $rekapjjj12 ;?>]
 },{
  "name":"Teh Celup Daun Sirsak",
  "data":[<?php echo $rekapsrrr1 ;?>,<?php echo $rekapsrrr2 ;?>,<?php echo $rekapsrrr3 ;?>,<?php echo $rekapsrrr4 ;?>,<?php echo $rekapsrrr5 ;?>,<?php echo $rekapsrrr6 ;?>,<?php echo $rekapsrrr7 ;?>,<?php echo $rekapsrrr8 ;?>,<?php echo $rekapsrrr9 ;?>,<?php echo $rekapsrrr10 ;?>,<?php echo $rekapsrrr11 ;?>,<?php echo $rekapsrrr12 ;?>]
 },{
  "name":"Teh Celup Kulit Manggis",
  "data":[<?php echo $rekapmmm1 ;?>,<?php echo $rekapmmm2 ;?>,<?php echo $rekapmmm3 ;?>,<?php echo $rekapmmm4 ;?>,<?php echo $rekapmmm5 ;?>,<?php echo $rekapmmm6 ;?>,<?php echo $rekapmmm7 ;?>,<?php echo $rekapmmm8 ;?>,<?php echo $rekapmmm9 ;?>,<?php echo $rekapmmm10 ;?>,<?php echo $rekapmmm11 ;?>,<?php echo $rekapmmm12 ;?>]
 },{
  "name":"Teh Celup Sarang Semut",
  "data":[<?php echo $rekapsmmm1 ;?>,<?php echo $rekapsmmm2 ;?>,<?php echo $rekapsmmm3 ;?>,<?php echo $rekapsmmm4 ;?>,<?php echo $rekapsmmm5 ;?>,<?php echo $rekapsmmm6 ;?>,<?php echo $rekapsmmm7 ;?>,<?php echo $rekapsmmm8 ;?>,<?php echo $rekapsmmm9 ;?>,<?php echo $rekapsmmm10 ;?>,<?php echo $rekapsmmm11 ;?>,<?php echo $rekapsmmm12 ;?>]
 }
 ]
});
</script>