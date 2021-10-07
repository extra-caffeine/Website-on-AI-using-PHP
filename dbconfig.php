<?php 
	//dbConfig.php
	$host="localhost";
	$username="root";
	$password="";
	$database="ai";
	$cn = mysqli_connect($host, $username, $password, $database);
	if (!$cn) {
		die("Connection failed. Error: " . mysqli_connect_error());
	}
?>