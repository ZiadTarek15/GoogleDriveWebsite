<?php
require_once "../View/material.php";

//get these values from previous page

//insert new material into db
$sql = "DELETE From `drive_db`.`material` 
Where mat_name='$mN[$i]'  AND mat_type='$mat_type' AND  course_code='$course_code'"; 

if ($GLOBALS['conn']->query($sql) === TRUE) {
    echo "The material is deleted successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
}
				  

?>