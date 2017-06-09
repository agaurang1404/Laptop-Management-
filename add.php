<!DOCTYPE html>
<html>
<head>
	<title>ADMIN ADD PANEL</title>
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
<legend>ADMIN ADD PANEL</legend>
<center><form name="form1" method="post" action="addp.php">
		<table border="0" cellspacing="10">
			<tr> 
				<td><label>Employee Number :</label></td>
				<td><input type="text" name="empno" placeholder="Enter employee number"></td>
			</tr>
			<tr> 
				<td><label>Name :</label></td>
				<td><input type="text" name="name" placeholder="Enter name"></td>
			</tr>
			<tr> 
				<td><label>Serial Number :</label></td>
				<td><input type="text" name="srno" placeholder="Enter serial number"></td>
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
				<td><input type="text" name="lcode" placeholder="Enter location code"></td>
			</tr>
			<tr> 
				<td><label>Employee Code :</label></td>
				<td><input type="text" name="empcode" placeholder="Enter employee code"></td>
			</tr>
			<tr> 
				<td><label>Employee Designation :</label></td>
				<td><input type="text" name="empdsgn" placeholder="Enter employee designation"></td>
			</tr>
			<tr> 
				<td><label>Comments :</label></td>
				<td><input type="text" name="cmts" placeholder="Enter comments"></td>
			</tr>
			<tr>
				<td><input type="submit" name="add" value="ADD"></td>
			</tr>
		</table>
	</form></center>
</fieldset></center>
</body>
</html>