<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		date_default_timezone_set('Asia/Manila');
		$amount = $_POST['amount'];
		$status = $_POST['status'];
		$sql = "INSERT INTO tbl_company_rental_setting (amount, status, date_created) VALUES ('$amount', '$status', NOW())";
		if($status == 'ACTIVE'){
			$sql2 = "UPDATE tbl_company_rental_setting SET status = 'DEACTIVE' WHERE status = 'ACTIVE'";
			if($conn->query($sql2) && $conn->query($sql)){
				$_SESSION['success'] = 'Member added successfully';
			}
		}else{
			if($conn->query($sql)){
				$_SESSION['success'] = 'Member added successfully';
			}
		}


	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>