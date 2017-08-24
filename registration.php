<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Registration</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">

						<!-- Content -->
							<form action="newUser.php" method="POST">
								<h1> Registration Form </h1>
									<div>
													<input type="text" placeholder="Username" pattern="[A-Za-z]{3,}" name="username" required oninvalid="setCustomValidity('Please enter a username, letters only')"/>
											</div>
								<div>
												<input type="text" placeholder="First Name" name="firstName" required/>
								</div>
								<div>
												<input type="text" placeholder="Last Name" name="lastName" required/>
									</div>
									<div>
													<input type="email" name="email"placeholder="Enter your email" required oninvalid="setCustomValidity('Please enter a valid email')"/>
									</div>
								<div> 
										<input type="Password"  pattern="[a-zA-Z0-9]{8,}" placeholder="Password" name="passw" required  oninvalid="setCustomValidity('Password must be at least 8 characters long')"/>
								</div>			   
								<div>
												<input type="submit" value="Register" name="register">
									<a href="index.php">Cancel</a>
								</div>
							</form>
					</div>
				</div>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>