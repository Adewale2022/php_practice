<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adewale_db";


try{
	$connect_db_to_pdo = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
	$connect_db_to_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// // begin the transaction --- adding of multiple data to the database and the get the data entry ID
	$connect_db_to_pdo->beginTransaction();
	// adding the key and value of the data to the database
	$connect_db_to_pdo->exec("INSERT INTO MyGuests(firstname, lastname, email) 
		VALUES('Olawale', 'Joseph', 'josepnnyscibada@gmail.com') ");
	$connect_db_to_pdo->lastInsertId();
	$connect_db_to_pdo->exec("INSERT INTO MyGuests(firstname, lastname, email ) 
		VALUES('Jamiu', 'Adeola', 'jamiuramot@yahoo.com' ) ");
	$connect_db_to_pdo->lastInsertId();
	$connect_db_to_pdo->exec("INSERT INTO MyGuests(firstname, lastname, email)
		VALUES ('Ohiza', 'Mary', 'ohiza.mary@st.futminna.edu.ng') ");
	$connect_db_to_pdo->lastInsertId();
	$connect_db_to_pdo->exec("INSERT INTO MyGuests(firstname, lastname, email) 
		VALUES('James', 'Oluwatoyin', 'faromikitoyin@gmail.com')  ");
	$connect_db_to_pdo->lastInsertId();

	// comminting the changes
	$connect_db_to_pdo->commit();
	echo "New Records created successfully... <br>";


}catch(PDOException $exception){

	// if creating records fails then roll-back
	$connect_db_to_pdo->rollback();
	echo "There was an error creating the records " . "<br>" .$exception->getMessage();


}

// assigning the default value of the pdo
$connect_db_to_pdo = null;

 ?>