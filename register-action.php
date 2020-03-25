<?php 
include "connection.php";

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO student (name, email, password)
					VALUES ('$name', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    header("location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>