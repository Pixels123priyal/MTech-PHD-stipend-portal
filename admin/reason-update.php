<?php

session_start();

if(empty($_SESSION['id_admin'])) {
	header("Location: dashboard.php");
	exit();
}

if(isset($_POST)){
    $reason = $_POST['reas'];   
    $name = $_POST['name'];
	//Delete Company using id and redirect
    $sql = "UPDATE stipend_applications SET reason = '$reason' WHERE name = '$name'";
	if($conn->query($sql)) {
		header("Location: dashboard.php");
		exit();
	} else {
		echo "Error";
	}
}