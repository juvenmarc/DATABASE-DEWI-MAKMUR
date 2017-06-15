<?php
switch($_GET['page']){
	case'januari':if(!file_exists("jaticinajan.php")) die ("file tidak ada");
	include "jaticinajan.php";
	break;
	case'februari':if(!file_exists("jaticinafeb.php")) die ("file tidak ada");
	include "jaticinafeb.php";
	break;
	case'maret':if(!file_exists("jaticinamar.php")) die ("file tidak ada");
	include "jaticinamar.php";
	break;
	case'april':if(!file_exists("jaticinaapr.php")) die ("file tidak ada");
	include "jaticinaapr.php";
	break;
	case'mei':if(!file_exists("jaticinamei.php")) die ("file tidak ada");
	include "jaticinamei.php";
	break;
	case'juni':if(!file_exists("jaticinajun.php")) die ("file tidak ada");
	include "jaticinajun.php";
	break;
	case'juli':if(!file_exists("jaticinajul.php")) die ("file tidak ada");
	include "jaticinajul.php";
	break;
	case'agustus':if(!file_exists("jaticinaagu.php")) die ("file tidak ada");
	include "jaticinaagu.php";
	break;
	case'september':if(!file_exists("jaticinasep.php")) die ("file tidak ada");
	include "jaticinasep.php";
	break;
	case'oktober':if(!file_exists("jaticinaokt.php")) die ("file tidak ada");
	include "jaticinaokt.php";
	break;
	case'november':if(!file_exists("jaticinanov.php")) die ("file tidak ada");
	include "jaticinanov.php";
	break;
	case'desember':if(!file_exists("jaticinades.php")) die ("file tidak ada");
	include "jaticinades.php";
	break;
}

?>