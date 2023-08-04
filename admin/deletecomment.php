<?php
require 'dbconnect.php';
var_dump($_POST);
$id=$_GET['id'];
echo $id;

$qry1="UPDATE comment SET Isactive=2 WHERE cid=$id";
echo $qry1;
$rs1=mysqli_query($con,$qry1);
if($rs1)
{
	echo "deleted";
	header("location:viewcomment.php");
	exit();
}
else
{
	echo"Error";
}
?>