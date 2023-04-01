<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<?php 
session_start(); // start the session
include ("topMenu.php");
include ("../db_connection.php");
?>
<?php
if($_SESSION['role'] != "F") {
	echo "You are trying to access a FACULTY ONLY Page. <a href='../login.php'>Login Again</a>";
	session_destroy(); 
} else {
	include ("../db_connection.php");
	$uid = $_SESSION['id'];
?>
<?php 
		$sql="SELECT * FROM course_tab ";
		$result=$connect->query($sql);
		
		$count=1;
		$total=1;
		echo "<table align='center'>";
		echo "<tr>";
		
		while($row = $result->fetch_assoc())
		{
			echo "<td>";
				echo $row['course_id']."-";
				echo $row['course_name']."<br>";
				echo "Faculty: ".$row['fac_id']."<br>";
				echo "Offered: ".$row['offered_in']."<br>";
				echo "Credits: ".$row['credits']."<br>";
				echo "Prereqs: ".$row['pre_req']."<br>";
				echo "Type: ".$row['type']."<br>";
			echo "</td>";
			$count++;
			if($count==4){
				echo "</tr><tr>";
				$count=1;
			}
		}
		echo "</table>";
	}
?>
</html>