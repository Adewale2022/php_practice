<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>

<!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> "><center> -->
<!-- 	
Surname: <input type="text" name="surname" required><p>
First Name: <input type="text" name="first_name" required><p>
Other Name: <input type="text" name="other_name"><p> -->

<!-- Name: <input type="text" name="name" required>
<span class="error">* <?php echo $nameErr; ?></span><p>

Gender: <input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="others">Other
<span class="error">* <?php echo $genderErr; ?></span><p>

Username: <input type="text" name="username" required>
<span class="error">* <?php echo $usernameErr; ?></span><p>

Password: <input type="password" name="password" required>
<span class="error">* <?php echo $passwordErr; ?></span> <p>

Email: <input type="email" name="email" required>
<span class="error">* <?php echo $emailErr; ?></span><p>

Website: <input type="text" name="website">
<span class="error">* <?php echo $websiteErr; ?></span><p>

Contact Number: <input type="number" name="contact_number">
<span class="error">* <?php echo $contact_numberErr; ?></span><p><p><p>
<p>
Comment: <textarea name="comment" placeholder="Reasons(s) for application" rows="5"  cols="40"></textarea> <span class="error">* <?php echo $commentErr; ?></span><p><p>

<input type="submit" name="submit">	

</center></form> -->


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name" value="<?php echo $name;?>">

E-mail: <input type="text" name="email" value="<?php echo $email;?>">

Website: <input type="text" name="website" value="<?php echo $website;?>">

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other

</form>

<!-- <?php 

// $name = $gender = $username = $password = $email = $website = $contact_number = $comment = "";
// $nameErr = $genderErr = $usernameErr = $passwordErr = $emailErr = $websiteErr = $contact_numberErr = $commentErr = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
// 	if (empty($_POST["name"])) {
// 		$nameErr = "Name is required";
// 	}else{
// 		$name = test_input($_POST["name"]);
// 	}
	

// 	if (empty($_POST["gender"])) {
// 		$genderErr = "Gendet is required";
// 	}else{
// 		$gender = test_input($_POST["gender"]);
// 	}

// 	if (empty($_POST["username"])) {
// 		$usernameErr = "Username is required";
// 	}else{
// 		$username = test_input($_POST["username"]);
// 	}

// 	if (empty($_POST["password"])) {
// 		$passwordErr = "Password is required";
// 	}else{
// 		$password = test_input($_POST["password"]);
// 	}

// 	if (empty($_POST["email"])) {
// 		$emailErr = "Email is required";
// 	}else{
// 		$email = test_input($_POST["email"]);
// 	}

// 	if (empty($_POST["website"])) {
// 		$website = "";
// 	}else{
// 		$website = test_input($_POST["website"]);
// 	}

// 	if (empty($_POST["contact_number"])) {
// 		$contact_numberErr = "Contact Number is required";
// 	}else{
// 		$contact_number = test_input($_POST["contact_number"]);
// 	}


// 	if (empty($_POST["comment"])) {
// 		$comment = "";
// 	}else{
// 		$comment = test_input($_POST["comment"]);
// 	}

	
// }

// function test_input($data){
// 	$data = trim($data);
// 	$data = stripslashes($data);
// 	$data = htmlspecialchars($data);

// 	return $data;
// }


 ?> -->

 <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>



 <?php require "footer.php" ?>
</body>
</html>