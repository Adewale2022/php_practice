<?php 

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>ID</th> <th>Firstname</th> <th>Lastname</th> </tr>";

/**
 * 
 */
class TableRows extends RecursiveIteratorIterator {

	
	function __construct($iterator) {
		parent::__construct($iterator, self::LEAVES_ONLY);
	}

	function current(){
		return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
	}

	function beginChildren(){
		echo "<tr>";
	}

	function endChildren(){
		echo "</tr> " ."\n" ;
	}

}

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "adewale_db";

try{
	$connect_sql_to_pdo = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
	$connect_sql_to_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$prepared_template = $connect_sql_to_pdo->prepare("SELECT id, firstname, lastname FROM MyGuests");
	$prepared_template->execute();

	// set the resulting array to  associative
	$result = $prepared_template->setFetchMode(PDO::FETCH_ASSOC);
	foreach (new TableRows(new RecursiveArrayIterator($prepared_template->fetchAll()))  as $key => $value) {
		echo $value;
	}

	} catch(PDOException $exception){
		echo "Error <br>" .$exception->getMessage();
	}

	$connect_sql_to_pdo = null;
	echo "</table>";

 ?>