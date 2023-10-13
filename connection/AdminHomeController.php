<?php 
include('../connection/LoginSession.php');
require_once "../connection/ApiController.php";
$portCont = new appController();

$userSession = $portCont->getUserDetails($session_id);
$code = $userSession[0]['code'];
$userDetails = $portCont->getUserCompleteDetails($code);
$bookToday = $portCont->getBookingToday();
$regClient = $portCont->getTotalClient();
$regOwner = $portCont->getTotalOwner();
$totalBooking = $portCont->getTotalBooking();
$totalPromo = $portCont->getTotalPromo();
$totalService = $portCont->getTotalService();
?>