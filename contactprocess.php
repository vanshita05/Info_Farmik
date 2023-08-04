<?php
require'dbconnect.php';
session_start();
$id= $_SESSION['id'];
var_dump($_POST);

$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['sub'];
$msg=$_POST['message'];

$isactive='1';
$dt=date("Y-m-d");

if (!isset($_POST['btn_sb'])) 
	{
		header("location:contact.php");
		exit();
	}

	
	$qry1= "INSERT INTO `contact`(`id`, `name`, `email`, `sub`, `msg`, `Isactive`, `doi`, `dou`) VALUES ('".$id."','".$name."','".$email."','".$sub."','".$msg."','".$isactive."','".$dt."','".$dt."')";
	$rs1=mysqli_query($con,$qry1);
	if($qry1)
		{
			
				echo "Your Request is sent";
				header("location:index1.php");
			
		}
		
	
	else
	{
		echo "Sorry !!!Something Went Wrong..";
		header("location:contact.php");
	}
	

?>
	