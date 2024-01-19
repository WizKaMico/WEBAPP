<?php
	//for MySQLi OOP
	$conn = new mysqli('localhost', 'root', '', 'capstone_app');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}


	// asasas
	////////////////

	//for MySQLi Procedural
	// $conn = mysqli_connect('localhost', 'root', '', 'mydatabase');
	// if(!$conn){
	//     die("Connection failed: " . mysqli_connect_error());
	// }
	////////////////
?>