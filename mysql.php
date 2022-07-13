<?php
$servername = "localhost";
$username = "username"; //root
$password = "password";
$dbName = "DB";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


?>

<?php 


var_dump(defined(PDO::MYSQL_ATTR_LOCAL_INFILE)); // mysql
var_dump(PDO::FB_ATTR_TIME_FORMAT); // firebird
 ?>