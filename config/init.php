<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/VUSHAL ASSIGNEMENT'.'/config/config.php'; // Project configurations file
	require_once $_SERVER['DOCUMENT_ROOT'].FOLDER_NAME.'/config/functions.php'; // functions used in these project. 
	
	  spl_autoload_register(function($class_name){
        require_once $_SERVER['DOCUMENT_ROOT'].'/VUSHAL ASSIGNEMENT'.'/class/'.$class_name.'.php';
    });
