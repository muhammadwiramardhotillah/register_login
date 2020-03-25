<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<h1>Login Page</h1>
		<p><a href="register.php" class="button button_style">Register</a></p>
		<div>
			<form action="login-action.php" method="post">
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="Your email..">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" placeholder="Your password..">
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html> 