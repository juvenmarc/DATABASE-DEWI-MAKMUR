<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Jadwal Mingguan</h2>
        <ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
					<li><a><i class="fa fa-wrench"></i></a></li>
					<li><a class="close-link"><i class="fa fa-close"></i></a></li>
        </ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<p class="text-muted font-13 m-b-30">
					<div class="row">
						<div class="dropdown col-md-6">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#E57373"><b>Nama Bahan :</b> Rosella</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#rosella">Rosella</a></li>
								<li><a href="#daunjaticina">Daun Jati Cina</a></li>
								<li><a href="#sarangsemut">Sarang Semut</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<b>Lead Time :</b> 4 Hari
						</div>
					</div>
        </p>
				<table id="rosella datatable" class="table table-striped table-bordered" style="text-align:center">
					<thead>
						<tr>
							<th rowspan="2" style="vertical-align:middle">Month</th>
							<?php for($w = 1; $w <= 4; $w++) {
								echo "<th colspan='7' style='text-align:center'>Minggu $w</th>";
							} ?>
						</tr>
						<tr>
						<?php for($w = 1; $w <= 4; $w++) {
							for($d = 1; $d <= 7; $d++) {
								echo "<td>$d</td>";
							}
						} ?>
						</tr>
					</thead>
					<tbody>
						<?php	$f = array('GR','OH','NR','PORec','PORel');
							for($n = 0; $n <5; $n++) {
								echo "<tr>";
								echo "<td>" . $f[$n] . "</td>";
								for($w = 1; $w <= 4; $w++) {
									for($d = 1; $d <= 7; $d++) {
										echo "<td>0</td>";
									}
								}
								echo "</tr>";
							} ?>
					</tbody>
				</table>
      </div>
    </div>
  </div>
</div>