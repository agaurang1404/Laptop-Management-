<?php include "config.php"; ?>
<?php
//echo
$id = $_GET['id'];
//sql query
$sql = "SELECT * FROM laptop WHERE Emp_No=$id";
$result = $mysqli->query($sql);
//redirecting the admin to index.php
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN VIEW PANEL</title>
	<style>
		fieldset {
			text-align: center;
		}
	</style>
</head>
<body>
<a href="admin.php">ADMIN PANEL</a>
<center><fieldset>
<legend>ADMIN VIEW STATUS</legend>
<table width='100%' border=0 align="center">

	<tr bgcolor="green">
		<th>Employee Number</th>
		<th>Name</th>
		<th>Serial Number</th>
		<th>Received</th>
		<th>Location Code</th>
		<th>Employee Code</th>
		<th>Employee Designation</th>
		<th>Comments</th>
	</tr>
	<?php while($row = $result->fetch_assoc()): ?>
		<?php
			echo "<tr>";
			echo "<td>".$row['Emp_No']."</td>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Serial_No']."</td>";
			echo "<td>".$row['Received']."</td>";
			echo "<td>".$row['Loc_Code']."</td>";
			echo "<td>".$row['Emp_Code']."</td>";
			echo "<td>".$row['Emp_Design']."</td>";
			echo "<td>".$row['Comments']."</td>";
			?>
	<?php endwhile; ?>
</table>
</fieldset><center>
</body>
</html>