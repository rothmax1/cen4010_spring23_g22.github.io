<?php

session_start();

include 'database.php';

$name = $_POST["username"];
$userpassword = $_POST["password"];


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
