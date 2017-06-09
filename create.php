<?php include "config.php"; ?>
<?php
//echo
if (isset($_POST['create'])) {
	$name = $_POST['name'];
	$password = $_POST['password'];
	$type = $_POST['type'];
	//sql query
	$sql = "INSERT INTO users(Username,Password,Type) VALUES('$name','$password','$type')";
	$result = $mysqli->query($sql);
}
//complete
?>


<!DOCTYPE html>
<html>
<head>
	<title>LAPTOP MANAGEMENT PORTAL</title>
	<style>
		#link {
			text-align: right;
		}
	</style>
</head>
<body>
<table cellspacing="10" cellpadding="0">
<tr>
<td>WELCOME TO THE PORTAL : SIGN UP FOR THE NEW ACCOUNT</td>
<td id="link"><a href="indexh.php">HOME</a></td>
</tr>
</table>
<br><br>
<center>
	<fieldset>
		<legend>CREATE NEW ACCOUNT - SIGNUP</legend>
		<center><form method="post" action="create.php" name="loginform">
			<table border="0" cellspacing="10" cellpadding="10">
				<tr>
					<td><label>Username :</label></td>
					<td><input type="text" name="name" placeholder="Enter username"></td>
				</tr>
				<!--next level -->
				<tr>
					<td><label>Password :</label></td>
					<td><input type="text" name="password" placeholder="Enter password"></td>
				</tr>
				<!-- next level -->
				<tr>
					<td><label>Type :</label></td>
					<td><select name="type">
						<option value="user">USER</option>
						<option value="admin">ADMIN</option>
					</select></td>
				</tr>
				<!-- next level -->
				<tr>
					<td><?php echo "<input type='submit' name='create' value='CREATE' onclick=\"return confirm('Are you want to create this user?')\">"; ?></td>
				</tr>
			</table>
	</form></center>
</fieldset>
</center>
</body>
</html>