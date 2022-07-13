<!DOCTYPE html>
<html>
<head>
	<title>Submitted Form</title>
</head>
<body>

Welcome <?php echo $_POST["username"];
echo "<br>";
echo "Full Name: " $_POST["surname"] .$_POST["first_name"] . $_POST["other_name"];
echo "<br> Email: " .$_POST["email"];
echo "Website: " . $_POST["Website"];
echo "Contact Number: " .$_POST["contact_number"];
echo "Reasons for Application: " . $_POST["comment"];

 ?>

<?php  



?>



<?php require "footer.php" ?>
</body>
</html>