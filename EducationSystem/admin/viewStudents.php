<?php 
include ("../db_connection.php");
 include ("topMenu.php");
		$sql="SELECT * FROM student_tab";
		$result=$connect->query($sql);
		$count=1;
		$total=1;
		echo "<table align='center'>";
		echo "<tr>";
		while($row = $result->fetch_assoc())
		{
			echo "<td>";
				echo $row['stu_id']."-";
				echo $row['stu_name']."<br>";
				echo "Enrolled: ".$row['stu_year_of_enrollment']."<br>";
				echo "Major: ".$row['sut_major']."<br>";
				echo "GPA: ".$row['cgpa']."<br>";
				echo "Graduating in: ".$row['year_of_graduation']."<br>";
			echo "</td>";
			$count++;
			if($count==4){
				echo "</tr><tr>";
				$count=1;
			}
		}
		echo "</table>";
?>