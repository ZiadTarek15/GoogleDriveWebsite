<?php

require_once "../View/material.php";

$mat_content=$_POST['matContent'];
$matname=$_POST['matname'];

//insert new material into db
$sql = "INSERT INTO `drive_db`.`material` (`mat_name`,`mat_content`,`mat_type`,`course_code`)  
VALUES ('$matname','$mat_content','$mat_type','$course_code')"; 

if ($GLOBALS['conn']->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
}
				  

?>