<?php

include("../db_connection.php");

$id = $_POST['courseid'];
$name = $_POST['coursename'];
$facid = $_POST['facid'];
$offered = $_POST['offered'];
$credits = $_POST['credits'];
$prereq = $_POST['prereq'];
$type = $_POST['type'];



$sql = "INSERT INTO course_tab (course_id,course_name,fac_id,offered_in,credits,pre_req,type) 
		VALUES ('$id','$name', '$facid', '$offered','$credits','$prereq','$type')";
		
$result = $connect->query($sql);

if ($result == FALSE){
	echo "Error: ".$connect->error;
}
header('location: index.php');
?>