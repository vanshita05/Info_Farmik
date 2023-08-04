<?php
require "dbconnect.php";
$id= $_GET['id'];


	$qry= "UPDATE expert_tbl SET Isactive=1 WHERE eid='".$id."'" ;
	$rs= mysqli_query($con,$qry);
	echo $qry;
	if($qry)
	{
		echo "Success";
		header("location:viewcerty.php");
		
	}
	

?>