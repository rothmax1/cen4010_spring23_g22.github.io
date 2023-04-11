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

$sql = "SELECT * FROM user_login WHERE name='$name' AND password='$userpassword'"; 
$result = mysqli_query($mysqli, $sql);

if ($result->num_rows>0){
	$_SESSION['loggedin']=true;
	header("Location: http://lamp.cse.fau.edu/~cen4010-sp23-g22/");;
} else{
	echo "Username or Password incorrect.";
}
?>
