<?php
include 'db.php';
session_start();

if (isset($_POST['submit']))
{
$month_year = $_POST['MY'];
$name = $_POST['name'];
$roll_no = $_POST['roll_no'];
$field = $_POST['field'];
$semester = $_POST['semester'];
$sal = $_POST['sal'];
$deets = $_POST['deets'];
$amo = $_POST['amo'];
$teacher = $_POST['teacher'];



$sql = "INSERT INTO `stipend_applications`(`roll_no`, `name`, `date`, `mtech`, `sem`, `financial_ast`, `financial_ast_from`, `financial_ast_amt`, `teacher`) VALUES ('$roll_no','$name','$month_year','$field','$semester','$sal','$deets','$amo','$teacher')";

	if(mysqli_query($conn, $sql))
{  
	$message = "Application has been completed successfully!";
    header("Location:register.php");
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>