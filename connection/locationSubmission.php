<?php
// Retrieve latitude, longitude, and address sent via POST request
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$address = $_POST['address'];
$code = $_POST['code'];

// Establish connection to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "capstone_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute SQL query to insert data into the table
$sql = "INSERT INTO location_data (code, latitude, longitude, address) VALUES ('$code', '$latitude', '$longitude', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Location data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
