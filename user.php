<?php include "config.php"; ?>
<?php
//sql query
$sql = "SELECT * FROM laptop ORDER BY Emp_No DESC";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>USER PANEL</title>
	<style>
		fieldset {
			text-align: center;
		}
	</style>
</head>
<body>
<table cellspacing="10">
<tr>
<td><a href="indexh.php">SIGN-OUT</a></td>
</tr>
</table>
<br><br>
<fieldset>
<legend>USER PANEL</legend>
<table width='100%' border=0 align="center">

	<tr bgcolor="green">
		<th>Employee NUmber</th>
		<th>Name</th>
		<th>Serial No</th>
		<th>Update</th>
	</tr>
	<?php while($row = $result->fetch_assoc()): ?>
		<?php
			echo "<tr>";
			echo "<td>".$row['Emp_No']."</td>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Serial_No']."</td>";
			echo "<td><a href=\"uview.php?id=$row[Emp_No]\"><img src='vallbtn.png' alt='view' width='80px' height='40px'></a> | <a href=\"uviewg.php?id=$row[Comments]\"><img src='grbtn.png' alt='view by group' width='30px' height='30px' alt='View By Group'></a></td>";   
		?>
	<?php endwhile; ?>
</table>
</fieldset>
</body>
</html>