<html>
	<head>
	</head>
	<body>
	<?php include("../db_connection.php")?>
	<?php include ("topMenu.php")?>
	<form name = "login-form" method="POST" action="addStudentProcess.php">
	<h3 align="center"> Add Student </h3>
	<table align="center" style="border-collapse: collapse;" cellpadding="15px">
		<tr>
			<td >Student ID: </td>
			<td > <input type="text" name="studentid" id="studentid" /></td>
		</tr>
		<tr>
			<td >Student Name: </td>
			<td > <input type="text" name="studentname" id="studentname" /></td>
		</tr>
		<tr>
			<td >Year of Enrollment: </td>
			<td ><input type="number" min="1900" max="2035" step="1" value="2020" name="yearofenrollment" id="yearofenrollment"/></td>
		</tr>
		
		<tr>
			<td >Major: </td>
			<td ><input type="text" name="major" id="major" /></td>
		</tr>
		
		<tr>
			<td >GPA: </td>
			<td ><input type="number" name="gpa" id="gpa" min="0.0" max="4.0" step=".1" value="3.0" /></td>
		</tr>
		
		<tr>
			<td >Year of Graduation: </td>
			<td><input type="number" min="1900" max="2099" step="1" value="2020" name="yearofgrad" id="yearofgrad"/></td>
		</tr>
		
		<td colspan="2" align="center"><input type="submit" value="Add Student"/></td>
		</table>
	</form>
	<hr>
</html>