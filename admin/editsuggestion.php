<?php
require'dbconnect.php';
var_dump($_GET);
$id=$_GET['t_id'];
$qry="SELECT * FROM tips WHERE t_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit file</title>
</head>
<body>
	<form action="updatetips.php" method="POST">
		<input type="hidden" name="t_id" value="<?php echo $row['t_id'];?>">
		t_name:<input type="text" name="t_name" value="<?php echo $row['t_name'];?>"><br>
		t_desc:<input type="text" name="t_desc" value="<?php echo $row['t_desc'];?>"><br>
			<input type="submit" name="btn_sb">
		<input type="reset" value="Clear">
	</form>
</body>
</html>