<?php

session_start();

if(empty($_SESSION['id_admin'])) {
	header("Location: dashboard.php");
	exit();
}


require_once("../db.php");
if(isset($_GET)) {

	//Delete Company using id and redirect
	$sql = "UPDATE stipend_applications SET status='2' WHERE id_application='$_GET[id]'";
	if($conn->query($sql)) {
		header("Location: temp.php");
		exit();
	} else {
		echo "Error";
	}
}

