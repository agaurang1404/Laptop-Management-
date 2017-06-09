<?php include "config.php"; ?>
<?php
//echo
if (isset($_POST['login'])) {
	$name = $_POST['name'];
	$password = $_POST['password'];
	$type = $_POST['type'];
	//sql query
	$sql = "SELECT * FROM users WHERE Username ='$name'";
	$result = $mysqli->query($sql);
	//fetching user details
	$row = $result->fetch_assoc();
	if ($name == $row['Username'] && $password == $row['Password'] && $type == $row['Type']) {
		if ($type == "admin") {
			header("Location:admin.php");
		}elseif ($type == "user") {
			header("Location:user.php");
		}else {
			echo "<script>";
			echo "alert('Please enter valid login credentials')";
			echo "</script>";	
		} 
			
		
	}
	else {
		echo "<script>";
		echo "alert('Please enter valid login credentials')";
		echo "</script>";

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LAPTOP MANAGEMENT PORTAL</title>
</head>
<body>
WELCOME TO THE PORTAL : PLEASE LOGIN TO CONTINUE
<br><br>
<center>
	<fieldset>
		<legend>LOGIN TO PROCEED</legend>
		<center><form method="post" action="indexh.php" name="loginform">
			<table border="0" cellspacing="10" cellpadding="10">
				<tr>
					<td><label>Username :</label></td>
					<td><input type="text" name="name" placeholder="Enter username"></td>
				</tr>
				<!--next level -->
				<tr>
					<td><label>Password :</label></td>
					<td><input type="password" name="password" placeholder="Enter password"></td>
				</tr>
				<!-- next level -->
				<tr>
					<td><label>Type :</label></td>
					<td><select name="type">
						<option value="select">SELECT OPTION</option>
						<option value="user">GENERAL USER</option>
						<option value="admin">ADMINISTRATOR</option>
					</select></td>
				</tr>
				<!-- next level -->
				<tr>
					<td><input type="submit" name="login" value="LOGIN"></td>

				</tr>
			</table>
	</form></center>
</fieldset>
</center>
</body>
</html>