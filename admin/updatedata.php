<?php
require'dbconnect.php';
var_dump($_POST);
$fn=$_POST['txt_fn'];
$ln=$_POST['txt_ln'];
$id=$_POST['txt_id'];
$email=$_POST['txt_email'];
$mobilenum=$_POST['txt_mobile'];
$gender=$_POST['gen'];
$password=$_POST['txt_pass'];
$qry="UPDATE user_tbl SET firstname='".$fn."',lastname='".$ln."',email='".$email."',mobilenum='".$mobileno."',gender='".$gender."',password='".$password."' WHERE id='".$id."'";

echo $qry;
$rs=mysqli_query($con,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewuser.php");
	exit();
}
else
{
	echo"Update error";
}
?>
