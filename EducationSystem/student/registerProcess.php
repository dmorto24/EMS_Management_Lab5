<?php 
session_start();
$uid=$_SESSION['id'];
include("../db_connection.php");
$course_id = $_POST['course_id'];
$sql = "SELECT * FROM course_tab WHERE course_id = '$course_id'";
$result=$connect->query($sql);
$row=$result->fetch_assoc();
$letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$nums = '0123456789';
$reg_id = substr(str_shuffle($letters),0,3).'-'.substr(str_shuffle($nums),0,4);
$fac_id = $row['fac_id'];
$offered = $row['offered_in'];
if($connect->query("INSERT INTO registration_tab (reg_id, course_id,stu_id,fac_id,semester) VALUES ('$reg_id','$course_id','$uid','$fac_id','$offered')") === TRUE){
?>
	<script>
		alert("Successful Registration!");
		window.location.href = "registerCourses.php";
	</script>
<?php
}
?>