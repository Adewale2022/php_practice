<!DOCTYPE html>
<html>
<head>
	<style>
.error {color: #FF0000;}
</style>
	<title>Form Validation</title>
</head>
<body>


<div> <center>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<p><p>

	<input class="ips" type="text" placeholder=
  "Surname" name="surname" required value="<?php echo $surname; ?>">

 
  <input class="ips" type="text" placeholder=
  "First Name" name="first_name" required value="<?php echo $first_name; ?>">

  <input class="ips" type="text" placeholder=
  "Other name" name="other_name" value="<?php echo $other_name; ?>"><p>

  

  <label>Gender:</label>
  <label><input  type="radio" name="gender" <?php if (isset($gender) && $gender=="male") {
  	# code...
  	echo "checked";
  } ?> value="male" required >Male</label>

<label><input  type="radio" name="gender" value="female" <?php if (isset($gender) && $gender ="female" ) {
	# code...
	echo "checked";
} ?> required>Female</label>

<label><input  type="radio" name="gender" value="no_gender"  <?php if (isset($gender) && $gender ="others" ) {
	# code...
	echo "checked";
} ?> required >others</label><p>
  

 
  <input class="ips" type="number" placeholder=
  "Age" name="age" required value="<?php echo $age; ?>">

  <input class="ips" type="number" placeholder=
  "Contact Number" name="phone_number" required value="<?php echo $phone_number; ?>"> <p>


  <input class="ips" type="text" placeholder= 
  "Country e.g:Nigeria" name="country" required value="<?php echo $country; ?>"> 

  <input class="ips" type="text" placeholder=
  "State eg Lagos"name="state" required value="<?php echo $state; ?>"> <p>

  
  
  <input class="ips" type="text" placeholder=
  "Email eg yourname@gmail.com" name="userEmail" required value="<?php echo $userEmail; ?>"> 

<input type="text" name="website" placeholder="Your Website URL" value="<?php echo $website; ?>"> <p>

  <textarea placeholder="About You" name="about_user" rows="5", cols="40" > <?php echo $about_user; ?>  </textarea><p>

<button type="submit">Submit</button>
</div>

	</form>
	</center>


<?php 
	// START of the PHP TAG

// declaring the variables
	$surname = $first_name= $other_name = $userEmail = $age = $country = $state = $about_user = $gender = $phone_number = $website  = "";

	$surnameError = $first_nameError = $other_nameError = $userEmailError = $ageError = $countryError = $stateError = $about_userError = $genderError = $phone_numberError  = $websiteError = "";



	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["surname"])) {
			$surnameError = "Surname can not be empty";
		} else{
			$surname = validate_user_input($_POST["surname"]);
			// validate that the user input contains letters only
			if (!preg_match("/^[a-zA-Z-' ]*$/", $surname)) {
				$surnameError = "Surname can only contains letters and white space";
			}
		}



		if (empty($_POST["first_name"])) {
			$first_nameError = "Enter your First Name";
		} else{
			$first_name = validate_user_input($_POST["first_name"]);
			// validate that the user input contains letters only
			if (!preg_match("/^[a-zA-Z-' ]*$/", $first_name)) {
				$first_nameError = "Name can only contains letters and white space"
			}
		}
		
		if (empty($_POST["other_name"])) {
			$other_nameError = "Enter your middle name";
		} else{
			$other_name = validate_user_input($_POST["other_name"]);
			// validate that the user input contains letters only
			if (!preg_match("/^[a-zA-Z-' ]*$/", $other_name)) {
				$other_nameError = "Names can only contains letters and white space"
			}
		}
		
		if (empty($_POST["userEmail"])) {
			$userEmailError = "Email is required";
		} else{
			$userEmail = validate_user_input($_POST["userEmail"]);
			// validate the user email
			if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
				$userEmailError = "Invalid email format";
			}
		}

		if (empty($_POST["age"])) {
			$ageError = "Enter your Age";
		} else{
			$age = validate_user_input($_POST["age"]);
			// validate that the user input is valid
			// if (!preg_match("0123456789", $age)) {
			// 	$ageError = "Surname can only contains letters and white space"
			// }
			// // if (isset($_POST["age"]) && is_numeric($_POST["age"])) {
			// // 	$age = validate_user_input($_POST["age"]);
			// // }
			// if (is_numeric($_POST["age"])) {
			// 	$age = validate_user_input($_POST["age"]);
			// }

			// if (strlen($age) < 2) {
			// 	$ageError = "You are less than 10years old";
			// } else{
			// 	$ageError = "Please, enter only numbers";
			// }

		}
		
		if (empty($_POST["country"])) {
			$countryError = "Enter your country of residence";
		} else{
			$country = validate_user_input($_POST["country"]);
		}
		
		if (empty($_POST["state"])) {
			$stateError = "Enter your state";
		} else{
			$state = validate_user_input($_POST["state"]);
		}

		if (empty($_POST)) {
			$about_userError = "Enter a brief description about. ";
		} else{

			$about_user = validate_user_input($_POST["about_user"]);
		}

		if (empty($_POST["website"])) {
			$websiteError = "";
		} else{
			$website = validate_user_input($_POST["website"]);
			// check if the URL syntax is valid
			if (!prag_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
				$websiteError = "Invalid URL";
			}
		}

		if (empty($_POST["phone_number"])) {
			$phone_numberError = "Enter you valid mobile or whatsApp number";
		} else{
			$phone_number = validate_user_input($_POST["phone_number"]);
		}
		
		if (empty($_POST["gender"])) {
			$genderError = "Gender is required";
		} else{
			$gender = validate_user_input($_POST["gender"]);
		}
		
	}

function validate_user_input($userInput){
	$userInput = trim($userInput);
	$userInput = stripslashes($userInput);
	$userInput = htmlspecialchars($userInput);

	return $userInput;

}


echo "<h2>Your Input:</h2>";
echo "<br>";
echo "Surname" . $surname;
echo "<br>";
echo "First Name: " . $first_name;
echo "<br>";
echo "Middle Name: " . $other_name; 
echo $gender;<p>
echo "Email: " . $email;
echo "<br>";
echo $website;
echo "<br>";
echo "Contact Number: " . $phone_number; <p>
echo $about_user;
echo "<br>";



// End of the PHP TAG
	?>






	
	



</body>
</html>