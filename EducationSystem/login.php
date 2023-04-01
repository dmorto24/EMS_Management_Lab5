<!DOCTYPE html>
<?php include("header.php");?>
<html>
  <head>
    <title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	
 </head>
  <body>
      <h2>Login Form</h2>
      <hr>
    <form name="login-form" method="POST" action="redirect.php">
      <table  border="0">
        <tr>
          <td>User ID:</td>
          <td><input type="text" name="userid" id="userid"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
          <td><img src="captcha.php" width="120" height="30" alt="CAPTCHA"></td>
            <td><input type="text" name="captcha" size="6" maxlength="5"> </td>
        </tr>
        <tr>
          <td colspan="2" align="right"><input type="submit" value="Login"></td>
        </tr>
      </table>
    </form>
    <hr>
  </body>
</html>