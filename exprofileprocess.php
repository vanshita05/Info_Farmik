<?php
	
	require "dbconnect.php";
	var_dump($_POST);

	
	if (!isset($_POST['btn_crop'])) 
	{
		header("location:newregistration.php");
		exit();
	}

	$fn = $_POST['txt_fn'];
	$ln = $_POST['txt_ln'];
	$dob = $_POST['txt_bd'];
	$email = $_POST['temail'];
	$mobileno = $_POST['tphone'];
	$gen = $_POST['rd_gen'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$add = $_POST['address'];
	$pass = $_POST['txt_pass'];
	$cpass = $_POST['txt_cpass'];
	$crop = $_POST['txt_crop'];
	$fer = $_POST['txt_fer'];
	$soil = $_POST['soil'];
	$turnover = $_POST['txt_tt'];
	$watertime = $_POST['txt_wt'];
	$watertech= $_POST['supply_tech'];
	$usertype =1;
	$isactive = 1;
	$dt = date('Y-m-d');

	if(isset($_POST['btn_crop']))
	{
		$insert= "INSERT INTO `user_tbl`(`firstname`, `lastname`,`profile_pic`, `email`, `dob`, `password`, `mobileno`, `gender`, `address`, `Isactive`, `doi`, `dou`, `city`)VALUES ('".$fn."','".$ln."','".$profile."','".$email."','".$dob."','".$pass."','".$mobileno."','".$gen."','".$add."','".$isactive."','".$dt."','".$dt."','".$city."')";
		$qry= mysqli_query($con,$insert);