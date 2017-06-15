<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "dewimakmur"; //database name

mysql_connect($host,$username,$password) or die (mysql_error ());
mysql_select_db($dbname);

//cari rata-rata simple average
	$sql="SELECT jan, feb, mar, apr, mei, jun, jul, agu, sep, okt, nov, des FROM db_forecast WHERE id_produk ='12004' AND tahun = '2014'";
	$q=mysql_query($sql);
	while ($row = mysql_fetch_array($q)){ 
		
		$jan = $row['jan'];
		$feb = $row['feb'];
		$mar = $row['mar'];
		$apr = $row['apr'];
		$mei = $row['mei'];
		$jun = $row['jun'];
		$jul = $row['jul'];
		$agu = $row['agu'];
		$sep = $row['sep'];
		$okt = $row['okt'];
		$nov = $row['nov'];
		$des = $row['des'];
		$sum2014 = ($jan+$feb+$mar+$apr+$mei+$jun+$jul+$agu+$sep+$okt+$nov+$des) ;
		//echo"<br>$rata2014</br>";
	}
	$sql="SELECT jan, feb, mar, apr, mei, jun, jul, agu, sep, okt, nov, des FROM db_forecast WHERE id_produk ='12004' AND tahun = '2015'";
	$q=mysql_query($sql);
	while ($row = mysql_fetch_array($q)){ 
		
		$jan = $row['jan'];
		$feb = $row['feb'];
		$mar = $row['mar'];
		$apr = $row['apr'];
		$mei = $row['mei'];
		$jun = $row['jun'];
		$jul = $row['jul'];
		$agu = $row['agu'];
		$sep = $row['sep'];
		$okt = $row['okt'];
		$nov = $row['nov'];
		$des = $row['des'];
		$sum2015 = ($jan+$feb+$mar+$apr+$mei+$jun+$jul+$agu+$sep+$okt+$nov+$des) ;
		//echo"<br>$rata2015</br>";
	}
	$sql="SELECT jan, feb, mar, apr, mei, jun, jul, agu, sep, okt, nov, des FROM db_forecast WHERE id_produk ='12004' AND tahun = '2016'";
	$q=mysql_query($sql);
	while ($row = mysql_fetch_array($q)){ 
		
		$jan = $row['jan'];
		$feb = $row['feb'];
		$mar = $row['mar'];
		$apr = $row['apr'];
		$mei = $row['mei'];
		$jun = $row['jun'];
		$jul = $row['jul'];
		$agu = $row['agu'];
		$sep = $row['sep'];
		$okt = $row['okt'];
		$nov = $row['nov'];
		$des = $row['des'];
		$sum2016 = ($jan+$feb+$mar+$apr+$mei+$jun+$jul+$agu+$sep+$okt+$nov+$des) ;
		//echo"<br>$rata2016</br>";
	}
	
	$sqll="SELECT jan FROM db_forecast WHERE id_produk ='12001'";
	$q=mysql_query($sqll);
	$jumlahdata = mysql_num_rows($q);
	if ($jumlahdatatotal = $jumlahdata*12){
	//echo "Jumlah data : $jumlahdatatotal <br>";
	}
	
	$rata = ($sum2014+$sum2015+$sum2016)/$jumlahdatatotal;
	//echo"<br>Hasil Peramalan : $rata</br>";
 //sampai sini cari rata rata Simple average	
 
				//cari rata-rata januari14-16
				$sql="SELECT sum(jan) as jumlah FROM db_forecast WHERE id_produk ='12004'";
				$q=mysql_query($sql);
				while ($rows = mysql_fetch_array($q)){ 
									
									$jan14 = $rows['jumlah'];
									//echo"<br>$apr15</br>";
								}
				
				$sqll="SELECT jan FROM db_forecast WHERE id_produk ='12001'";
				$q=mysql_query($sqll);
				$jumlahdatatahun = mysql_num_rows($q);
				//echo "Jumlah data : $jumlahdatatahun <br>";
				
				$rata2jan = ($jan14)/$jumlahdatatahun ;
				//echo"<br>Hasil Rata-rata Januari : $rata2jan</br>";
				
				//cari rata-rata februari14-16
				$sql="SELECT sum(feb) as jumlah FROM db_forecast WHERE id_produk ='12004'";
				$q=mysql_query($sql);
				while ($rows = mysql_fetch_array($q)){ 
									
									$feb14 = $rows['jumlah'];
									//echo"<br>$apr15</br>";
								}
				$rata2feb = ($feb14)/$jumlahdatatahun ;
				//echo"<br>Hasil Rata-rata Februari : $rata2feb</br>";
				
				//cari rata-rata Maret 14-16
				$sql="SELECT sum(mar) as jumlah FROM db_forecast WHERE id_produk ='12004'";
				$q=mysql_query($sql);
				while ($rows = mysql_fetch_array($q)){ 
									
									$mar14 = $rows['jumlah'];
									//echo"<br>$apr15</br>";
								}
				$rata2mar = ($mar14)/$jumlahdatatahun ;
				//echo"<br>Hasil Rata-rata Maret : $rata2mar</br>";
				
				//cari rata-rata April 14-16
				$sql="SELECT sum(apr) as jumlah FROM db_forecast WHERE id_produk ='12004'";
				$q=mysql_query($sql);
				while ($rows = mysql_fetch_array($q)){ 
									
									$apr14 = $rows['jumlah'];
									//echo"<br>$apr15</br>";
								}
				$rata2apr = ($apr14)/$jumlahdatatahun ;
				//echo"<br>Hasil Rata-rata April : $rata2apr</br>";
				
				//cari rata-rata Mei 14-16
				$sql="SELECT sum(mei) as jumlah FROM db_forecast WHERE id_produk ='12004'";
				$q=mysql_query($sql);
				while ($rows = mysql_fetch_array($q)){ 
									
									$mei14 = $rows['jumlah'];
									//echo"<br>$apr15</br>";
								}
				$rata2mei = ($mei14)/$jumlahdatatahun ;
				//echo"<br>Hasil Rata-rata Mei : $rata2mei</br>";
				
				//cari rata-rata Juni 14-16
				$sql="SELECT sum(jun) as jumlah FROM db_forecast WHERE id_produk ='12004'";
				$q=mysql_query($sql);
				while ($rows = mysql_fetch_array($q)){ 
									
									$jun14 = $rows['jumlah'];
									//echo"<br>$apr15</br>";
								}
				$rata2jun = ($jun14)/$jumlahdatatahun ;
				//echo"<br>Hasil Rata-rata Juni : $rata2jun</br>";
				
				//cari rata-rata Juli 14-16
				$sql="SELECT sum(jul) as jumlah FROM db_forecast WHERE id_produk ='12004'";
				$q=mysql_query($sql);
				while ($rows = mysql_fetch_array($q)){ 
									
									$jul14 = $rows['jumlah'];
									//echo"<br>$apr15</br>";
								}
				$rata2jul = ($jul14)/$jumlahdatatahun ;
				//echo"<br>Hasil Rata-rata Juli : $rata2jul</br>";
				
				//cari rata-rata Agustus 14-16
				$sql="SELECT sum(agu) as jumlah FROM db_forecast WHERE id_produk ='12004'";
				$q=mysql_query($sql);
				while ($rows = mysql_fetch_array($q)){ 
									
									$agu14 = $rows['jumlah'];
									//echo"<br>$apr15</br>";
								}
				$rata2agu = ($agu14)/$jumlahdatatahun ;
				//echo"<br>Hasil Rata-rata Agustus : $rata2agu</br>";
				
				//cari rata-rata Seprember 14-16
				$sql="SELECT sum(sep) as jumlah FROM db_forecast WHERE id_produk ='12004'";
				$q=mysql_query($sql);
				while ($rows = mysql_fetch_array($q)){ 
									
									$sep14 = $rows['jumlah'];
									//echo"<br>$apr15</br>";
								}
				$rata2sep = ($sep14)/$jumlahdatatahun ;
				//echo"<br>Hasil Rata-rata September : $rata2sep</br>";
				
				//cari rata-rata Oktober 14-16
				$sql="SELECT sum(okt) as jumlah FROM db_forecast WHERE id_produk ='12004'";
				$q=mysql_query($sql);
				while ($rows = mysql_fetch_array($q)){ 
									
									$okt14 = $rows['jumlah'];
									//echo"<br>$apr15</br>";
								}
				$rata2okt = ($okt14)/$jumlahdatatahun ;
				//echo"<br>Hasil Rata-rata Oktober : $rata2okt</br>";
				
				//cari rata-rata November 14-16
				$sql="SELECT sum(nov) as jumlah FROM db_forecast WHERE id_produk ='12004'";
				$q=mysql_query($sql);
				while ($rows = mysql_fetch_array($q)){ 
									
									$nov14 = $rows['jumlah'];
									//echo"<br>$apr15</br>";
								}
				$rata2nov = ($nov14)/$jumlahdatatahun ;
				//echo"<br>Hasil Rata-rata November : $rata2nov</br>";
				
				//cari rata-rata Desember 14-16
				$sql="SELECT sum(des) as jumlah FROM db_forecast WHERE id_produk ='12004'";
				$q=mysql_query($sql);
				while ($rows = mysql_fetch_array($q)){ 
									
									$des14 = $rows['jumlah'];
									//echo"<br>$apr15</br>";
								}
				$rata2des = ($des14)/$jumlahdatatahun ;
				//echo"<br>Hasil Rata-rata Desember : $rata2des</br>";
				
	// cari faktor musiman tiap bulan
		if ($fmjan = $rata2jan - $rata) {//januari
			//echo "<br>Hasil Faktor Musiman Januari : $fmjan</br>"; 
			}
		if ($fmfeb = $rata2feb - $rata) {//Februari
			//echo "<br>Hasil Faktor Musiman Februari : $fmfeb</br>"; 
			}
		if ($fmmar = $rata2mar - $rata) {//Maret
			//echo "<br>Hasil Faktor Musiman Maret : $fmmar</br>"; 
			}
		if ($fmapr = $rata2apr - $rata) {//April
			//echo "<br>Hasil Faktor Musiman April : $fmapr</br>"; 
			}
		if ($fmmei = $rata2mei - $rata) {//Mei
			//echo "<br>Hasil Faktor Musiman Mei : $fmmei</br>"; 
			}
		if ($fmjun = $rata2jun - $rata) {//Juni
			//echo "<br>Hasil Faktor Musiman Juni : $fmjun</br>"; 
			}
		if ($fmjul = $rata2jul - $rata) {//Juli
			//echo "<br>Hasil Faktor Musiman Juli : $fmjul</br>"; 
			}
		if ($fmagu = $rata2agu - $rata) {//Agustus
			//echo "<br>Hasil Faktor Musiman Agustus : $fmagu</br>"; 
			}
		if ($fmsep = $rata2sep - $rata) {//September
			//echo "<br>Hasil Faktor Musiman September : $fmsep</br>"; 
			}
		if ($fmokt = $rata2okt - $rata) {//Oktober
			//echo "<br>Hasil Faktor Musiman Oktober : $fmokt</br>"; 
			}
		if ($fmnov = $rata2nov - $rata) {//November
			//echo "<br>Hasil Faktor Musiman November : $fmnov</br>"; 
			}
		if ($fmdes = $rata2des - $rata) {//Desember
			//echo "<br>Hasil Faktor Musiman Desember : $fmdes</br>"; 
			}
			
	//cari peramalan dekomposisi
		if ($dekomjan = $fmjan + $rata) {//januari
			//echo "<br>Hasil dekomposisi Januari : $dekomjan</br>"; 
			}
		if ($dekomfeb = $fmfeb + $rata) {//Februari
			//echo "<br>Hasil dekomposisi Februari : $dekomfeb</br>"; 
			}
		if ($dekommar = $fmmar + $rata) {//Maret
			//echo "<br>Hasil dekomposisi Maret : $dekommar</br>"; 
			}
		if ($dekomapr = $fmapr + $rata) {//April
			//echo "<br>Hasil dekomposisi April : $dekomapr</br>"; 
			}
		if ($dekommei = $fmmei + $rata) {//Mei
			//echo "<br>Hasil dekomposisi Mei : $dekommei</br>"; 
			}
		if ($dekomjun = $fmjun + $rata) {//Juni
			//echo "<br>Hasil dekomposisi Juni : $dekomjun</br>"; 
			}
		if ($dekomjul = $fmjul + $rata) {//Juli
			//echo "<br>Hasil dekomposisi Juli : $dekomjul</br>"; 
			}
		if ($dekomagu = $fmagu + $rata) {//Agustus
			//echo "<br>Hasil dekomposisi Agustus : $dekomagu</br>"; 
			}
		if ($dekomsep = $fmsep + $rata) {//September
			//echo "<br>Hasil dekomposisi September : $dekomsep</br>"; 
			}
		if ($dekomokt = $fmokt + $rata) {//Oktober
			//echo "<br>Hasil dekomposisi Oktober : $dekomokt</br>"; 
			}
		if ($dekomnov = $fmnov + $rata) {//November
			//echo "<br>Hasil dekomposisi November : $dekomnov</br>"; 
			}
		if ($dekomdes = $fmdes + $rata) {//Desember
			//echo "<br>Hasil dekomposisi Desember : $dekomdes</br>"; 
			}
			
	//cari kebutuhan bahan
		if ($bahanjan = (($dekomjan*52.5)*0.06)+($dekomjan*52.5*0.01*0.06)){ //Januari
			//echo "<br>Hasil Kebutuhan Bahan Januari : $bahanjan Gram</br>"; 
			}
		if ($bahanfeb = (($dekomfeb*52.5)*0.06)+($dekomfeb*52.5*0.01*0.06)){ //Februari
			//echo "<br>Hasil Kebutuhan Bahan Februari : $bahanfeb Gram</br>"; 
			}
		if ($bahanmar = (($dekommar*52.5)*0.06)+($dekommar*52.5*0.01*0.06)){ //Maret
			//echo "<br>Hasil Kebutuhan Bahan Maret : $bahanmar Gram</br>"; 
			}
		if ($bahanapr = (($dekomapr*52.5)*0.06)+($dekomapr*52.5*0.01*0.06)){ //April
			//echo "<br>Hasil Kebutuhan Bahan April : $bahanapr Gram</br>"; 
			}
		if ($bahanmei = (($dekommei*52.5)*0.06)+($dekommei*52.5*0.01*0.06)){ //Mei
			//echo "<br>Hasil Kebutuhan Bahan Mei : $bahanmei Gram</br>"; 
			}
		if ($bahanjun = (($dekomjun*52.5)*0.06)+($dekomjun*52.5*0.01*0.06)){ //Juni
			//echo "<br>Hasil Kebutuhan Bahan Juni : $bahanjun Gram</br>"; 
			}
		if ($bahanjul = (($dekomjul*52.5)*0.06)+($dekomjul*52.5*0.01*0.06)){ //Juli
			//echo "<br>Hasil Kebutuhan Bahan Juli : $bahanjul Gram</br>"; 
			}
		if ($bahanagu = (($dekomagu*52.5)*0.06)+($dekomagu*52.5*0.01*0.06)){ //Agustus
			//echo "<br>Hasil Kebutuhan Bahan Agustus : $bahanagu Gram</br>";
			}
		if ($bahansep = (($dekomsep*52.5)*0.06)+($dekomsep*52.5*0.01*0.06)){ //September
			//echo "<br>Hasil Kebutuhan Bahan September : $bahansep Gram</br>"; 
			}
		if ($bahanokt = (($dekomokt*52.5)*0.06)+($dekomokt*52.5*0.01*0.06)){ //Oktober
			//echo "<br>Hasil Kebutuhan Bahan Oktober : $bahanokt Gram</br>"; 
			}
		if ($bahannov = (($dekomnov*52.5)*0.06)+($dekomnov*52.5*0.01*0.06)){ //November
			//echo "<br>Hasil Kebutuhan Bahan November : $bahannov Gram</br>"; 
			}
		if ($bahandes = (($dekomdes*52.5)*0.06)+($dekomdes*52.5*0.01*0.06)){ //Desember
			//echo "<br>Hasil Kebutuhan Bahan Desember : $bahandes Gram</br>"; 
			}
?>