<?php
	require "dbconnect.php";
	var_dump($_POST);
	$fn = $_POST['txt_fn'];
	$ln = $_POST['txt_ln'];
	$dob = $_POST['txt_bd'];
	$email = $_POST['txt_email'];
	$mobileno = $_POST['txt_phone'];
	$gen = $_POST['rd_gen'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$add = $_POST['txt_add'];
	$pass = $_POST['txt_pass'];
	$cpass = $_POST['txt_cpass'];
	$animal = $_POST['txt_animal'];
	$food = $_POST['txt_food'];
	$dob = $_POST['txt_dob'];
	$gen1 = $_POST['rda_gen'];
	$returnfood = $_POST['txt_return'];
	$foodquantity = $_POST['txt_quantity'];
	$disease = $_POST['txt_disease'];
	
	$isactive = 1;
	$dt = date('Y-m-d');

	if($_FILES["fileToUpload"]["name"]=="")
	{
		echo "No File Selected";
		
	}
	else
	{
		require 'ImageUpload.php';
	}
	$profile = $target_file;

	if($pass!=$cpass)
	{
		header("location:newregistration.php");
		exit();
	}
	if(isset($_POST['btn_animal']))
	{
		$insert= "INSERT INTO `user_tbl`(`firstname`, `lastname`,`profile_pic`, `email`, `dob`, `password`, `mobileno`, `gender`, `address`, `Isactive`, `doi`, `dou`, `city`)VALUES ('".$fn."','".$ln."','".$profile."','".$email."','".$dob."','".$pass."','".$mobileno."','".$gen."','".$add."','".$isactive."','".$dt."','".$dt."','".$city."')";
		$qry= mysqli_query($con,$insert);
		$insert1 = "INSERT INTO `animal_cat`(`animal`, `food type`, `quantity of food`, `returnfood`, `disease`, `gender`, `dob`, `doi`, `dou`, `Isactive`) VALUES ('".$animal."','".$food."','".$foodquantity."','".$returnfood."','".$disease."','".$gen1."','".$dob."','".$dt."','".$dt."','".$isactive."')";
		echo $insert1;
		$qry1= mysqli_query($con,$insert1);
		
		if($qry)
		{
			echo "success1";
			if($qry1)
			{
			echo "success1";
				//header("location:index1.php");
			}
		}
		
		
	}
	else
	{
		//header("location:newregistration.php");
	}
	?>