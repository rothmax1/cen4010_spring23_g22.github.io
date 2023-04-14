<?php
include 'database.php';
$search_term = $_POST["search"];
$sql = "SELECT * FROM majors WHERE name LIKE '%{$search_term}%'";
$result = mysqli_query($mysqli, $sql);

while ($row = mysqli_fetch_assoc($result)){
	$name = $row['name'];
	echo $name . "\t";
	$link = $row['url'];
	echo $link . "<br>";
}
?>
