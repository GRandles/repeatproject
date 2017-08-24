<?php
session_start();
include 'connect.php'; 
$myusername=$_POST['username']; 
$mypassword=$_POST['password'];
$sql="SELECT * FROM `users` WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
if($count==1){
	$_SESSION['username']= "$myusername";
	$_SESSION['password']= "$mypassword";
	header("Location: homePage.php");
} else {
  printf("Invalid username or password");
	echo "</br> <a href=\"#\" onclick=\"history.go(-1);\">Try Again!</a> ";
}
?>