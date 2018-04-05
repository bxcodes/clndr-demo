<?php

include_once("sql.php");

global $db;

header("Access-Control-Allow-Origin: *");

$action = isset($_POST['action']) ? $_POST['action'] : '';

session_start();

if($action == 'login'){
	
} else {
	
}




switch($action){
	case 'register': 
	$db->addUser($_POST['email'], $_POST['firstname'], $_POST['lastname']);
	break;
	case 'update': 
	$db->changePassword($_POST['email'], $_POST['password1'], $_POST['password2']);
	break;
	case 'personList':
	$list = $db->personList();
	echo json_encode($list);
	break;
	case 'login':
	$login = $db->login($_POST['email'], $_POST['password']);
	if($login==null) echo 'login failed';
	else {
		echo 'login successful';
		session_start();
		$_SESSION['name'] = 'aaa';
		$_SESSION['active'] = $login['active'];
		
		//echo json_encode($login);
	}
	break;
	case 'loginStatus':
	session_start();
	if(!isset($_SESSION['name'])) echo 'No login information';
	else echo "Welcome, ".$_SESSION['name'].", status: ".$_SESSION['active'];
	break;
	default:
	echo 'API Action Error';
	
}



?>