<?php
switch($_GET['page']){
	case'jaticina':if(!file_exists("tp_jaticina.php")) die ("file tidak ada");
	include "tp_jaticina.php";
	break;
	case'rosella':if(!file_exists("tp_rosella.php")) die ("file tidak ada");
	include "tp_rosella.php";
	break;
	case'sirsak':if(!file_exists("tp_sirsak.php")) die ("file tidak ada");
	include "tp_sirsak.php";
	break;
	case'manggis':if(!file_exists("tp_manggis.php")) die ("file tidak ada");
	include "tp_manggis.php";
	break;
	case'sarmut':if(!file_exists("tp_sarmut.php")) die ("file tidak ada");
	include "tp_sarmut.php";
	break;
}

?>