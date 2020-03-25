<?php include "auth.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<h1>Welcome, <?php echo $_SESSION["user"]; ?></h1>
		<p><a href="logout.php" class="button button_style">Log Out</a></p>
	</body>
</html> 