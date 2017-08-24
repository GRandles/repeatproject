<?php
	include 'connect.php';
	$username = (isset($_POST['username'])?$_POST['username']:'');
	$firstName = (isset($_POST['firstName'])?$_POST['firstName']:'');
	$lastName = (isset($_POST['lastName'])?$_POST['lastName']:'');
	$email = (isset($_POST['email'])?$_POST['email']:'');
	$password = (isset($_POST['passw'])?$_POST['passw']:'');
		
	$sql="INSERT INTO `users`(`username`,`firstname`, `lastname`, `email`,  `password`) VALUES ('$username', '$firstName', '$lastName', '$email',  '$password');";
	mysqli_multi_query($conn, $sql) or die("MySQL Error: " . mysqli_error($conn) . "<hr>\nQuery: $sql");
	if(mysqli_affected_rows($conn)>0){
	  header("Location: index.php");
	}
	else{  header("Location: RegistrationForm.php");}
	$conn->close();
?>