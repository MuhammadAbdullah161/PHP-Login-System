<?php

// If there is no constant defined called __CONFIG__, do not load this file 
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}

class Filter {
	
	public static function String( $string, $html = false ) {
		if (!$html) {
			$string = strip_tags($string);
			$string = preg_replace('/[\x00-\x1F\x7F]/', '', $string);
		} else {
			$string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
		}
		return $string;
	}

	public static function Name($string) {
		$string = strip_tags($string);
		$string = preg_replace('/[^a-zA-Z\s\-]/', '', $string); 
		return trim($string);
	}
	
	public static function Email( $email ) {
		return filter_var( $email , FILTER_SANITIZE_EMAIL);
	}
	
	public static function URL( $url ) {
		return filter_var( $url , FILTER_SANITIZE_URL);
	}
	
	public static function Int( $integer ) {
		return (int) $integer = filter_var( $integer , FILTER_SANITIZE_NUMBER_INT);
	}
}
?>