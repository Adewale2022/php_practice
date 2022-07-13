<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adewale_db";

try{
//connecting the sql database to pdo
$connect_sql_to_pdo = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
//creating the PDO exception attributes
$connect_sql_to_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// inserting data into the databse table
$insert_table_data = "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('Adeshola', 'Dauda', 'jamiudauda123@gmail.com')";

// using exec() because no results are returned
$connect_sql_to_pdo->exec($insert_table_data);
// get the last ID
$last_id = $connect_sql_to_pdo->lastInsertId();
echo "New record created succesfully <br>" . "Last Inserted ID is " . $last_id;

} catch(PDOException $exception){
	echo $insert_table_data . "<br>" . $exception->getMessage();

}

$connect_sql_to_pdo = null;





 ?>