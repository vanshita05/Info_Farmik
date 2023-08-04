 <?php
require'dbconnect.php';
var_dump($_POST);
$id=$_GET['id'];
echo $id;
$qry1="UPDATE expert_tbl SET Isactive=2 WHERE eid=$id";
echo $qry1;
$rs1=mysqli_query($con,$qry1);
if($rs1)
{
	echo"Deleted";
	header("location:viewexpert.php");
	exit();
}
else
{
	echo"Error";
}
?>