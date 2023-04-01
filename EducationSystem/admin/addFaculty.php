<html>
	<head>
	</head>
	<body>
	<?php include("../db_connection.php")?>
	<?php include ("topMenu.php")?>
	<form name = "login-form" method="POST" action="addFacultyProcess.php">
	<h3 align="center"> Add Faculty </h3>
	<table align="center"  style="border-collapse: collapse;" cellpadding="15px">
		<tr>
			<td >Faculty ID: </td>
			<td > <input type="text" name="facultyid" id="facultyid" /></td>
		</tr>
		<tr>
			<td >Faculty Name: </td>
			<td > <input type="text" name="facultyname" id="facultyname" /></td>
		</tr>
		<tr>
			<td >Date of Join: </td>
			<td ><input type="date"  name="doj" id="doj"/></td>
		</tr>
		
		<tr>
			<td >Qualification: </td>
			<td ><input type="textarea" name="qual" id="qual" /></td>
		</tr>
		
		<tr>
			<td >Department: </td>
			<td ><input type="text" name="department" id="department"/></td>
		</tr>
		
		<td colspan="2" align="center"><input type="submit" value="Add Faculty"/></td>
		</table>
	</form>
	<hr>
</html>