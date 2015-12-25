<?php
include '../View/connection.php';
session_start();

$course_code = 1;//$_SESSION['course_id']];
$mat_type = 'Sheets';//$_SESSION['mat_type']];
$mat_year = 2015;//$_SESSION['mat_year']];

$sql = "SELECT mat_name,mat_content 
		  FROM material 
		  WHERE mat_type='$mat_type' AND course_code= '$course_code' AND mat_year='$mat_year'";	
$result = $conn->query($sql);		  	  
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo $row['mat_name'];
    	echo"</td><td>";
    	echo $row['mat_content'];
    	echo"</td><td>";
    	echo"<br>";
 		  }
}

?>