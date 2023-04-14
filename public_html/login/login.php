<?php

session_start();

include 'database.php';

$user = $_POST["username"];
$user_password = $_POST["password"];

if (empty($_POST["username"])) {
	die("Name is required.");
}


if (empty($_POST["password"])){
	die("Password is required.");
}

$sql = "SELECT * FROM user_login WHERE name='$user'"; 
$result = mysqli_query($mysqli, $sql);
$user = $result->fetch_assoc();

if($user){
	if (password_verify($user_password, $user["password"])){
		$_SESSION['loggedin']=true;
		header("Location: http://lamp.cse.fau.edu/~cen4010-sp23-g22/");
	} else{
		echo "Password incorrect.";
	}
}
else {
echo "User not found.\n";
}
?>
