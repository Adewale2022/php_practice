<?php 
$sername ="localhost";
$username = "root";
$password = "";


try{
	$connect_pdo_db = new PDO("mysql:host=$sername", $username, $password);

	// assign exception error mode to the created database
	$connect_pdo_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//create database
	$create_db = "CREATE database adewale_db";

	// connect the exec() to the databse
	$connect_pdo_db->exec($create_db);
	echo "Database created successfully <br>";

} catch(PDOException $exception){
	echo $create_db . "<br>" .$exception->getMessage() ;
}

$connect_pdo_db = null;

 ?>