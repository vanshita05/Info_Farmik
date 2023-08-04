<?php
require'dbconnect.php';
var_dump($_POST);
$id = $_GET['id'];
$qry="SELECT * FROM user_tbl WHERE id=$id";
$rs=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit file</title>
</head>
<body>
	<form action="updatedata.php" method="post">
		<input type="hidden" name="txt_id" value="<?php echo $row['id'];?>">
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
		Password:<input type="text" name="txt_pass" value="<?php echo $row['password'];?>"><br>
		<input type="submit" name="btn_sb">
		<input type="reset" value="Clear">
	</form>
</body>
</html>