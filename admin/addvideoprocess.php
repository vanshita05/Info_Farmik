<?php
	require 'dbconnect.php';
	var_dump($_POST);
	
	
	$isactive=2;
	$dt=date("Y-m-d");
	$usertype=3;
	if($_FILES["filetoupload"]["name"]=="")
	{
		echo "No File Selected";
		//header("location:addgallery.php");
		//exit();
	}
	else
	{
		require 'videoupload.php';
	}
	$photo=$target_file;

	
	$qry="INSERT INTO `media`(`photos`, `doi`, `dou`, `Isactive`) VALUES ('".$photo."','".$dt."','".$dt."',$isactive)";
	
	$rs=mysqli_query($con,$qry);
	

	if ($rs) 
	{
		
		echo "Successfully inserted";
	}
	else
	{
		
		echo "Error in insertion";
	}
?>