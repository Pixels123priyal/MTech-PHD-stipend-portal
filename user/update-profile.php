<?php

//To Handle Session Variables on This Page
session_start();

// if(empty($_SESSION['id_user'])) {
//   header("Location: ../index.php");
//   exit();
// }

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("../db.php");

//if user Actually clicked update profile button
if(isset($_POST)) {

	//Escape Special Characters
	$firstname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lname']);
	$mob = mysqli_real_escape_string($conn, $_POST['contactno']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

	$uploadOk = true;

	//Update User Details Query
	$sql = "UPDATE student SET fname='$firstname', lname='$lastname',mob='$mob',gender = '$gender',email = '$email'";


	$sql .= " WHERE id_student='$_SESSION[id_student]'";

	if($conn->query($sql) === TRUE) {
		$_SESSION['name'] = $fname.' '.$lname;
		//If data Updated successfully then redirect to dashboard
		header("Location: index.php");
		exit();
	} else {
		echo "Error ". $sql . "<br>" . $conn->error;
	}
	//Close database connection. Not compulsory but good practice.
	$conn->close();

} else {
	//redirect them back to dashboard page if they didn't click update button
	header("Location: edit-profile.php");
	exit();
}