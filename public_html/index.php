<?php
session_start();
echo "hello world!";



if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
	header("Location: http://lamp.cse.fau.edu/~cen4010-sp23-g22/login/");
}


?>

<!DOCTYPE html>
<html lang=eng>
<head>
<meta charset="utf-8" />
</head>
<body>
<form method="post" action="major-search.php">
<input type="text" name="search">
</form>
</body>
</html>
