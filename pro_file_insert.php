<?php
var_dump($_FILES);
$target_dir="upload/";
$target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"]))
{
	if($_FILES["fileToUpload"]["name"]=="")
	{
		echo "NO file selected";
		exit();
	}
	$check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check!==false)
	{
		var_dump($check);
		echo "file is an image-".$check["mime"].".";
		$uploadOk=1;
	}
	else{
		echo "File is no an image";
		$uploadOk=0;
	}
}
if(file_exists($target_file))
{
	echo "sorry, file already exists";
	$uploadOk=0;
}
if($_FILES["fileToUpload"]["size"]>5000000)
{
	echo "sorry, your file is too large";
	$uploadOk=0;
}
if($imageFileType!="jpg" && $imageFileType!="png" && $imageFileType!="jpeg" && $imageFileType!="gif")
{
	echo "sorry, only image files are allowed check extension of file";
	$uploadOk=0;
}
if($uploadOk==0)
{
	echo "sorry, your file was not uploaded";
}
else{
	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
	{
		echo "THe file".basename($_FILES["fileToUpload"]["name"])."has been uploaded";
	}
	else
	{
		echo "Sorry, there was an error uploading your file";
	}
}
?>	