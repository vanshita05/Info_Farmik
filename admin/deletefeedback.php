<?php
require 'dbconnect.php';
var_dump($_POST);
$id=$_GET['id'];
echo $id;
$qry1="UPDATE feedback SET Isactive=2 WHERE fid=$id";
echo $qry1;
$rs1=mysqli_query($con,$qry1);
if($rs1)
{
	echo "deleted";
	header("location:viewfeedback.php");
	exit();
}
else
{
	echo"Error";
}
?>