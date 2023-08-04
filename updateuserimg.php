<?php
	session_start();
	$id = session_id('id');
	require 'dbconnect.php';
	var_dump($_POST);
	if (!isset($_POST['btn'])) 
	{
		header("location:userprofile.php");
		exit();
	}

	
	
		require 'ImageUpload.php';
	
	$profile=$target_file;
	$qry="UPDATE user_tbl  SET profile_pic='".$profile."' WHERE id='".$id."'";
	echo $qry;
	//exit();

	$rs=mysqli_query($con,$qry);
	if($rs)
	{
		echo "Updated";
		header("location:userprofile.php");
		exit();
	}
	else
	{
		header("location:userprofile.php");
		
		echo "Update error";
	}
?>