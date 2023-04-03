<?php
session_start();
echo "hello world!";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
	header("Location: http://lamp.cse.fau.edu/~cen4010-sp23-g22/login/");
}
exit();

?>