<?php
session_start(); // start the session
session_destroy(); // destroy the session
header("Location: login.php"); // redirect the user to the login page
exit();
?>