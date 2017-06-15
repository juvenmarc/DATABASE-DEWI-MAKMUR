<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Jadwal Mingguan Bahan Teh Hitam</h2>
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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#E57373"><b>Pilih Bulan MRP >></b></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="dashboard.php?page=januari">Januari</a></li>								
								<li><a href="dashboard.php?page=februari">Februari</a></li>
								<li><a href="dashboard.php?page=maret">Maret</a></li>
								<li><a href="dashboard.php?page=april">April</a></li>
								<li><a href="dashboard.php?page=mei">Mei</a></li>
								<li><a href="dashboard.php?page=juni">Juni</a></li>
								<li><a href="dashboard.php?page=juli">Juli</a></li>
								<li><a href="dashboard.php?page=agustus">Agustus</a></li>
								<li><a href="dashboard.php?page=september">September</a></li>
								<li><a href="dashboard.php?page=oktober">Oktober</a></li>
								<li><a href="dashboard.php?page=november">November</a></li>
								<li><a href="dashboard.php?page=desember">Desember</a></li>
							</ul>
						</div>
					</div>
        </p>
				<?php 
				//include 'rosella.php'; 
				include 'casetehhitam.php';?>
				
			Keterangan : <br>
			GR 		= Gross Requirement &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Total dari semua kebutuhan, termasuk kebutuhan yang   diantisipasi untuk setiap periode waktu.<br>
			OH 		= On Hand &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Jumlah inventori awal periode.<br>
			NR 		= Net Requirement &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Jumlah aktual yang diinginkan untuk diterima atau diproduksi dalam periode bersangkutan.<br>
			PORec 	= Planned Order Receipt : Jumlah item yang diterima atau diproduksi oleh perusahaan manufaktur pada periode waktu terakhir.<br>
			PORel 	= Planned Order Release : Jumlah item yang direncanakan untuk dipesan agar memenuhi perencanaan pada masa yang akan datang.<br>
      </div>
    </div>
  </div>
</div>