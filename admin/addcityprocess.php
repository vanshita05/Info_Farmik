
	<?php

session_start();
var_dump($_POST);

require 'dbconnect.php';
if(!isset($_POST['btn_sb']))
  {
 	header("location:addcity.php");
 	exit();
  }
$sid=$_POST['state_id'];
$cityname=$_POST['City_name'];

$isactive=1;
$doi=date("Y-m-d");
$dou=date("Y-m-d");
echo $cityname.$sid.$isactive.$doi.$dou;
$qry="INSERT INTO city_tbl(cityname,state_id,Isactive,doi,dou) VALUES ('".$cityname."',$sid,$isactive,'".$doi."','".$dou."')";
echo $qry;

$rs1=mysqli_query($con,$qry);
if($rs1)
{

	echo "sucessfull";
	header("location:viewcity.php");
}
else
{
	echo "unsucessfull";
	header("location:addcity.php");
}
?>
