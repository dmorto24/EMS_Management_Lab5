<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<?php 
session_start(); // start the session

include ("../db_connection.php");
?>
<?php
if($_SESSION['role'] != "A") {
	echo "You are trying to access the ADMIN ONLY Page. <a href='../login.php'>Login Again</a>";
	session_destroy(); 
} else {
	include ("../db_connection.php");
	$uid = $_SESSION['id'];
?>
<?php include ("topMenu.php")?>


welcome back admin
</html>
<?php }
?>