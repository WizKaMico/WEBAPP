<?php
	session_start();
	include_once('../connection/connection.php');

	if(isset($_POST['edit'])){
		$raid = $_POST['raid'];
		$amount = $_POST['amount'];
		$status = $_POST['status'];
		$sql = "UPDATE tbl_company_rental_setting SET amount = '$amount', status = '$status' WHERE raid = '$raid'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>