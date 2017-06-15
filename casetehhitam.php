<?php
switch($_GET['page']){
	case'januari':if(!file_exists("tehhitamjan.php")) die ("file tidak ada");
	include "tehhitamjan.php";
	break;
	case'februari':if(!file_exists("tehhitamfeb.php")) die ("file tidak ada");
	include "tehhitamfeb.php";
	break;
	case'maret':if(!file_exists("tehhitammar.php")) die ("file tidak ada");
	include "tehhitammar.php";
	break;
	case'april':if(!file_exists("tehhitamapr.php")) die ("file tidak ada");
	include "tehhitamapr.php";
	break;
	case'mei':if(!file_exists("tehhitammei.php")) die ("file tidak ada");
	include "tehhitammei.php";
	break;
	case'juni':if(!file_exists("tehhitamjun.php")) die ("file tidak ada");
	include "tehhitamjun.php";
	break;
	case'juli':if(!file_exists("tehhitamjul.php")) die ("file tidak ada");
	include "tehhitamjul.php";
	break;
	case'agustus':if(!file_exists("tehhitamagu.php")) die ("file tidak ada");
	include "tehhitamagu.php";
	break;
	case'september':if(!file_exists("tehhitamsep.php")) die ("file tidak ada");
	include "tehhitamsep.php";
	break;
	case'oktober':if(!file_exists("tehhitamokt.php")) die ("file tidak ada");
	include "tehhitamokt.php";
	break;
	case'november':if(!file_exists("tehhitamnov.php")) die ("file tidak ada");
	include "tehhitamnov.php";
	break;
	case'desember':if(!file_exists("tehhitamdes.php")) die ("file tidak ada");
	include "tehhitamdes.php";
	break;
}

?>