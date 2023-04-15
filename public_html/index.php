<?php
session_start();




if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
	header("Location: http://lamp.cse.fau.edu/~cen4010-sp23-g22/login/");
}

?>

<!DOCTYPE html>
<html lang=eng>
<head>
<meta charset="utf-8" />
</head>
<h1>The Integrator</h1>
<body>
<form method="post" action="major-search.php">
<h2>Search Majors</h2>
<input type="text" name="search">
</form>
<form method="post" action="career-path-search.php">
<h2>Search Career Paths</h2>
<input type="text" name="search">
</form>
</body>
</html>
