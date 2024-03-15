<?php
require_once "../connection/ApiController.php";

$portCont = new appController();

$tracking = $_GET['tracking'];

$myMessage = $portCont->checkNewMessage($tracking);

// Encode the data as JSON
$jsonData = json_encode($myMessage);

// Set the appropriate content type header
header('Content-Type: application/json');

echo $jsonData;
// Output the JSON data
?>
