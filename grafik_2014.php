
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
  text: 'GRAFIK PENJUALAN PRODUK CV. DEWI MAKMUR 2014'
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
  "data":[377,283,264,143,155,234,189,319,392,411,431,310]
  },{
  "name":"Teh Celup Jati Cina",
  "data":[422,377,504,411,678,604,547,494,501,423,913,447]
 },{
  "name":"Teh Celup Daun Sirsak",
  "data":[331,391,323,287,259,348,626,593,414,422,571,301]
 },{
  "name":"Teh Celup Kulit Manggis",
  "data":[421,299,326,288,374,492,369,815,413,524,713,634]
 },{
  "name":"Teh Celup Sarang Semut",
  "data":[329,285,277,403,500,422,316,362,489,465,338,290]
 }
 ]
});
</script>