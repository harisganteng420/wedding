<?php
	session_start();
	session_unset();
	session_destroy();

	$_SESSION["email"];
	$_SESSION["pass"];
	
	unset($_SESSION["email"]);
	unset($_SESSION["pass"]);
?>
