<?php
require'dbconnect.php';
session_start();
$id= $_SESSION['id'];
var_dump($_POST);
$eid=$_POST['id'];
echo $id;

$feedback=$_POST['feedback'];
$name=$_POST['name'];
$email=$_POST['email'];
$rating=$_POST['rating'];
$isactive='1';
$dt=date("Y-m-d");

if (!isset($_POST['btn_sb'])) 
	{
		header("location:givefeedback.php");
		exit();
	}

	$qry1= "INSERT INTO `feedback`(`id`, `firstname`, `email`, `feedback`, `rating`, `eid`, `Isactive`, `doi`, `dou`) VALUES ('".$id."','".$name."','".$email."','".$feedback."','".$rating."','".$eid."','".$isactive."','".$dt."','".$dt."')";
	$rs1=mysqli_query($con,$qry1);
	if($qry1)
		{
			
				echo "feedback sent";
				header("location:exprofile1.php?id=$eid");
			
		}
		
	
	else
	{
		header("location:givefeedback.php");
	}
	

?>
	