<?php  
require'dbconnect.php';
var_dump($_POST);
$id= $_GET['id'];
echo $id;
$qry="SELECT * FROM contact WHERE id=$id";
$rs=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['Isactive'];
if($status==0)
{
	$qry1="UPDATE contact SET Isactive=1 WHERE id=$id";
	echo $qry1;
}
elseif($status==1)
{
	$qry1="UPDATE contact SET Isactive=0 WHERE id=$id";
	echo $qry1;
}
$rs1=mysqli_query($con,$qry1);
if($rs1)
{
	echo"Updated";
	header("location:viewcontact.php");
	exit();
}
else
{
	echo"Error";
}
?>