<?php 

	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "img_zone";

	$conn = mysqli_connect($host, $user, $password, $db);

	if ($conn->connect_error) {
	   die("Connection failed: " . $conn->connect_error);
	}
 ?>