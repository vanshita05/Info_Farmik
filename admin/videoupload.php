<?php
	var_dump($_POST);
	var_dump($_FILES);
	//exit();
	
	$target_dir="images/";
	$target_file=$target_dir.basename($_FILES["filetoupload"]["name"]);
	$uploadOk=1;
	$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	//Check if image file is actual(real) file or a fake image file
	if(isset($_POST["submit"]))
	{
		if($_FILES["filetoupload"]["name"]=="")
		{
			echo "<br><br> No File Selected";
			exit();
		}
		$check=getimagesize($_FILES["filetoupload"]["tmp_name"]);
		if($check!==false)
		{
			var_dump($check);
			echo "<br><br> File is an image - " .$check["mime"]. ".";
			$uploadOk=1;
		}
		else
		{
			echo "<br> File is not an image";
			$uploadOk=0;
		}
	}
	
	//Check if file already exists
	if(file_exists($target_file))
	{
		echo "<br> Sorry file already exists";
		$uploadOk=0;
	}
	
	//Check file size
	if($_FILES["filetoupload"]["size"]>50000000000) //KB
	{
		echo "<br> Sorry, your file is too large";
		$uploadOk=0;
	}
	
	//Allowing only certain file formats
	if($imageFileType!="mp4" && $imageFileType!="mkv")
	{
		echo "<br> Sorry only mp4,mkb,mpg and m4v files are allowed";
		$uploadOk=0;
	}
	
	//Check if $uploadOk is set to 0 by any error_get_last
	if($uploadOk==0)
	{
		echo "<br> Sorry your file was not uploaded";
	}
	//If everything is ok try to upload the file
	else
	{
		if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file))
		{
			echo "<br> The file "."'".basename($_FILES["filetoupload"]["name"])."'"." has been uploaded successfully.";
		}
		else
		{
			echo "<br> Sorry there was an error uploading your file";
		}
	}
?>
<html>
	<head>
		<title>FILE FINAL UPLOAD</title>
	</head>
</html>	