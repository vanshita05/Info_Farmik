<?php
require 'dbconnect.php';
session_start();
$u_id=$_SESSION['eid'];
$title=$_POST['title'];
$dis=$_POST['dis'];
$isactive=1;
$dt= date(y-m-d);

		require 'ImageUpload.php';
	$profile=$target_file;
$qry="INSERT INTO exmedia (eid,photo,title,description,Isactive,doi,dou) value('".$u_id."','".$profile."','".$title."','".$dis."','".$isactive."','".$dt."','".$dt."')";
echo $qry;
$rs=mysqli_query($con,$qry);
if($rs)
{
	header("location: exprofilemng.php");
	//echo "Success";
}
else
{

	echo "error";
}
?>