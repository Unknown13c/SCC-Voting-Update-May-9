<?php
	require 'dbconnector/dbcon.php';
	session_start(); 
	if(!ISSET($_SESSION['voters_id'])){
		header("location:login.php");
	}else{
		$session_id=$_SESSION['voters_id'];
		$user_query = $conn->query("SELECT * FROM voters WHERE voters_id = '$session_id'") or die(mysqli_errno());
		$user_row = $user_query->fetch_array();
		$user_username = $user_row['firstname']." ".$user_row['lastname'];
		$idno = $user_row['id_number'];
	}
?>