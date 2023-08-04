<?php
	
	require "dbconnect.php";
	

	
	if (!isset($_POST['submit'])) 
	{
		header("location:registration.php");
		exit();
	}

	$fn = $_POST['txt_fn'];
	$ln = $_POST['txt_ln'];
	$dob = $_POST['txt_bd'];
	$email = $_POST['temail'];
	$mobileno = $_POST['tphone'];
	$spe = $_POST['spe'];
	$qua = $_POST['qua'];
	$uni = $_POST['uni'];
	
	$ex = $_POST['ex'];
	$gen = $_POST['gender'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$add = $_POST['address'];
	$pass = $_POST['txt_pass'];
	$cpass = $_POST['txt_cpass'];
	;
	$usertype=2;
	$isactive = 2;
	$dt = date('Y-m-d');
	if($_FILES["fileToUpload"]["name"]=="")
	{
		echo "No File Selected";
		
	}
	else
	{
		require 'ImageUpload.php';
		
	}
	if($_FILES["fileToupload"]["name"]=="")
	{
		echo "No File Selected";
		
	}
	else
	{
		require 'uploadcerti.php';
	}
	$profile=$target_file;

	$certifi=$target_file1;

	if($pass!=$cpass)
	{
		header("location:registration.php");
		exit();
	}

		$insert= "INSERT INTO `expert_tbl`(`firstname`, `lastname`, `profile_pic`, `dob`, `gender`, `specialization`, `email`,`password`, `mobileno`, `Isactive`, `doi`, `dou`, `usertype`,`qualification`,`university`,`experience`,`state`,`city`,`certi`) VALUES ('".$fn."','".$ln."','".$profile."','".$dob."','".$gen."','".$spe."','".$email."','".$pass."','".$mobileno."','".$isactive."','".$dt."','".$dt."','".$usertype."','".$qua."','".$uni."','".$ex."','".$state."','".$city."','".$certifi."')";
		echo $insert;
		$rs= mysqli_query($con,$insert);
		if($rs)
		{
			echo "Success";
			header("location:index.php");
		}
		else
		{
			echo "Error";
			header("location:registration.php");
		}
		
		
		
	?>