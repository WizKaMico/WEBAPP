<?php
require_once "../connection/ApiController.php";

$portCont = new appController();

$clientList = $portCont->getTotalClientList();

// Encode the data as JSON
$jsonData = json_encode($clientList);

// Set the appropriate content type header
header('Content-Type: application/json');

echo $jsonData;
// Output the JSON data
?>
