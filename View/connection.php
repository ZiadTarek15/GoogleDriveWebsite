<?php
$GLOBALS['conn'] = new mysqli('localhost', 'root', '', 'drive_db');
function connect()
	{
		
	// Check connection
	if ($GLOBALS['conn']->connect_error) {
	    die("Connection failed: " . $GLOBALS['conn']->connect_error);
		} 
	}
?>