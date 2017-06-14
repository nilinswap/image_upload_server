<?php
	session_start();
	//session_destroy();
	unset($_SESSION['logged_in']);
	unset($_SESSION['username']);
	header("Location: index.php");
?>