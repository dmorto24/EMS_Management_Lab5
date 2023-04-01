<html>
	<head>
	</head>
	<body>
	<?php include("../db_connection.php")?>
	<?php include ("topMenu.php")?>
	<form name = "login-form" method="POST" action="addCourseProcess.php">
	<h3 align="center"> Add Course </h3>
	<table align="center"  style="border-collapse: collapse;" cellpadding="15px">
		<tr>
			<td >Course ID: </td>
			<td > <input type="text" name="courseid" id="courseid" /></td>
		</tr>
		<tr>
			<td >Course Name: </td>
			<td > <input type="text" name="coursename" id="coursename" /></td>
		</tr>
		<tr>
			<td >Faculty ID: </td>
			<td ><input type="text"  name="facid" id="facid"/></td>
		</tr>
		
		<tr>
			<td >Offered In: </td>
			<td ><input type="textarea" name="offered" id="offered" /></td>
		</tr>
		
		<tr>
			<td >Credits: </td>
			<td ><input type="number" name="credits" id="credits" min="1" max="5" step="1" value="3"/></td>
		</tr>
		<tr>
			<td> Prerequisites: </td>
			<td><input type="text" name="prereq" id="prereq"/></td>
		</tr>
		<tr>
			<td> Type: </td>
			<td><input type="text" name="type" id="type"/></td>
		</tr>
		
		<td colspan="2" align="center"><input type="submit" value="Add Course"/></td>
		</table>
	</form>
	<hr>
</html>