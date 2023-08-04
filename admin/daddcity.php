<?php
require 'dbconnect.php';
$qry ="SELECT * FROM state_tbl where isactive=1";
$rs=mysqli_query($conn,$qry);

?>

<!DOCTYPE html>
<html>
<head>
	<title>add city</title>
</head>
<body>
<form action="addcityprocess.php" method=get>
	state name:<select name="st_id">
		<?php
		if(mysqli_num_rows($rs)>0)
		{
			while ($row=mysqli_fetch_assoc($rs))
			 {
		?>
				<option value="<?php echo $row['st_id']; ?>">
				<?php echo $row['Statename'];?>
				</option>
			<?php
			}
		}
?>
</select><br><br>
	city name:<input type="text" name="city_name"><br><br>
	<input type="submit" name="btn_sb">
</form>
</body>
</html>