<?php

session_start();

$host = "localhost";
$dbname = "cen4010sp23g22";
$username = "cen4010sp23g22";
$password = "ASpring#2023";

$name = $_POST["username"];
$userpassword = $_POST["password"];

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
echo "still good";
$sql = "SELECT * FROM user_login WHERE name="'$name' AND password='$userpassword'"; 
$result = mysqli_query($mysqli, $sql);
echo "still good";
?>