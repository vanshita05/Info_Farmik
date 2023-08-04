<?php
require 'dbconnect.php';
var_dump($_POST);
$id=$_GET['qid'];
echo $id;
$qry1="UPDATE ques_tbl SET Isactive=2 WHERE qid=$id";
echo $qry1;
$rs1=mysqli_query($con,$qry1);
if($rs1)
{
	echo "deleted";
	header("location:viewquestion.php");
	exit();
}
else
{
	echo"Error";
}
?>