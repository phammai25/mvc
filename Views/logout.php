<?php
	session_start();
	session_destroy();
	header("Location:http://localhost/TT%20PHP/MVC_POST/index.php?url=login/check");
?>
