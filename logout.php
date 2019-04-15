<?php 
	session_start();
	unset($_SESSION['username']);
	session_destroy();
	if(!$_SESSION['username'] == true) {
		header("Location: login.php");
	}
	
 ?>