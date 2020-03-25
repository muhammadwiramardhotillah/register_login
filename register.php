<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<h1>Register Page</h1>
		<p><a href="index.php" class="button button_style">Login</a></p>
		<div>
			<form action="register-action.php" method="post">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" placeholder="Your name..">
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="Your email..">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" placeholder="Your password..">
				<input type="submit" value="Register">
			</form>
		</div>
	</body>
</html> 