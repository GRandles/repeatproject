<?php session_start(); ?>
<!DOCTYPE html>
<html >
<head>
	<link rel="stylesheet" href="assets\css\login.css">
  <meta charset="UTF-8">
  <title>Welcome</title>
</head>
<body>
	<div class="login-page">
		<div class="form">
			<form class="login-form" method="post" action="logInVal.php">
				<input name= "username" type="id" placeholder="ID" required="" id="username" />
				<input name="password" type="password" placeholder="Password" required="" id="password" />
				<button type="submit" name="submit">login</button>
				<p class="message">Not registered? <a href="registration.php">Create an account</a></p>
			</form>
		</div>
	</div>
</body>
</html>
