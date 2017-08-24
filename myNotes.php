<?php
  session_start();
  if(!isset($_SESSION['username'])) {header("Location: index.php");}
?>
<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>My Notes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header">
					
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<?php
									printf("<li><a href=\"./homePage.php\">Home</a></li>");
									printf("<li><a href=\"./createNote.php\">New Note</a></li>");
									printf("<li class=\"current\"><a href=\"./myNotes.php\">My Notes</a></li>");
									printf("<li><a href=\"./logOut.php\">Log Out</a></li>");
									?>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">

						<!-- Content -->
							<?php
							include 'connect.php';
							$currentU = $_SESSION["username"];
							$sql = "SELECT notes.* FROM notes  WHERE username = '$currentU'";
							$result = mysqli_query($conn,$sql);
							
							if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
									$author=$row["username"];
									$title=$row["title"];
									echo "<h2><a href =\"./viewNote.php?author=$author&title=$title\">" . $row["title"]."</h2>";
								}       
							}
							$conn->close();
							?>
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
