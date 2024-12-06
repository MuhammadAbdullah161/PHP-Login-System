<?php 
 
	if(!defined('__CONFIG__')) {
		exit('You do not have a config file');
	}

	if(!isset($_SESSION)) {
		session_start();
	}

	include_once "classes/DB.php";
	include_once "classes/Filter.php";
	include_once "classes/Page.php";
	include_once "classes/User.php";

	$con = DB::getConnection();
?>
