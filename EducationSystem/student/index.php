<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/styles.css">

<?php 
session_start(); // start the session

include ("../db_connection.php");
?>
<?php
if($_SESSION['role'] != "S") {
	echo "You are trying to access a STUDENT ONLY Page. <a href='../login.php'>Login Again</a>";
	session_destroy(); 
} else {
	include ("../db_connection.php");
	$uid = $_SESSION['id'];
?>


	<title>Welcome <?php echo $uid;?></title>
	<?php include ("topMenu.php");?>
</head>
<body> 
	<?php 
		$sql = "SELECT * FROM student_tab where stu_id='$uid'";
		$result = $connect->query($sql);
		$row = $result->fetch_assoc();
	?>
	Name: <?php echo $row['stu_name'];?><br>
	Enrolled: <?php echo $row['stu_year_of_enrollment'];?><br>
	Major: <?php echo $row['sut_major'];?><br>
	GPA: <?php echo $row['cgpa'];?><br>
	Graduating: <?php echo $row['year_of_graduation'];?>
</body>
</html>

<?php
}
?>
