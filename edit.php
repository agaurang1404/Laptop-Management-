<?php include "config.php"; ?>
<?php
//form check
if (isset($_POST['update'])) {
	$empno = $_POST['empno'];
	$name = $_POST['name'];
	$srno = $_POST['srno'];
	$recv = $_POST['recv'];
	$lcode = $_POST['lcode'];
	$empcode = $_POST['empcode'];
	$empdsgn = $_POST['empdsgn'];
	$cmts = $_POST['cmts'];
	//sql query
	$sql = "UPDATE student SET Emp_No='$empno',Name='$name',Serial_No='$srno',Received='$recv',Loc_code='$lcode',Emp_Code='$empcode',Emp_Design='$empdsgn',Comments='$cmts' WHERE Emp_No=$empno";
	$result = $mysqli->query($sql);
	//redirecting the user to index.php
	header("Location:admin.php");
}
?>
<?php
//echo
$id = $_GET['id'];

//selecting data associated with this particular id
$sqlc = "SELECT * FROM laptop WHERE Emp_no=$id";
$resultc = $mysqli->query($sqlc);
while($row = $resultc->fetch_assoc())
{
	$empno = $row['Emp_No'];
	$name = $row['Name'];
	$srno = $row['Serial_No'];
	$recv = $row['Received'];
	$lcode = $row['Loc_Code'];
	$empcode = $row['Emp_Code'];
	$empdsgn = $row['Emp_Design'];
	$cmts = $row['Comments'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN EDIT PANEL</title>
	<style>
		fieldset {
			text-align: center;
			width: 30%;
		}
	</style>
</head>
<body alink="blue" vlink="black">
<a href="admin.php">ADMIN PANEL</a>
<br><br>
<center><fieldset>
<legend>ADMIN EDIT PANEL</legend>
<center><form name="form1" method="post" action="edit.php">
		<table border="0" cellspacing="10">
			<tr> 
				<td><label>Employee Number :</label></td>
				<td><input type="text" name="empno" placeholder="<?php echo $empno;?>"></td>
			</tr>
			<tr> 
				<td><label>Name :</label></td>
				<td><input type="text" name="name" placeholder="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td><label>Serial Number :</label></td>
				<td><input type="text" name="srno" placeholder="<?php echo $srno;?>"></td>
			</tr>
			<tr> 
				<td><label>Received :</label></td>
				<td><select name="recv">
					<option value="Y">Yes</option>
					<option value="N">No</option>
					<option value="U">Unknown</option>
				</select></td>
			</tr>
			<tr> 
				<td><label>Location Code :</label></td>
				<td><input type="text" name="lcode" placeholder="<?php echo $lcode;?>"></td>
			</tr>
			<tr> 
				<td><label>Employee Code :</label></td>
				<td><input type="text" name="empcode" placeholder="<?php echo $empcode;?>"></td>
			</tr>
			<tr> 
				<td><label>Employee Designation :</label></td>
				<td><input type="text" name="empdsgn" placeholder="<?php echo $empdsgn;?>"></td>
			</tr>
			<tr> 
				<td><label>Comments :</label></td>
				<td><input type="text" name="cmts" placeholder="<?php echo $cmts;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></</td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form></center>
</fieldset></center>
</body>
</html>