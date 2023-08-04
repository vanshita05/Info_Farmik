<?php
require'dbconnect.php';
session_start();
var_dump($_POST);
$id=session_id('eid');

$fn= $_POST['txt_fn'];
$ln= $_POST['txt_ln'];
$email= $_POST['email'];
$spec= $_POST['spec'];
$mobileno= $_POST['mobile'];
$pass= $_POST['pass'];
$dob= $_POST['dob'];




if (!isset($_POST['update'])) 
	{
		header("location:exprofilemng.php");
		exit();
	}

	
	$qry1="UPDATE expert_tbl SET firstname='".$fn."',lastname='".$ln."',dob='".$dob."',specialization='".$spec."',email='".$email."',password='".$pass."',mobileno='".$mobileno."' WHERE `id`='".$id."'";
	 $rs1=mysqli_query($con,$qry1);
	if($qry1)
		{
			
				
				header("location:exprofilemng.php");
			
		}
		
	
	else
	{
		
		header("location:newregistration.php");
	}
	

?>