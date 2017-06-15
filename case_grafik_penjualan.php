<?php
switch($_GET['page']){
	case'januari':if(!file_exists("grafik_2014.php")) die ("file tidak ada");
	include "grafik_2014.php";
	break;
	case'februari':if(!file_exists("grafik_2015.php")) die ("file tidak ada");
	include "grafik_2015.php";
	break;
	case'maret':if(!file_exists("grafik_2016.php")) die ("file tidak ada");
	include "grafik_2016.php";
	break;
	case'april':if(!file_exists("grafik_2017.php")) die ("file tidak ada");
	include "grafik_2017.php";
	break;
	case'mei':if(!file_exists("grafik_2018.php")) die ("file tidak ada");
	include "grafik_2018.php";
	break;
	case'juni':if(!file_exists("grafik_2019.php")) die ("file tidak ada");
	include "grafik_2019.php";
	break;
	case'juli':if(!file_exists("grafik_2014.php")) die ("file tidak ada");
	include "grafik_2014.php";
	break;
	case'agustus':if(!file_exists("grafik_2015.php")) die ("file tidak ada");
	include "grafik_2015.php";
	break;
	case'september':if(!file_exists("grafik_2016.php")) die ("file tidak ada");
	include "grafik_2016.php";
	break;
	case'oktober':if(!file_exists("grafik_2017.php")) die ("file tidak ada");
	include "grafik_2017.php";
	break;
	case'november':if(!file_exists("grafik_2018.php")) die ("file tidak ada");
	include "grafik_2018.php";
	break;
	case'desember':if(!file_exists("grafik_2019.php")) die ("file tidak ada");
	include "grafik_2019.php";
	break;
}

?>