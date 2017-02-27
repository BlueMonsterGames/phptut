<?php 

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname=todo;host=127.0.0.1','root','roshan8655');

// Handle This Some Other Wayy

if(!isset($_SESSION['user_id'])){
	die('You Are Not Signed In');
 }

?>