<?php
	ob_start();
	session_start();
	define('FOLDER_NAME','/VUSHAL ASSIGNEMENT');
	define('SITE_URL', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].FOLDER_NAME); //https://localhost/Vushal Assignment/
	define('PROJECT_PATH',$_SERVER['DOCUMENT_ROOT'].'/login'); // project login path 
	
	define('Setting',SITE_URL.'/admin/user.php');
	define('Dash',SITE_URL.'/admin/dashboard.php');
	define('ASSETS', SITE_URL.'/assets'); // project assets directory

	define('PROJECT', 'Assignment 02'); // project Name
	define('TITLE', '<title>Password Strength & Captcha</title>'); // project title or headers

	define('DB_HOST', 'localhost'); // Database hostname 
	define('DB_NAME', 'login_assignment'); // Database name 
	define('DB_USER', 'root');// Database Username
	define('DB_PASSWORD', ''); // Database Password

	

	define('ERROR_LOG', $_SERVER['DOCUMENT_ROOT'].FOLDER_NAME.'/error/error.log'); // error log file all the error will kept in error log file. 