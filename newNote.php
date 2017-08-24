<?php
  session_start();
  include 'connect.php';
	$username = $_SESSION["username"];
	$title = (isset($_POST['title'])?$_POST['title']:'');
	$note = (isset($_POST['note'])?$_POST['note']:'');
	$visibility = (isset($_POST['visibility'])?$_POST['visibility']:'');
	if($visibility == 'public') {
		$visibility = 0;
	} else {
		$visibility = 1;
	}
	$sql="INSERT INTO notes (`username`, `title`, `text`, `visibility`) VALUES ('$username', '$title', '$note', $visibility);";
	mysqli_multi_query($conn, $sql) or die("MySQL Error: " . mysqli_error($conn) . "<hr>\nQuery: $sql");
	if(mysqli_affected_rows($conn)>0){
	  header("Location: homePage.php");
	}
	else{  header("Location: createNote.php");}
	$conn->close();
?>
