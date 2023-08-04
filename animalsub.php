<?php
	require "dbconnect.php";
	var_dump($_POST);
	$fn = $_POST['txt_fn'];
	$ln = $_POST['txt_ln'];
	$dob = $_POST['txt_dob'];
	$email = $_POST['txt_email'];
	$mobileno = $_POST['txt_mobileno'];
	$gen = $_POST['txt_gen'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$add = $_POST['txt_add'];
	$pass = $_POST['txt_pass'];
	$cpass = $_POST['txt_cpass'];
	$animal = $_POST['txt_animal'];
	$food = $_POST['txt_food'];
	$dob = $_POST['txt_dob'];
	$returnfood = $_POST['txt_return'];
	$foodquantity = $_POST['txt_quantity'];
	$gen1= $_POST['txt_gen1'];
	$isactive = 1;
	$dt = date('Y-m-d');
	if(isset($_POST['btn_sb2']))
	{
		$insert= "INSERT INTO `user_tbl`(`firstname`, `lastname`,`email`, `dob`, `password`, `mobileno`, `gender`, `address`, `Isactive`, `doi`, `dou`,`city`) VALUES ('".$fn."','".$ln."','".$email."','".$dob."','".$pass."','".$mobileno."','".$gen."','".$add."','".$isactive."','".$dt."','".$dt."','".$city."')";
		$qry= mysqli_query($con,$insert);
		$insert1 = "INSERT INTO `animal_cat`(`animal`, `food type`, `quantity of food`, `returnfood`, `gender`, `dob`, `doi`, `dou`, `Isactive`)) VALUES ('".$animal."','".$food."','".$foodquantity."','".$returnfood."','".$gen1."','".$isactive."','".$dt."','".$dt."')";
		echo $insert1;
		$qry1= mysqli_query($con,$insert1);
		
		if($qry)
		{
			echo "success1";
			if($qry1)
			{
			echo "success1";
				header("location:index1.php");
			}
		}
		
	}
	else
	{
		header("location:registration.php");
	}
	?>