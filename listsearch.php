<?php

	require 'db_connection.php';
	$s=$_GET['txt_search'];
	$qry="SELECT * FROM registration WHERE firstname LIKE '"."%".$s."%"."'";
	$rs=mysqli_query($conn,$qry);
	if(mysqli_num_rows($rs)>0)
	{
		while($row=mysqli_fetch_assoc($rs))
		{
			echo "<tr>";
			echo "<td>".$row['firstname']."</td>";
			echo "<td>".$row['lastname']."</td>";
			echo "</tr>";
		}
	}
	else
	{
		echo "0 results";
	}

?>