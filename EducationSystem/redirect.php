<?php 
session_start();
if($_POST['captcha'] != $_SESSION['digit']){
	header('location: login-error.php');
	die("The entered CAPTCHA was incorrect");
	session_destroy();
}
?>

<!DOCTYPE html>
<html>


<body>

<?php

include ("db_connection.php");

$uid=($_POST['userid']);
$pwd=($_POST['password']);


		$sql="SELECT * FROM users_tab where userid='$uid' AND password='$pwd'";
		$result=$connect->query($sql);
		$row = $result->fetch_assoc(); 
 
      if($row['role']==='S')  //Students
      {

        $_SESSION['id']=$uid;
        $_SESSION['pwd']=$pwd;
		$_SESSION['role'] = "S";
        header('location: /EducationSystem/student/index.php');
		 
     }
	 elseif($row['role']==='F')  //Faculty
      {

        $_SESSION['id']=$uid;
        $_SESSION['pwd']=$pwd;
		$_SESSION['role'] = "F";
         header('location: /EducationSystem/faculty/index.php');
		 
     }
	 elseif($row['role']==='A')  //Admin
      {

        $_SESSION['id']=$uid;
        $_SESSION['pwd']=$pwd;
		$_SESSION['role'] = "A";
         header('location: /EducationSystem/admin/index.php');
		 
     }

     
	 else
	 {
		   header('location: login-error.php');
	 }
 

//-------------------------------Login Failed---------------------
     


?>




</html>