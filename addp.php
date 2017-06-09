<?php include 'config.php'; ?>
<?php
//initializing values 
$empno = $_POST['empno'];
	$name = $_POST['name'];
	$srno = $_POST['srno'];
	$recv = $_POST['recv'];
	$lcode = $_POST['lcode'];
	$empcode = $_POST['empcode'];
	$empdsgn = $_POST['empdsgn'];
	$cmts = $_POST['cmts'];
$sql = "INSERT INTO laptop (Emp_No, Name, Serial_No, Received, Loc_Code, Emp_Code, Emp_Design, Comments) VALUES ($empno,'$name','$srno','$recv','$lcode','$empcode','$empdsgn','$cmts')";
$result = $mysqli->query($sql);
header("Location:admin.php");
?>