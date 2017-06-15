
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
  text: 'GRAFIK PENJUALAN PRODUK CV. DEWI MAKMUR 2015'
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
  "data":[500,200,195,25,172,468,445,180,211,539,608,572]
  },{
  "name":"Teh Celup Jati Cina",
  "data":[278,134,325,297,481,579,331,760,332,565,865,417]
 },{
  "name":"Teh Celup Daun Sirsak",
  "data":[275,276,305,217,200,375,666,712,230,348,463,234]
 },{
  "name":"Teh Celup Kulit Manggis",
  "data":[453,108,284,263,262,603,497,758,301,667,817,458]
 },{
  "name":"Teh Celup Sarang Semut",
  "data":[291,154,102,128,323,562,170,541,569,481,516,426]
 }
 ]
});
</script>