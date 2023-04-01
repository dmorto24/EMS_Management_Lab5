<?php

include("../db_connection.php");

$id = $_POST['depid'];
$name = $_POST['depname'];
$depchair = $_POST['depchair'];
$depdean = $_POST['depdean'];
$budget = $_POST['budget'];

$sql = "INSERT INTO department_tab (dept_id,dept_name,dept_chair,dept_dean,budget) 
		VALUES ('$id','$name', '$depchair', '$depdean','$budget')";
		
$result = $connect->query($sql);

if ($result == FALSE){
	echo "Error: ".$connect->error;
}
header('location: index.php');
?>