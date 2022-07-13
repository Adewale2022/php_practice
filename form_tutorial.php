<!DOCTYPE html>
<html>
<head>
	<title>FORM TUTORIAL</title>
</head>
<body>

	<div> <center>
	<form method="post" action="form_tutorial.php">
<p><p>

	<input class="ips" type="text" placeholder=
  "Surname" name="surname" required>

 
  <input class="ips" type="text" placeholder=
  "First Name" name="first_name" required>

  <input class="ips" type="text" placeholder=
  "Other name" name="other_name"><p>

  <label>Gender:</label>
  <label>
<input  type="radio" name="gender-choice" value="male" required>
Male
</label>

<label>
<input  type="radio" name="gender-choice" value="female" required>
Female
</label>

	<label>
<input  type="radio" name="gender-choice" value="no_gender" required>
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

  <textarea placeholder="Bio or About You" name="about_user" rows="5", cols="40"> </textarea><p>

<button type="submit">Submit</button>
</div>

	</form>
	</center>

<h3>USER DATA</h3>
 <!-- to print out the user info -->

	Surname: <?php echo $_POST["surname"]; ?> <br>
	First Name: <?php echo $_POST["first_name"]; ?><br>
	Middle Name: <?php echo $_POST["other_name"] ?><br>
	Email: <?php echo $_POST["userEmail"]; ?><br>
	Gender: <?php echo $_POST["gender-choice"]; ?> <br>
	Age: <?php echo $_POST["age"]; ?><br>
	Country:<?php echo $_POST["country"]; ?><br>
	State: <?php echo $_POST["state"] ?><br>
	About: <?php echo $_POST["about_user"] ?><p>

	<?php 


	 ?>

</body>
</html>