<?php
	$server = '127.0.0.1';
	$database = 'wonderso_wotp';
	$login = 'wonderso_php';
	$pswd = 'MysqlPswdForPhp16]';
	
	$connection = @mysqli_connect($server, $login, $pswd);
  mysqli_select_db($connection, $database);
  
  	$GLOBALS['pdo'] = new PDO("mysql:host=$server;dbname=$database", $login, $pswd);
  	
 ?>