<?php 
//hancurkan session
	session_start();
	$_SESSION = [];
	session_unset();
	session_destroy();//hancurkan sewssionS

	header("Location: login.php");
	exit;
 ?>