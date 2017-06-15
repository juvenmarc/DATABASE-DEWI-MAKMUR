
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
  text: 'GRAFIK PENJUALAN PRODUK CV. DEWI MAKMUR 2016'
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
  "data":[434,340,414,78,138,364,89,258,357,365,412,185]
  },{
  "name":"Teh Celup Jati Cina",
  "data":[472,568,778,180,719,531,648,555,720,327,795,345]
 },{
  "name":"Teh Celup Daun Sirsak",
  "data":[360,132,286,158,385,376,708,351,282,370,381,297]
 },{
  "name":"Teh Celup Kulit Manggis",
  "data":[601,416,536,156,600,317,247,574,505,372,421,362]
 },{
  "name":"Teh Celup Sarang Semut",
  "data":[667,470,367,451,666,206,285,331,274,311,280,143]
 }
 ]
});
</script>