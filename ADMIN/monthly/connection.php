<?php
	//for MySQLi OOP
	$conn = new mysqli('sql12.freemysqlhosting.net', 'sql12669220', 'DeTjqCaHHy', 'sql12669220');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}

	// private $host = "sql12.freemysqlhosting.net";
    // private $user = "sql12669220";
    // private $password = "DeTjqCaHHy";
    // private $database = "sql12669220";
	////////////////

	//for MySQLi Procedural
	// $conn = mysqli_connect('localhost', 'root', '', 'mydatabase');
	// if(!$conn){
	//     die("Connection failed: " . mysqli_connect_error());
	// }
	////////////////
?>