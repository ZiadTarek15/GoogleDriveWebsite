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
function viewAnnouncement($id)
	{
		$query = "SELECT announcement.description, announcement.date 
				FROM announcement INNER JOIN follow 
				ON announcement.course_code = follow.course_code WHERE follow.as_id = $id";
	    $result = $GLOBALS['conn']->query($query);
	    $x = "SELECT course.course_name FROM course INNER JOIN follow ON course.course_code = follow.course_code
	     WHERE follow.as_id = $id";
	    $result2 = $GLOBALS['conn']->query($x);
	    
	    if($result->num_rows>0)
	    {
	    	while($Des = $result->fetch_assoc())
	    	{
	    		echo"<tr>";
	    		echo "<td>$Des[description]</td>";
	    		if($course = $result2->fetch_assoc())
	    		{echo "<td>$course[course_name]</td>";
	    		}
	    		echo "<td>$Des[date]</td>";
	    		echo"</tr>";
	    	}
	    }
	}
function viewUsername($id)
	{
		$query = "SELECT fst_name FROM academic_staff WHERE as_id = $id";
	    $result = $GLOBALS['conn']->query($query);
	    if($result!=null)
	    {
	    	$username = $result->fetch_assoc();
	    	echo $username["fst_name"];
	    }
	}
?>