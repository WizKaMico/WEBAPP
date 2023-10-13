<?php
require_once "../connection/ApiController.php";

$portCont = new appController();

$ownerList = $portCont->getTotalOwnerList();

// Encode the data as JSON
$jsonData = json_encode($ownerList);

// Set the appropriate content type header
header('Content-Type: application/json');

echo $jsonData;
// Output the JSON data
?>
