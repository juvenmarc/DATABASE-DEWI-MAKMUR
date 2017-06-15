<?php
switch($_GET['page']){
	case'januari':if(!file_exists("pegaganjan.php")) die ("file tidak ada");
	include "pegaganjan.php";
	break;
	case'februari':if(!file_exists("pegaganfeb.php")) die ("file tidak ada");
	include "pegaganfeb.php";
	break;
	case'maret':if(!file_exists("pegaganmar.php")) die ("file tidak ada");
	include "pegaganmar.php";
	break;
	case'april':if(!file_exists("pegaganapr.php")) die ("file tidak ada");
	include "pegaganapr.php";
	break;
	case'mei':if(!file_exists("pegaganmei.php")) die ("file tidak ada");
	include "pegaganmei.php";
	break;
	case'juni':if(!file_exists("pegaganjun.php")) die ("file tidak ada");
	include "pegaganjun.php";
	break;
	case'juli':if(!file_exists("pegaganjul.php")) die ("file tidak ada");
	include "pegaganjul.php";
	break;
	case'agustus':if(!file_exists("pegaganagu.php")) die ("file tidak ada");
	include "pegaganagu.php";
	break;
	case'september':if(!file_exists("pegagansep.php")) die ("file tidak ada");
	include "pegagansep.php";
	break;
	case'oktober':if(!file_exists("pegaganokt.php")) die ("file tidak ada");
	include "pegaganokt.php";
	break;
	case'november':if(!file_exists("pegagannov.php")) die ("file tidak ada");
	include "pegagannov.php";
	break;
	case'desember':if(!file_exists("pegagandes.php")) die ("file tidak ada");
	include "pegagandes.php";
	break;
}

?>