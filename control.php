<?php 

session_start();

include 'mvc.php';
include 'settings.php';
include 'database.php';
include 'library.php';
date_default_timezone_set('America/Sao_Paulo');
$is_page=true;

$header["title"] = "Chá de Cozinha";

switch ($page) {	
	case 'home':

		break;
	
}

if($is_page){
	include 'core/header.php';
	include 'view/'.$page.'.php';
	include 'core/footer.php';
}
?>