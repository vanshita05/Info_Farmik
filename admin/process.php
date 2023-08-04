<!DOCTYPE html>
<html>
<head>
	<title>PROCESS FILE</title>
</head>
<body>
	<form action="finalprocess.php" method="get">
		First Name:<input type="text" name="txt_fn" value="<?php echo $fn; ?>"></p>
		Last Name:<input type="text" name="txt_ln" value="<?php echo $ln; ?>"></p>
		
		<p>Email: <input type="text" name="txt_email" ></p>
		<p>Gender:<input type="radio" name="gen" value="male" 
			<?php if($gen =="male")
			{ echo "Checked";} ?>>Male
			<input type="radi" name="gen" value="female"
			<?php if ($gen == "female") 
			{ echo "Checked";}?>>Female</p>
		
		<p>Course: <select name="course">
			<option value="MBA" <?php if($course == "MBA") { echo "Selected";} ?>>MBA</option>
			<option value="MCA" <?php if($course == "MCA") { echo "Selected";} ?>>MCA</option>
			<option value="BBA"<?php  if($course == "BBA") { echo "Selected";} ?>>BBA</option>
		</select></p>
		<p>Address: <textarea name="adrs"> <?php echo $adrs;?> </textarea></p>
		
		<p>Hobby: 
			<input type="Checked" name="hobby[]" value="Drawing"
			<?php foreach ($hby as $val) {
				if($val == "Drawing")
				{
					echo "Checked";
				}
			}?>>Drawing
			<input type="Checked" name="hobby[]" value="Cricket"
			<?php foreach ($hby as $val) {
				if($val == "Cricket")
				{
					echo "Checked";
				}
			}?>>Cricket
			<input type="Checked" name="hobby[]" value="Badminton"
			<?php foreach ($hby as $val) {
				if($val == "Badminton")
				{
					echo "Checked";
				}
			}?>>Badminton
			<p><input type="submit" name="btn_sb">Submit</p>
	</form>

</body>
</html>