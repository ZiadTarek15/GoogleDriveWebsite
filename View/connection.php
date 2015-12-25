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
function viewAnnouncement()
	 {
		$query = "SELECT announcement.description FROM announcement INNER JOIN follow 
					ON announcement.course_code = follow.course_code AND follow.as_id = 1100556";
	    $result = $GLOBALS['conn']->query($query);
	    if($result->num_rows>0)
	    {
	    	$description = $result->fetch_assoc();
	    	echo $description["description"];
	    }

	}
function viewUsername()
	{
		// $id = $_SESSION['user'];
		// $query = "SELECT fst_name FROM academic_staff WHERE as_id = $id";
	 //    $result = $GLOBALS['conn']->query($query);
	 //    if($result->num_rows>0)
	 //    {
	 //    	$username = $result->fetch_assoc();
	 //    	echo $username["fst_name"];
	 //    }
	}	echo "USERNAME"
?>