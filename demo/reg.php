<?php

include_once("sql.php");

global $db;

header("Access-Control-Allow-Origin: *");

$action = isset($_POST['action']) ? $_POST['action'] : '';

switch($action){
	case 'register': 
	$db->addUser($_POST['email'], $_POST['firstname'], $_POST['lastname']);
	break;
	default:
	echo 'API Action Error';
	
}



?>