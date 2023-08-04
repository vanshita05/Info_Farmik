<?php
session_start();
$id= session_id('eid');
	require 'dbconnect.php';
	var_dump($_POST);
	if (!isset($_POST['btn'])) 
	{
		header("location:exprofilemng.php");
		exit();
	}
$id1= $_POST['id'];
	
	
		require 'ImageUpload.php';
	
	$profile=$target_file;
	$qry="UPDATE expert_tbl  SET profile_pic='".$profile."' WHERE `eid`='".$id1."'";
	echo $qry;
	//exit();

	$rs=mysqli_query($con,$qry);
	if($rs)
	{
		echo "Updated";
		header("location:exprofilemng.php");
		exit();
	}
	else
	{
		("location:exprofilemng.php");
		echo "Update error";
	}
?>