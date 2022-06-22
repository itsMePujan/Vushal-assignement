<?php
	ob_start();
	session_start();
	define('SITE_URL', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/login'); //https://localhost
	define('PROJECT_PATH',$_SERVER['DOCUMENT_ROOT'].'/login'); // project login path 

	
	define('ASSETS', SITE_URL.'/assets'); // project assets directory

	define('PROJECT', 'Assignment 02'); // project Name
	define('TITLE', '<title>Password Strength & Captcha</title>'); // project title or headers

	define('DB_HOST', 'localhost'); // Database hostname 
	define('DB_NAME', 'login_assignment'); // Database name 
	define('DB_USER', 'root');// Database Username
	define('DB_PASSWORD', ''); // Database Password

	define('FOLDER_NAME','/VUSHAL ASSIGNEMENT');