<?php
session_start();
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');
header("Access-Control-Expose-Headers: Set-Cookie");
header('Access-Control-Allow-Credentials: true');


$action = isset($_POST['action']) ? $_POST['action'] : '';



echo session_id().'<BR>';
echo $_SESSION['test'];

switch($action){
	case 'set':
	$_SESSION['test'] = 'test';
	echo 'done';
	break;
	case 'get':
	echo $_SESSION['test'];
	break;
	case 'reset':
	session_unset();
	session_destroy();
	break;
	default:
	echo 'API Action Error';
	
}



?>