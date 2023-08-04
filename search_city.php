<?php

	require "dbconnect.php";
	
		$ctr = $_GET["ctr"];
		$qry="SELECT * FROM city_tbl WHERE state_id='".$ctr."'";
		$rs=mysqli_query($con,$qry);
		while($row=mysqli_fetch_assoc($rs))
		{
	?>
			<option value="<?php echo $row['city_id']; ?>"><?php echo $row['cityname'];?></option>
	<?php
		
	}

?>     