<?php 

$servername = "localhost";
$username ="root";
$password = "";
$dbname = "adewale_db";


try{

$connet_pdo_to_mysql = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
$connet_pdo_to_mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// creating the database table header
$create_db_table = "CREATE TABLE MyGuests(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

//create database 
//$create_db = "CREATE DATABASE adewale_db";

// create exec() since no result are returned
$connet_pdo_to_mysql->exec($create_db_table);
echo "The database table, MyGuests was created successfully <p>";

} catch(PDOException $exception) {
	echo $create_db_table . "<br>" . $exception->getMessage();

}

$connet_pdo_to_mysql = null;



 ?>