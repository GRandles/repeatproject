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
		<title>Create Note</title>
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
									printf("<li class=\"current\"><a href=\"./createNote.php\">New Note</a></li>");
									printf("<li><a href=\"./myNotes.php\">My Notes</a></li>");
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
							<h1>Create Note </h1>
							<form action="newNote.php" method="POST">
								<ul>
									<li>
										<label>Title</label>
										<input type="text" name="title"/>
									</li>
									<li>
										<label>Note</label>
										<textarea name="note" maxlength="4000"></textarea>
									</li>
									<li>
										<input type="radio" name="visibility" value="public" id="public"><label for="public">Public</label><br/>
										<input type="radio" name="visibility" value="private" id="private"><label for="private">Private</label><br/>
									</li>
								</ul>
								<input type="submit" value="Submit" name="submit"/>
							</form> 
							<a href="#" onclick="history.go(-1);">Back</a>  		
							
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
