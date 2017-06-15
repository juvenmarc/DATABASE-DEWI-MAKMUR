<?php
switch($_GET['page']){
	case'januari':if(!file_exists("rosellajan.php")) die ("file tidak ada");
	include "rosellajan.php";
	break;
	case'februari':if(!file_exists("rosellafeb.php")) die ("file tidak ada");
	include "rosellafeb.php";
	break;
	case'maret':if(!file_exists("rosellamar.php")) die ("file tidak ada");
	include "rosellamar.php";
	break;
	case'april':if(!file_exists("rosellaapr.php")) die ("file tidak ada");
	include "rosellaapr.php";
	break;
	case'mei':if(!file_exists("rosellamei.php")) die ("file tidak ada");
	include "rosellamei.php";
	break;
	case'juni':if(!file_exists("rosellajun.php")) die ("file tidak ada");
	include "rosellajun.php";
	break;
	case'juli':if(!file_exists("rosellajul.php")) die ("file tidak ada");
	include "rosellajul.php";
	break;
	case'agustus':if(!file_exists("rosellaagu.php")) die ("file tidak ada");
	include "rosellaagu.php";
	break;
	case'september':if(!file_exists("rosellasep.php")) die ("file tidak ada");
	include "rosellasep.php";
	break;
	case'oktober':if(!file_exists("rosellaokt.php")) die ("file tidak ada");
	include "rosellaokt.php";
	break;
	case'november':if(!file_exists("rosellanov.php")) die ("file tidak ada");
	include "rosellanov.php";
	break;
	case'desember':if(!file_exists("rosellades.php")) die ("file tidak ada");
	include "rosellades.php";
	break;
}

?>