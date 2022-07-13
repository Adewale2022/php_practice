<!DOCTYPE html>
<html>
<head>
	<title>testing web sever</title>
</head>
<body>

<h3>Testing the HTML sweb server---- test 4</h3>

<?php 
# loops are used to execute the same code over and over again until a certain condition is meet...
echo "This system IP Address is: ". $_SERVER['SERVER_ADDR'];
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

echo "<br>";
echo "Testing the PHP webserver <br>";
echo rand(10, 100);
echo "<br>";

echo rand();
echo "<br>";
echo min(30, 35);
echo "<br>";
echo pi();
echo "<br>";

echo strlen("What is the length of this string");
echo "<br>";
echo round((6.89));
echo "<br>";

define("welcome", "You are welcome to the web development website <br>");
echo welcome;

echo 2**3;
echo "<br>";

$u = 10;
echo $u++;
echo "<br>";
echo ++$u;
echo "<br>";
echo $u--;
echo "<br>";
echo --$u;
echo "<br>";

class Car{
	public $model;
	public $color;

public function __construct ($model, $color){
	$this-> model = $model;
	$this -> color = $color;
}

public function message(){
	return "My car is a " . $this -> color . " " . $this -> model;
}

} // end of the Car class

// create a 
$myCar = new Car("Toyota", "Blue");
echo $myCar -> message();
echo "<br>";

$myCar = new Car ("Lexus", "Black");
echo $myCar-> message();
echo "<br>";

$myCar = new car("Adewale", "testComplete");
echo $myCar->message();
echo "<br>";

$ppa = "Thurdays";
switch ($ppa) {
	case 'Monday':
	if ($ppa) {
		"Today is Community Development Service (CDS)";
	} else{
		echo "You are reporting to Onwards College";
	}
		
		break;


	
	default:
		echo "The BIOMETRIC is scheduled for today";
		break;

}
echo "<br>";
$digit = 3;
while ( $digit< 10) {
	echo "The value is: $digit <br>";
	$digit++;

	if ($digit == 5) {
		echo "There is a breach";
		echo "<br>";
	}
}

for ($i=0; $i < 15; $i++) { 
	echo "<br>The number is: $i <br>";
}

$months = array('January', 'febrauary', 'June', 'July', 'August', 'October', 'December'  );
echo "The foreach result for printing the array: ";
foreach ($months as $key => $value) {
	// print the array on the screen...
	echo "$value";
	echo "The end of printing the foreach array loop<br>";
}

$daysOfWeek = array('Monday', 'Tuesday', 'Wednesday', 'Thurdays', 'Friday', 'Saturday', 'Sunday');
echo "$daysOfWeek[1] <br>";
$daysLenght =  count($daysOfWeek);
echo $daysLenght;
echo var_dump($daysOfWeek);


for ($y=0; $y < $daysLenght ; $y++) { 
	echo $daysOfWeek[$y];
	echo "<br>";
}

echo "<h3>TESTING SORTING OF AN ARRAY </h3>";
$names = array('Adewale', 'Tomi', 'Joseph', 'Chindera', 'Favour', 'Adeshola', 'ibunkun', 'Yekini', 'Abdullah' );
echo "The total number of names in the list is ". count($names);
echo "<br>";
sort($names);
#$descendNemsList = rsort($names);
// print the names in ascending order
echo "<h4>Printout the names in ascending order</h4>";
for ($eachName=0; $eachName < count($names) ; $eachName++) {	echo "<br> $names[$eachName]"; 
}

// echo "<h5>Printing out the names in descending order</h5><br>";
// for ($descendNames=0; $descendNames < count($names); $descendNames++) { 
// 	echo "<br> $names[$descendNames]";
// }



// end of php closing tag
 ?>

</body>
</html>