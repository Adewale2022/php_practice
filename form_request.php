<!DOCTYPE html>
<html>
<head>
	<title>FORM PHP PRACTICE</title>
</head>
<body>

<div> <center>
	<form method="post" action="<?php 
	echo $_SERVER['PHP_SELF'];?>">
<p><p>

	<input class="ips" type="text" placeholder=
  "Surname" name="surname" required>

 
  <input class="ips" type="text" placeholder=
  "First Name" name="first_name" required>

  <input class="ips" type="text" placeholder=
  "Other name" name="other_name"><p>

  <label>Gender:</label>
  <label>
<input  type="radio" name="gender-choice" required>
Male
</label>

<label>
<input  type="radio" name="gender-choice" required>
Female
</label>

	<label>
<input  type="radio" name="gender-choice" required>
others
</label><p>
  

  <input class="ips" type="text" placeholder=
  "Age" name="age" required><p>


  <input class="ips" type="text" placeholder= 
  "Country e.g:Nigeria" name="country" required> <p>

  <input class="ips" type="text" placeholder=
  "State eg Lagos"name="state" required> <p>

  <input class="ips" type="text" placeholder=
  "Phone Number e.g:+234 80567####" name="phone_number" required> <p>
  
  <input class="ips" type="text" placeholder=
  "Email eg yourname@gmail.com" name="userEmail" required> <p>

  <textarea placeholder="Bio or About You" name="about_user" rows="5" cols="40"> </textarea><p>

<button type="submit">Submit</button>
</div>

	</form>
	</center>

<?php 
// Start of the php tag


// if the medium of transferring the data is secured--POST
if ($_SERVER["REQUEST_METHOD"]== "POST") {
	// coolect the data and output it on the screen
	$user_surname = $_REQUEST['surname'];
	$user_firstName = $_REQUEST['first_name'];
	$user_otherName = $_REQUEST['other_name'];
	$user_age = $_REQUEST = $_REQUEST['age'];
	$user_email_register = $_REQUEST['userEmail'];
	$user_country = $_REQUEST['country'];
	$user_state = $_REQUEST['state'];
	$user_phone_number = $_REQUEST['phone_number'];
	
	// if (empty($user_surname)) {
	// 	echo "Enter your Surname";
	// } elseif (empty($user_firstName)) {
	// 	# code...
	// 	echo "Enter your First Name";
	// } 
	//  else{
	// 	echo $userDetails;
	// 	echo $user_firstName;
	// }

	echo "<h3> User Data </h3> <p>";
	// echo "Full Name: " . $user_firstName . " " . $user_surname " " . $user_otherName;

	echo "Full Name: $user_surname $user_firstName $user_otherName <p>";
	echo "First Name: $user_firstName";
	echo "$Surname: $user_surname";
	echo "Middle Name: $user_otherName <p>";

	echo "Age: $user_age <p>";
	echo "Email: $user_email_register <p>";
	echo "Phone Number: $user_phone_number <p>";
	echo "Country: $user_country <p>";
	echo "State: $user_state <p>";


// switch ($_SERVER) {
// 	case '$user_surname':
// 	if (empty($user_firstName)) {
// 		echo "First Name can not be empty";
// 	}
// 		break;
// 	case '$user_firstName':
// 		# code...
// 		break;
// 	case '$user_otherName':
// 		# code...
// 		break;

// 	case '$user_age':
// 		# code...
// 		break;

// 	case '$user_email':
// 		# code...
// 		break;

// 	case '$user_country':
// 		# code...
// 		break;
	

// 	case '$user_state':
// 		# code...
// 		break;

// 	case '$user_phone_number':
// 		# code...
// 		break;
	

// 	default:
// 		# code...
// 	echo "<h3> User Data </h3> <p>";
// 	// echo "Full Name: " . $user_firstName . " " . $user_surname " " . $user_otherName;

// 	echo "Full Name: $user_surname $user_firstName $user_otherName <p>";
// 	echo "First Name: $user_firstName <p>";
// 	echo "$Surname: $user_surname <p>";
// 	echo "Middle Name: $user_otherName <p>";
// 	echo "Age: $user_age <p>";
// 	echo "Email: $user_email <p>";
// 	echo "$Phone Number: $user_phone_number <p>";
// 	echo "Country: $user_country <p>";
// 	echo "State: $user_state <p>";
// 		break;
// }
	
}







// End of the PHP tag
 ?>
</body>
</html>