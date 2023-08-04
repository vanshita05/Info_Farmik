<?php
require'dbconnect.php';
var_dump($_POST);
$id=$_GET['id'];
echo $id;
$qry="SELECT * FROM expert_tbl WHERE eid=$id";
$rs=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($rs);
?>
<html>
<head>
	<title>Edit file</title>
</head>
<body>
	<form action="updateexpertdata.php" method="post">
		<input type="hidden" name="txt_id" value="<?php echo $row['eid'];?>">
		Firstname:<input type="text" name="txt_fn" value="<?php echo $row['firstname'];?>"><br>
		Lastname:<input type="text" name="txt_ln" value="<?php echo $row['lastname'];?>"><br>
		Email:<input type="text" name="txt_email" value="<?php echo $row['email'];?>"><br>
		Mobile number:<input type="text" name="txt_mobile" value="<?php echo $row['mobileno'];?>"><br>
		Gender: <br><input type="radio" name="gen" value="male" <?php
		if($row['gender']=='male')
		{
			echo "checked";
		}
		?>>Male
		<input type="radio" name="gen" value="female" <?php
		if($row['gender']=='female')
		{
			echo "checked";
		}
		?>>Female
		<br>	
		Specialized In:<input type="text" name="txt_spec" value="<?php echo $row['specializedin'];?>">
		<input type="submit" name="btn_sb">
		<input type="reset" value="Clear">
	</form>
</body>
</html>