<?php
	require "dbconnect.php";
	//var_dump($_POST);
	if($_POST['email']="")
	{
		$email=0;
	}
	else
	{
		$email = $_POST['txt_email'];
		$qryr="SELECT * FROM user_tbl where category='Animal'";
		echo $qryr;
		$rsr=mysqli_query($con,$qryr);
		while($rowr=mysqli_fetch_assoc($rsr))
		{
			$emailr=$rowr['email'];
			if($email==$emailr)
			{
				echo "ues";
				//echo "<script>alert('Email already exists')</script>";
				//echo "<script>window.location='newregistration.php'</script>";
				exit();
			}
		}
	}
	$fn = $_POST['txt_fn'];
	$ln = $_POST['txt_ln'];
	$dob = $_POST['txt_bd'];
	
	$mobileno = $_POST['tphone'];
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
	$usertype=1;
	$isactive = 1;
	$category = "Animal";
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
		$insert= "INSERT INTO `user_tbl`(`firstname`, `lastname`,`profile_pic`, `email`, `dob`,`category`,`password`, `mobileno`, `gender`, `address`, `Isactive`, `doi`, `dou`, `city`)VALUES ('".$fn."','".$ln."','".$profile."','".$email."','".$dob."','".$category."','".$pass."','".$mobileno."','".$gen."','".$add."','".$isactive."','".$dt."','".$dt."','".$city."')";
		$qry= mysqli_query($con,$insert);
		echo $insert;
		$insert1 = "INSERT INTO `animal_cat`(`animal`, `food type`, `quantity of food`, `returnfood`, `disease`, `gender`, `dob`, `doi`, `dou`, `Isactive`) VALUES ('".$animal."','".$food."','".$foodquantity."','".$returnfood."','".$disease."','".$gen1."','".$dob."','".$dt."','".$dt."','".$isactive."')";
		echo $insert1;
		$qry1= mysqli_query($con,$insert1);
		
		if($qry)
		{
			echo "success1";
			if($qry1)
			{
			echo "success1";
				header("location:index.php");
			}
		}
		
		
	}
	else
	{
		echo "error";
		//header("location:newregistration.php");
	}
	?>