<?php
var_dump($_POST);
$username = "demo";
$Password = "1234";
if(!isset($_POST['btn_sb']))
{
	echo "Direct URL called";
	header("location: login.php");
	exit();
}
$un= $_POST['txt_un'];
$pass= $_POST['txt_pass'];
if($un == $username)
{
	if($pass == $Password)
	{
		header("location: dashboarddemo.php");
		exit();
	}
	else
	{
		echo "Username or Password Inavlid";
		header("location: login.php?msg=");
	}
}

?>