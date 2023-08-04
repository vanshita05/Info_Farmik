<?php
session_start();
var_dump($_GET);
require "dbconnect.php";

if(!isset($_GET['btn_sb']))
{
	header("location: addstate.php");
	exit();
}
$statename = $_GET['state_name'];
$isactive= 1;
$dt= date("Y-m-d");
$qry= "INSERT INTO `state_tbl`(`statename`, `Isactive`, `doi`) VALUES ('".$statename."','".$isactive."','".$dt."')";
echo $qry;
$rs=mysqli_query($con,$qry);
if($rs)
{
	echo "Success";
	header("location:viewstate.php");
	exit();
}
else
{
	echo "Error";
}