<html>
	<head>
	</head>
	<body>
	<?php include("../db_connection.php")?>
	<?php include ("topMenu.php")?>
	<form name = "login-form" method="POST" action="addDepartmentProcess.php">
	<h3 align="center"> Add Department </h3>
	<table align="center"  style="border-collapse: collapse;" cellpadding="15px">
		<tr>
			<td >Department ID: </td>
			<td > <input type="text" name="depid" id="depid" /></td>
		</tr>
		<tr>
			<td >Department Name: </td>
			<td > <input type="text" name="depname" id="depname" /></td>
		</tr>
		<tr>
			<td >Department Chair: </td>
			<td ><input type="text"  name="depchair" id="depchair"/></td>
		</tr>
		
		<tr>
			<td >Department Dean: </td>
			<td ><input type="textarea" name="depdean" id="depdean" /></td>
		</tr>
		
		<tr>
			<td >Budget: </td>
			<td ><input type="text" name="budget" id="budget"/></td>
		</tr>
		
		<td colspan="2" align="center"><input type="submit" value="Add D"/></td>
		</table>
	</form>
	<hr>
</html>