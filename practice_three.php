<!DOCTYPE html>
<html>
<head>
	<title>PHP Form</title>
</head>
<body>

<?php 

echo("<h3> PLAY AROUND WITH DATE </h3>");
echo "Today is " .date("Y/m/d") . "<br>";
echo "Today date is " .date("Y.m.d") . "<br>";
echo "Today date is " .date("Y-m-d") . "<br>";
echo "Today date is " .date("l") . "<br>";
echo "Today date is " .date("l Y/m/d") . "<p>";

// echo "<h3> TIME FORMAT -- check the line of code for the time format characters </h3>";

// H- 24hours format
// h - 12 hours format
// i - minutes with leading zeros (00 to 59)
// s- seconds with leading zeros (00 to 59)
// a - lowercase Ante Meridiem and Post meridiem ( am or pm)


// echo "The time is " . date(h:i:sa);

// date_default_timezone_set("America/New_York");
// echo "The time is " . date(h:i:sa);

echo "<h4> Read a file mytext.txt using READFILE from the server </h4>";
readfile("mytext.txt");

echo "<h4> Read a file mytext.txt USING FOPEN from the server </h4>";
$myfile = fopen("moa.txt", "r") or die("unable to open file");
// open the file until EOF (End of file) is reached 
while (!feof($myfile)) {
	$moa = fgets($myfile);
	echo $moa;
}
//echo fread($myfile, filesize("mytext.txt"));
fclose($myfile);

echo "<h3>RESUME Read a single file from a file --- it reads a paragraph from the text</h3>";
$resume = fopen("resume.txt", "r") or die("File do not exists anymore");
echo fgets($resume);
fclose($resume);

echo "<h3>Reading the RESUME using the fgetc method with feof </h3>";
$readResume = fopen("resume.txt", "r") or die("Unable to open file");
while (!feof($readResume)) {
	echo fgetc($readResume);
	# code...
}
fclose($readResume);

echo "<h3>Reading the RESUME using the fgetc method ---- it reads character of the file</h3>";
$myResume = fopen("resume.txt", "r") or die("Unable to Open File");
echo fgetc($myResume);
fclose($myResume);

 ?>
 




<?php 
// adding the footer to this page
echo "<h3><center> AUTOMATIC COPYRIGHT YEAR</h3></center>";
require "footer.php"; ?>
</body>
</html>