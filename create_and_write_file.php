<!DOCTYPE html>
<html>
<head>
	<title>CREATE and WRITE FILE</title>
</head>
<body>

	 using the fopen function on a file that does not exists will create it <p>

	 	The fwrite() function is used to write a file--- The first parameter contains the name of the file to writte and <br>
	 	The second paramenter contains is the string to be written <p>

	 	Appending "a" will be append the text to the end of the txt file.

	<?php 


	$myFIle = fopen("newfile.txt", "w") or die("File do not exists");
	$theText = "Writing text in the file created \n Author: Adewale <p>";
	fwrite($myFIle, $theText);
	fclose($myFIle);

$file = fopen("newfile.txt", "w") or die("Unable to open file");
$secondText = "Overwritting the exisitng file ";
fwrite($file, $secondText);
fclose($file);

$appendFile = fopen("newfile.txt", "a") or die("Unable to open a file");
$changeText = "Appending the text <br>";
fwrite( $appendFile, $changeText);
fclose($appendFile);


	 ?>
<?php require "footer.php"  ?>
</body>
</html>