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

<?php
include 'database.php';
$search_term = $_POST["search"];
$sql = "SELECT * FROM career_paths WHERE name LIKE '%{$search_term}%'";
$result = mysqli_query($mysqli, $sql);

while ($row = mysqli_fetch_assoc($result)){
	
	$name = $row['name'];
	echo $name . "\t";
	$link = $row['url'];
	echo "<a href='$link'>Link to page</a>" . "<br>";
}
?>
