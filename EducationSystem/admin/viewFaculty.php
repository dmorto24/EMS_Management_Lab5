<?php 
include ("../db_connection.php");
 include ("topMenu.php");
		$sql="SELECT * FROM faculty_tab";
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
				echo "Joined on: ".$row['fac_DOJ']."<br>";
				echo "Qualifications: ".$row['qualification']."<br>";
				echo "Department: ".$row['department']."<br>";
			echo "</td>";
			$count++;
			if($count==4){
				echo "</tr><tr>";
				$count=1;
			}
		}
		echo "</table>";?>