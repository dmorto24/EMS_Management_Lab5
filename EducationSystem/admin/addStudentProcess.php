<?php

include("../db_connection.php");

$id = $_POST['studentid'];
$name = $_POST['studentname'];
$yearofenrollment = $_POST['yearofenrollment'];
$major = $_POST['major'];
$gpa = $_POST['gpa'];
$yearofgrad = $_POST['yearofgrad'];


$sql = "INSERT INTO student_tab (stu_id,stu_name,stu_year_of_enrollment,sut_major,cgpa,year_of_graduation) 
		VALUES ('$id','$name', '$yearofenrollment', '$major','$gpa', '$yearofgrad')";
		
$result = $connect->query($sql);

if ($result == FALSE){
	echo "Error: ".$connect->error;
}
header('location: index.php');
?>