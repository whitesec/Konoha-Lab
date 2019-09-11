<?php 
define("host", "localhost");
define("user", "root"); 
define("password", ""); 
define("dbname", "konoha_lab");
	try{
		$con = new PDO("mysql:host=".host.";dbname=".dbname, user, password);
		return $con;
	}catch(PDOException $e){
		return $e;
	}
?>