<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/styles.css">

<?php 
session_start(); // start the session

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

 
 <?php include ("topMenu.php");?>
 <br>
 <center><h3> Welcome <?php echo $uid;?><h3></center>
  <br>
</head>
<body> 
<br>
	<?php 
		$sql="SELECT * FROM faculty_tab where fac_id='$uid'";
		$result=$connect->query($sql);
		$row = $result->fetch_assoc();
	?>
	Name: <?php echo $row['fac_name'];?><br>
	Date Joined: <?php echo $row['fac_DOJ'];?><br>
	Qualifications: <?php echo $row['qualification'];?><br>
	Department: <?php echo $row['department'];?><br>
	<h3>Your Courses</h3>
	<?php 
		
		$sql="SELECT * FROM course_tab WHERE fac_id='$uid'";
		$result=$connect->query($sql);
		
		
		
		$count=1;
		$total=1;
		echo "<table align='center'>";
		echo "<tr>";
		
		while($row = $result->fetch_assoc())
		{
			$currentcourse = $row['course_id'];
			echo "<td>";
				echo $row['course_id']."-";
				echo $row['course_name']."<br>";
				echo "Offered: ".$row['offered_in']."<br>";
				echo "Credits: ".$row['credits']."<br>";
				echo "Prereqs: ".$row['pre_req']."<br>";
				echo "Type: ".$row['type']."<br>";
				echo "Students Registered: <br>";
				$sql2 = "SELECT * FROM registration_tab WHERE course_id = '$currentcourse'";
				$results = $connect->query($sql2);
				while($row2 = $results->fetch_assoc()){
					echo $row2['stu_id']."<br>";
				}
			echo "</td>";
			$count++;
			if($count==4){
				echo "</tr><tr>";
				$count=1;
			}
		}
		echo "</table>";?>
</body>
</html>
<?php }
?>