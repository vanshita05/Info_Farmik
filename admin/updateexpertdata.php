<?php
require'dbconnect.php';
var_dump($_POST);
$fn=$_POST['txt_fn'];
$ln=$_POST['txt_ln'];
$id=$_POST['txt_id'];
$email=$_POST['txt_email'];
$mobileno=$_POST['txt_mobile'];
$gender=$_POST['gen'];
$qry="UPDATE expert_tbl SET firstname='".$fn."',lastname='".$ln."',email='".$email."',mobileno='".$mobileno."',gender='".$gender."' WHERE eid=$id";
echo $qry;
$rs=mysqli_query($con,$qry);
if($rs)
{
	echo "Updated";
	//header("location:viewexpert.php");
	exit();
}
else
{
	echo"Update error";
}
?>
