<?php

session_start();

// if(empty($_SESSION['id_admin'])) {
// 	header("Location: dashboard.php");
// 	exit();
// }
require_once("../db.php");
if(isset($_POST)){
    $reason = $_POST['reas'];   
    $name = $_POST['name'];
    $message = $reason;
		echo "<script type='text/javascript'>alert('$message');</script>";
	//Delete Company using id and redirect
    $sql = "UPDATE stipend_applications SET reason = '$reason' WHERE name = '$name'";
	if($conn->query($sql)) {
		header("Location: dashboard.php");
		exit();
	} else {
		echo "Error";
	}
}