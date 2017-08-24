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
		<title>Notes</title>
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
							<?php
							include 'connect.php';
							$currentNote= $_GET['title'];
							$currentAuthor= $_GET['author'];
							$sql = "SELECT * FROM `notes` WHERE title='$currentNote'";
							$result = mysqli_query($conn,$sql);
							if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h2>" . $row["title"]. "</h2>";
									echo "<p>" . $row["text"]."</p>";
								}
							}
							$conn->close();
							if($currentAuthor == $_SESSION['username']) {
								echo "<a href=\"deleteNote.php?title=$currentNote\">Delete</a>";
							}
							?>
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
