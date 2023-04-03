<?php

$host = "localhost";
$dbname = "cen4010sp23g22";
$username = "cen4010sp23g22";
$password = "ASpring#2023";

$name = $_POST['username'];
$email = $_POST['email'];
$user_password = $_POST['password'];

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno){
	die("Connection error: " . $mysqli->connect_error);
}

if (empty($_POST["username"])) {
	die("Name is required.");
}

if (empty($_POST["password"])){
	die("Password is required.");
}


if ($_POST["password"] !== $_POST["password_confirmation"]){
	die("The passwords entered do not match.");
}


$sql = "INSERT INTO user_login (name, email, password)
	VALUES('$name', '$email', '$user_password')";

if ($mysqli->query($sql) === TRUE) {
  header("Location: http://lamp.cse.fau.edu/~cen4010-sp23-g22/login/");
	$mysqli->close();
	exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>