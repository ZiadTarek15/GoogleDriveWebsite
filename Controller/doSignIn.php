<?php
include '../View/connection.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM academic_staff WHERE as_email = '$email'";
if($GLOBALS['conn']->query($query)!=false)
{
	$row = mysqli_fetch_array($GLOBALS['conn']->query($query));
	if($row['as_pass'] == $password)
	{
		$_SESSION['user'] = $row['as_id'];
		echo "Signed in successfully";
		header('Location: ../View/Home.php');
	}
	else{
		echo "Wrong Email or Password";
	}
}
else{
	echo "ERROR: " .mysql_error();
}
?>