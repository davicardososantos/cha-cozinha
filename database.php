<?php
/*============================================================*/
/*=======================BIBLIOTECA DAVI======================*/
/*============================================================*/


// -----------------------BANCO DE DADOS------------------------
function conectarBD($host,$dbname,$user,$password){	
	$dbh = new PDO("mysql:host=".$host.";dbname=$dbname",$user,$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}

?>