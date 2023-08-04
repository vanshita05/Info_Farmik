<?php
require'dbconnect.php';
session_start();
var_dump($_POST);
$id= session_id('id');

$fn= $_POST['txt_fn'];
$ln= $_POST['txt_ln'];
$email= $_POST['email'];
$category= $_POST['Category'];
$mobileno= $_POST['mobile'];
$pass= $_POST['pass'];
$dob= $_POST['dob'];





if (!isset($_POST['update'])) 
	{
		header("location:updateuserprofile.php");
		exit();
	}

	
	$qry1= "UPDATE `user_tbl` SET `firstname`='".$fn."',`lastname`='".$ln."',`email`='".$email."',`dob`='".$dob."',`category`='".$category."',`password`='".$pass."',`mobileno`='".$mobileno."' WHERE id='".$id."'";
	 $rs1=mysqli_query($con,$qry1);
	if($qry1)
		{
			
				echo "Success";
				header("location:userprofile.php");
			
		}
		
	
	
?>