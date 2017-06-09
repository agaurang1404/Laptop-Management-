<?php include "config.php"; ?>
<?php
//sql query
$sql = "SELECT * FROM laptop ORDER BY Emp_No DESC";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PANEL</title>
	<style>
		#nav_bg {
			background-color: #999966;
			position: fixed;
			width: 100%;
			margin: 0;
			margin-top: 0px;
			top: 0;
		}
		ul {
			list-style-type: none;
			background-color: #f1f1f1;
			padding: 10 40 10 40; 
		}
		li {
			float: left;
		}
		li a{
			display: block;
			color: white;
    		padding: 8px 16px;
    		text-decoration: none;
		}
		li a:hover {
    		background-color: #003300;
    		color: white;
		}


		fieldset {
			text-align: center;
		}
	</style>
</head>
<body>
<div id="nav_bg">
<ul>
	<li><a href="indexh.php">SIGN-OUT</a></li>
	<li><a href="add.php">ADD NEW DATA</a></li>
	<li><a href="create.php">CREATE NEW ACCOUNT</a></li>
</ul>
</body>
</div>
<br>
<br>
<br>
<div id="form">
<fieldset>
<legend>ADMIN OPERATIONS</legend>
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
			echo "<td><a href=\"View.php?id=$row[Emp_No]\"><img src='vallbtn.png' alt='view' width='80px' height='40px'></a> |<a href=\"edit.php?id=$row[Emp_No]\"><img src='udbtn.png' alt='view' width='80px' height='30px'></a> | <a href=\"delete.php?id=$row[Emp_No]\" onClick=\"return confirm('Are you sure you want to delete?')\"><img src='dltbtn.png' alt='view' width='80px' height='30px'></a></td>";   
		?>
	<?php endwhile; ?>
</table>
</fieldset>
</div>
</body>
</html>