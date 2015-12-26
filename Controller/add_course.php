<?php
include '../View/connection.php';
$course_code = $_POST['CC'];
$course_name = $_POST['CN'];

$query = "INSERT INTO `drive_db`.`course`(`course_code`,`course_name`,`dep_id`) 
					  VALUES ('$course_code','$course_name','15')";
if($GLOBALS['conn']->query($query)===TRUE)
{
	echo "New Record Added";
}else{
	echo "ERROR ".$GLOBALS['conn']->error;
}
header('Location: ../View/dep.php');
?>