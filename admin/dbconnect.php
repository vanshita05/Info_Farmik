<?php
	$servername= "localhost";
	$username= "root";
	$password= "";
	$dbname= "project";

	//create connection

	$con= mysqli_connect($servername,$username,$password);
	if(!$con)
	{
		die("connection failed".mysqli_connect_error());

	}

		// Select database
	$db= mysqli_select_db ($con,$dbname);
	if(!$db)
	{
		echo "database not selected ";
	}
?>