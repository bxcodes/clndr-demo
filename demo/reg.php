<?php

include_once("sql.php");

global $db;

$db->addUser($_POST['email'], $_POST['firstname'], $_POST['lastname']);

?>