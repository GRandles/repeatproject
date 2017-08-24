<?php
 session_start();
?>
<!DOCTYPE html>
<html >
<head>
	<link rel="stylesheet" href="assets\css\login.css">
	<?php
	if (!isset ($_SESSION)) {
		session_start();
	}
	session_unset();
	session_destroy();	
	?>
</head>
<body>
	<div class="login-page">
		<h1> Logged Out </h1>
		<p> You have successfully Logged out</p>
	</div>
</body>
</html>