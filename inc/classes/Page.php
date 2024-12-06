<?php
 
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}

class Page {
	
	static function ForceLogin() {
		if(!isset($_SESSION['user_id'])) {
			header("Location: /php_login/login.php"); exit;
		}
	}

	static function ForceDashboard() {
		if(isset($_SESSION['user_id'])) {
			header("Location: /php_login/dashboard.php"); exit;
		}
	}
}

?>
