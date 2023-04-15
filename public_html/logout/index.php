<?php
session_start();
session_destroy();
header("Location: http://lamp.cse.fau.edu/~cen4010-sp23-g22/login/");
exit;
?>
