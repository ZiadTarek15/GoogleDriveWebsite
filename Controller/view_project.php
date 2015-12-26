<?php
 include '../View/connection.php';

 $course_code = $_GET['course_code'];
 $year = $_GET['year'];
 $project_description = $_GET['project_description'];
 $doctor = $_GET['doctor'];
 $teacher_ass = $_GET['teacher_ass'];
 $sponsor = $_GET['sponsor'];
 $mem_name = $_GET['mem_name'];
 $mobile_no = $_GET['mobile_no'];
 $email = $_GET['email'];

 function get_project_details()

 {
  $query = "SELECT * FROM graduation_project
  INNER JOIN team_member
  On graduation_project.course_code = team_member.course_code
  WHERE 'year' = '2015'  " ;
  
 $data = mysqli_fetch_array($GLOBALS['conn']->query($query));

 if($GLOBALS['conn']->query($query)!=false)
 {
 	 echo $data;
 }
 else
 {
 	echo "ERROR: " .mysql_error();
 }
}