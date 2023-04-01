<?php

include("../db_connection.php");

$id = $_POST['facultyid'];
$name = $_POST['facultyname'];
$doj = $_POST['doj'];
$qual = $_POST['qual'];
$department = $_POST['department'];

$sql = "INSERT INTO faculty_tab (fac_id,fac_name,fac_DOJ,qualification,department) 
		VALUES ('$id','$name', '$doj', '$qual','$department')";
		
$result = $connect->query($sql);

if ($result == FALSE){
	echo "Error: ".$connect->error;
}
header('location: index.php');
?>