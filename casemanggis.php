<?php
switch($_GET['page']){
	case'januari':if(!file_exists("manggisjan.php")) die ("file tidak ada");
	include "manggisjan.php";
	break;
	case'februari':if(!file_exists("manggisfeb.php")) die ("file tidak ada");
	include "manggisfeb.php";
	break;
	case'maret':if(!file_exists("manggismar.php")) die ("file tidak ada");
	include "manggismar.php";
	break;
	case'april':if(!file_exists("manggisapr.php")) die ("file tidak ada");
	include "manggisapr.php";
	break;
	case'mei':if(!file_exists("manggismei.php")) die ("file tidak ada");
	include "manggismei.php";
	break;
	case'juni':if(!file_exists("manggisjun.php")) die ("file tidak ada");
	include "manggisjun.php";
	break;
	case'juli':if(!file_exists("manggisjul.php")) die ("file tidak ada");
	include "manggisjul.php";
	break;
	case'agustus':if(!file_exists("manggisagu.php")) die ("file tidak ada");
	include "manggisagu.php";
	break;
	case'september':if(!file_exists("manggissep.php")) die ("file tidak ada");
	include "manggissep.php";
	break;
	case'oktober':if(!file_exists("manggisokt.php")) die ("file tidak ada");
	include "manggisokt.php";
	break;
	case'november':if(!file_exists("manggisnov.php")) die ("file tidak ada");
	include "manggisnov.php";
	break;
	case'desember':if(!file_exists("manggisdes.php")) die ("file tidak ada");
	include "manggisdes.php";
	break;
}

?>