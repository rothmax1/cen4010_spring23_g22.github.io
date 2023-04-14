<?php

$host = "localhost";
$dbname = "cen4010sp23g22";
$username = "cen4010sp23g22";
$password = "ASpring#2023";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno){
	die("Connection error: " . $mysqli->connect_error);
}

?>
