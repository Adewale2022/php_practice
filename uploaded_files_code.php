
<?php  
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFIleType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// checking if the image file is an actual image or fake
if (isset($_POST["submit"])) {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if ($check !== false) {
		echo "File is an image- " . $check["mime"] . "" ;
		$uploadOk = 1;
	} else{
		echo "<b> File is not an image <b>";
		$uploadOk = 0;
	}
}


// checking if the file already exists
if (file_exists($target_file)) {
	echo "<br>Sorry, file already exist.";
	$uploadOk = 0;
}

// Restraining the uploaded file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
	echo "Sorry, your file is too large";
	$uploadOk = 0;
}

// Allowing certain file format for upload
if ($imageFIleType != "jpg" && $imageFIleType!= "png" && $imageFIleType != "jpeg" && $imageFIleType != "gif") {
	echo "Sorry, only JPG, JPEG, PNG and GIF files are allowed";
	$uploadOk = 0;
}

// checking if the upload is an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded";
} else{
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"] , $target_file)) {
		echo "The file " . htmlspecialchars($_FILES["fileToUpload"]["name"]) . "has been uploaded" ;
	} else{
		echo "Sorry, there was an error uploading your file";
	}
}


?>