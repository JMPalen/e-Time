<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['ID'])){
		$sql = "DELETE FROM office WHERE ID = '".$_GET['ID']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Office deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select Office to delete first';
	}

	header('location: index.php');
?>