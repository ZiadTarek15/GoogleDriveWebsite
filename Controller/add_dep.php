<?php
include '../View/connection.php';
$dep_id = $_POST['ID'];
$dep_name = $_POST['DN'];
$class = $_POST['DC'];
$year = $_POST['DY'];

$query = "INSERT INTO `drive_db`.`department`(`dep_id`,`dep_name`,`year`,`class`) 
					  VALUES ('$dep_id','$dep_name','$year','$class')";
if($GLOBALS['conn']->query($query)===TRUE)
{
	header('Location: ../View/Home.php');
}else{
	echo "ERROR ".$GLOBALS['conn']->error;
}
?>