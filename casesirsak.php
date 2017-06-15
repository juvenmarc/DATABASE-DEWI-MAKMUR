<?php
switch($_GET['page']){
	case'januari':if(!file_exists("sirsakjan.php")) die ("file tidak ada");
	include "sirsakjan.php";
	break;
	case'februari':if(!file_exists("sirsakfeb.php")) die ("file tidak ada");
	include "sirsakfeb.php";
	break;
	case'maret':if(!file_exists("sirsakmar.php")) die ("file tidak ada");
	include "sirsakmar.php";
	break;
	case'april':if(!file_exists("sirsakapr.php")) die ("file tidak ada");
	include "sirsakapr.php";
	break;
	case'mei':if(!file_exists("sirsakmei.php")) die ("file tidak ada");
	include "sirsakmei.php";
	break;
	case'juni':if(!file_exists("sirsakjun.php")) die ("file tidak ada");
	include "sirsakjun.php";
	break;
	case'juli':if(!file_exists("sirsakjul.php")) die ("file tidak ada");
	include "sirsakjul.php";
	break;
	case'agustus':if(!file_exists("sirsakagu.php")) die ("file tidak ada");
	include "sirsakagu.php";
	break;
	case'september':if(!file_exists("sirsaksep.php")) die ("file tidak ada");
	include "sirsaksep.php";
	break;
	case'oktober':if(!file_exists("sirsakokt.php")) die ("file tidak ada");
	include "sirsakokt.php";
	break;
	case'november':if(!file_exists("sirsaknov.php")) die ("file tidak ada");
	include "sirsaknov.php";
	break;
	case'desember':if(!file_exists("sirsakdes.php")) die ("file tidak ada");
	include "sirsakdes.php";
	break;
}

?>