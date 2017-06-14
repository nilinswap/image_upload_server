<?php
	session_start();
	if(isset($_SESSION['li']))
		$_SESSION['li']+=1;
	else
		$_SESSION['li']=1;
	echo $_SESSION['li'];
?>