<?php
require'dbconnect.php';
var_dump($_POST);
$id=$_GET['id'];
echo $id;
$qry1="UPDATE user_tbl SET Isactive=2 WHERE id=$id";
echo $qry1;
$rs1=mysqli_query($con,$qry1);
if($rs1)
{
	echo"Deleted";
	header("location:viewuser.php");
	exit();
}
else
{
	echo"Error";
}
?>
