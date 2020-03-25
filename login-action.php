<?php 
include "connection.php";

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM student WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row) {
	if (password_verify($password, $row['password'])) {
		session_start();
		$data = $_SESSION['user'] = $email;
		header("location: home.php");
	} else {
		echo "GABISA LOGIN";
	}
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>