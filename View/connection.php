<?php
$GLOBALS['conn'] = new mysqli('localhost', 'root', '', 'drive_db');
function connect()
	{
		
	// Check connection
	if ($GLOBALS['conn']->connect_error) {
	    die("Connection failed: " . $GLOBALS['conn']->connect_error);
		} 
	}
function insert($id, $name, $year, $class)
	{
		$sql = "INSERT INTO `drive_db`.`department` (`dep_id`, `dep_name`, `year`, `class`) VALUES ('$id', '$name', '$year', '$class')"; 
		if ($GLOBALS['conn']->query($sql) === TRUE) {
    	echo "New record created successfully";
		} 
		else 
		{
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
		}
	}
?>