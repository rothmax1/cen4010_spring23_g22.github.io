<?php

include 'database.php';

$name = $_POST["username"];
$email = $_POST["email"];

if (empty($_POST["username"])) {
	die("Name is required.");
}

if (empty($_POST["password"])){
	die("Password is required.");
}


if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
	die("Valid email is required.");	
}

if ($_POST["password"] !== $_POST["password_confirmation"]){
	die("The passwords entered do not match.");
}

$password_hash=password_hash($_POST["password"], PASSWORD_BCRYPT);

$sql = "INSERT INTO user_login (name, email, password)
	VALUES('$name', '$email', '$password_hash')";

if ($mysqli->query($sql) === TRUE) {
  header("Location: http://lamp.cse.fau.edu/~cen4010-sp23-g22/login/");
	$mysqli->close();
	exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
