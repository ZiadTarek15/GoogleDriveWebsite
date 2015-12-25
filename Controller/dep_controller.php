<?php
include '../View/connection.php';
connect();
function get_dep()
{
	$query  = "SELECT * FROM `department` WHERE `dep_id` = '15'";
    $data = mysqli_fetch_array($GLOBALS['conn']->query($query));

	if ($GLOBALS['conn']->query($query) != false) {
    	return $data;
		} 
		else 
		{
    echo "Error: " . $query . "<br>" . $GLOBALS['conn']->error;
		}
}
function get_courses()
{
	$query  = "SELECT * FROM `course` WHERE `dep_id` = '15'";
	$result = $GLOBALS['conn']->query($query);
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($data, $row["course_code"]);
		array_push($data, $row["course_name"]);
	}
	return $data;
}
function get_years()
{
	$query  = "SELECT `year` FROM `department` WHERE class = '4' and dep_name = 'CSE'";
    $data = mysqli_fetch_array($GLOBALS['conn']->query($query));
	$result = $GLOBALS['conn']->query($query);
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($data, $row["year"]);
	}
	return $data;
}
?>