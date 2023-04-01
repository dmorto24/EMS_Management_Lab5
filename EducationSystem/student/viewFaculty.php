<?php 
include ("../db_connection.php");
session_start();
$uid=$_SESSION['id'];
?>
<html>
<head>
 Logged In as: <?php echo $uid;?>
 <?php include ("topMenu.php");?>
 <?php 
		$sql1="SELECT * FROM student_tab WHERE stu_id='$uid'";
		$result1=$connect->query($sql1);
		$row1=$result1->fetch_assoc();
		$major=$row1['sut_major'];?>
</head>
<body>
<h2> Your Faculty </h2> 
	<?php 
		$sql="SELECT * FROM faculty_tab WHERE department='$major'";
		$result=$connect->query($sql);
		
		$count=1;
		$total=1;
		echo "<table align='center'>";
		echo "<tr>";
		
		while($row = $result->fetch_assoc())
		{
			echo "<td>";
				echo $row['fac_id']."-";
				echo $row['fac_name']."<br>";
				echo "Joined: ".$row['fac_DOJ']."<br>";
				echo "Qualification: ".$row['qualification']."<br>";
				echo "Department: ".$row['department']."<br>";
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