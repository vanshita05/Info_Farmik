<?php
require'dbconnect.php';
session_start();
$id= $_SESSION['id'];
var_dump($_POST);
$eid=$_POST['id'];
echo $id;

$question=$_POST['question'];

$isactive='1';
$dt=date("Y-m-d");

if (!isset($_POST['btn_sb'])) 
	{
		header("location:askque.php");
		exit();
	}
if($_FILES["fileToUpload"]["name"]=="")
	{
		echo "No File Selected";
		header("location:askque.php");
		exit();
	}
	else
	{
		require 'ImageUpload.php';
	}
	$media=$target_file;
	$qry1= "INSERT INTO `ques_tbl`(`eid`,`id`, `media`, `question`, `doi`, `dou`, `Isactive`) VALUES('".$eid."','".$id."','".$media."','".$question."','".$dt."','".$dt."','".$isactive."')";
	$rs1=mysqli_query($con,$qry1);
	if($qry1)
		{
			
				echo "Question is Submited";
				//header("location:exprofile.php");
			
		}
		
	
	else
	{
		header("location:newregistration.php");
	}
	

?>
	