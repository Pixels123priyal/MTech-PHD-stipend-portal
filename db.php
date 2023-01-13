<?php

//Your Mysql Config
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stipendportal";

//Create New Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$conn=mysqli_connect("localhost","root","","git_repos_jobportal");

//Check Connection
if($conn->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}
?>