<?php  
require'dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
echo $id;

$qry="SELECT * FROM expert_tbl WHERE eid=$id";
$rs=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['Isactive'];
if($status==0)
{
	$qry1="UPDATE expert_tbl SET Isactive=1 WHERE eid=$id";
	echo $qry1;
}
elseif($status==1)
{
	$qry1="UPDATE expert_tbl SET Isactive=0 WHERE eid=$id";
	echo $qry1;
}
$rs1=mysqli_query($con,$qry1);
if($rs1)
{
	echo"Updated";
	header("location:viewexpert.php");
	exit();
}
else
{
	echo"Error";
}
?>