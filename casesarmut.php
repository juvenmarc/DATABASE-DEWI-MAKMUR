<?php
switch($_GET['page']){
	case'januari':if(!file_exists("sarmutjan.php")) die ("file tidak ada");
	include "sarmutjan.php";
	break;
	case'februari':if(!file_exists("sarmutfeb.php")) die ("file tidak ada");
	include "sarmutfeb.php";
	break;
	case'maret':if(!file_exists("sarmutmar.php")) die ("file tidak ada");
	include "sarmutmar.php";
	break;
	case'april':if(!file_exists("sarmutapr.php")) die ("file tidak ada");
	include "sarmutapr.php";
	break;
	case'mei':if(!file_exists("sarmutmei.php")) die ("file tidak ada");
	include "sarmutmei.php";
	break;
	case'juni':if(!file_exists("sarmutjun.php")) die ("file tidak ada");
	include "sarmutjun.php";
	break;
	case'juli':if(!file_exists("sarmutjul.php")) die ("file tidak ada");
	include "sarmutjul.php";
	break;
	case'agustus':if(!file_exists("sarmutagu.php")) die ("file tidak ada");
	include "sarmutagu.php";
	break;
	case'september':if(!file_exists("sarmutsep.php")) die ("file tidak ada");
	include "sarmutsep.php";
	break;
	case'oktober':if(!file_exists("sarmutokt.php")) die ("file tidak ada");
	include "sarmutokt.php";
	break;
	case'november':if(!file_exists("sarmutnov.php")) die ("file tidak ada");
	include "sarmutnov.php";
	break;
	case'desember':if(!file_exists("sarmutdes.php")) die ("file tidak ada");
	include "sarmutdes.php";
	break;
}

?>