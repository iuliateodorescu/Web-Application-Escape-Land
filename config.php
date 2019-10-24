<?php
	include 'languages.php';
	session_start();
	
	if( !isset($_SESSION['local']) )
		$_SESSION['local'] = 'en';
	else
		if( isset($_GET['local']) && $_SESSION['local']!=$_GET['local'] && !empty($_GET['local']) )
		if( $_GET['local'] == 'en' )
			$_SESSION['local'] = 'en';
		else
			$_SESSION['local'] = 'ro';
	
	$language = $_SESSION['local'];
	//$defaultLanguage = 'en';
    //$requested = $_GET['local'];
    //$language = isset($lang[$requested]) ? $requested : $defaultLanguage;

?>