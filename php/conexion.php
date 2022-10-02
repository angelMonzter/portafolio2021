<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "portafolio";

	$conn = new mysqli($servername,$username,$password,$db) or die("connection failed");

	mysqli_set_charset($conn, 'utf8'); 

	if ($conn->connect_error) {

		echo $error -> $conn->connect_error;

	}
?>