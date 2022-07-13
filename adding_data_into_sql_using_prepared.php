<?php 

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "adewale_db";

try{
	$connect_sql_to_pdo = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
	$connect_sql_to_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$prepare_template = $connect_sql_to_pdo->prepare("INSERT INTO MyGuests(firstname, lastname, email) 
		VALUES(:firstname, :lastname, :email) ");
	$prepare_template->bindParam(':firstname', $firstname);
	$prepare_template-> bindParam(':lastname', $lastname);
	$prepare_template->bindParam(':email', $email);

	// adding data

	$firstname = "Olufemi";
	$lastname = "Gbenga";
	$email = "olufemigbenga@gmail.com";
	$prepare_template->execute();

	$firstname = "Olugbemi";
	$lastname = "Kabiru";
	$email = "olugbemikabiru@yahoo.com";
	$prepare_template->execute();

	$firstname = "Lekan";
	$lastname = "Leke";
	$email = "lekanakel@gmail.com";
	$prepare_template->execute();

	$firstname = "Fathia";
	$lastname = "Timothy";
	$email = "temitimothy@gmail.com";
	$prepare_template->execute();

	echo "New Record submitted successfully...";
} catch(PDOException $exception){
	echo "There was an error submitting data to the server <br>" .$exception->getMessage();
}

$connect_sql_to_pdo = null;


 ?>

