<?php
include 'connect.php';
$currentNote= $_GET['title'];
$sql="DELETE FROM `notes` WHERE title='$currentNote'";

if ($conn->query($sql) === TRUE) {
    $success_message = "Note deleted";
	header("Location: homePage.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>