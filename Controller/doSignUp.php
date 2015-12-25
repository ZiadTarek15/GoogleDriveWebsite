<?php
include '../View/connection.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];


$query = "INSERT INTO `drive_db`.`academic_staff`(`fst_name`,`lst_name`,`as_email`,`as_pass`) 
					  VALUES ('$fname','$lname','$email','$password')";
if($GLOBALS['conn']->query($query)===TRUE)
{
	echo "New Record Added";
}else{
	echo "ERROR ".$GLOBALS['conn']->error;
}
?>