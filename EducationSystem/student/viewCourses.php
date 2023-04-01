<?php 
include ("../db_connection.php");
session_start();
$uid=$_SESSION['id'];?>
<html>
<head>
 Logged In as: <?php echo $uid;?>
 <?php include ("topMenu.php");?>
 <br> 
</head>
<body>
<h2> Courses Available to you </h2> 
	<?php 
		$sql="SELECT * FROM course_tab";
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
				echo "Offered in: ".$row['offered_in']."<br>";
				echo "Credits: ".$row['credits']."<br>";
				echo "Prerequisites: ".$row['pre_req']."<br>";
				echo "Type: ".$row['type'];
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