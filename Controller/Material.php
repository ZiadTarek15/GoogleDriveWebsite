<?php
include '../View/connection.php';
session_start();

$course_code = 1;//$_SESSION['course_id']];
$mat_type = 'Sheets';//$_SESSION['mat_type']];
$mat_year = 2015;//$_SESSION['mat_year']];
$mat_content=$_POST['matContent'];
$matname=$_POST['matname'];

$sql = "INSERT INTO `drive_db`.`material` (`mat_name`,`mat_content`,`mat_type`,`mat_year`,`course_code`)  
VALUES ('$matname','$mat_content','$mat_type','$mat_year','$course_code')"; 

if ($GLOBALS['conn']->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
}
				  

?>