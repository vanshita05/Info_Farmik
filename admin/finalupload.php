<?php
var_dump($_POST);
var_dump($_FILES);
//exit();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//Check if image file is a actual image or fake image
if (isset($_POST["submit"])) 
{
	if ($_FILES["fileToupload"]["name"]=="")
	{
		echo "No File Selected";
		exit();
	}
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if ($check !== false) 
	{
		var_dump($check);
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	}
	else
	{
		echo "File is not an image.";
		$uploadOk = 0;
	}
}
// Check if file already exists
 if (file_exists($target_file)) 
 	{
 		echo "Sorry, file already exists.";
 		$uploadOk = 0;
 	}
 // Check file size
 if ($_FILES["fileToUpload"]["size"] > 500000)
	{ // KB
 		echo "Sorry, your file is too large";
 		$uploadOk = 0;
 	}
// Allow certain file formats
 if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" 
 && $imageFileType != "gif") 
	{
		echo "Sorry, Only png, jpg, jpeg, & gif files are allowed.";
		$uploadOk = 0;
	}
//check if uploadOK is set to 0 by an error
 if($uploadOk == 0)
 	{
 		echo "Sorry, your File is not uploaded.";
 		// if everything is OK, try to upload file
 	}
 else
 	{
 		if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
 		{
 			echo "The file ". basename($_FILES["fileToUpload"]["name"]). "has been Uploaded.";
 		}
 		else
 		{
 			echo "Sorry, There was an Error uploading your file";
 		}
 	}
 ?>