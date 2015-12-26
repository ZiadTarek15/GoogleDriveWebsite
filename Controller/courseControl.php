<?php



include ('../View/connection.php');
connect();

function get_courseName( $id){
        $sql_query = "SELECT `course_name` FROM `course` WHERE `course_code` = '$id' ";
        $res = $GLOBALS['conn']->query($sql_query);
        $name = null;
       if (!$res){
            die('Error ' . mysql_error());
          }
        else{
	while ($row = mysqli_fetch_assoc($res)) {
		$name=$row["course_name"];
	}
        
        return $name;
        }
}


function add_announcement( $as_id, $course_code,$an_id, $data){
        $sql_query = "INSERT INTO `announcement` (`course_code`, `ann_id`, `description`, `date`) VALUES ('$course_code','$an_id','$data',NOW()) ";
        
        $res = $GLOBALS['conn']->query($sql_query);
        $name = null;
       if (!$res){
            die('Error ' . mysql_error());
            return FALSE;
          }
        else{
	return TRUE;
	}
      
}


function follow( $as_id, $course_code){
        $sql_query = "INSERT INTO `follow` (`course_code`, `as_id`) VALUES('$course_code','$as_id') ";
        $res = $GLOBALS['conn']->query($sql_query);
        $name = null;
       if (!$res){
            die('Error ' . mysql_error());
            return FALSE;
          }
        else{
	return TRUE;
	}

}

function unfollow( $as_id, $course_code){
        $sql_query ="DELETE FROM `drive_db`.`follow` WHERE `follow`.`course_code` = '$course_code' AND `follow`.`as_id` = '$as_id' ";
        $res = $GLOBALS['conn']->query($sql_query);
        $name = null;
       if (!$res){
            die('Error un ' . mysql_error());
            return FALSE;
          }
        else{
	return TRUE;
	}
    
}

function follow_check( $as_id, $course_code){
        $sql_query = " SELECT * FROM `follow` WHERE `as_id` = '$as_id' AND `course_code` = '$course_code'  ";
        $res = $GLOBALS['conn']->query($sql_query);
        if (! ($res->num_rows >0)){
            //die('Error ' . mysql_error());
            return 0;
          }
        else{
             return TRUE;
                
            }
	}
	
//something not right with the check
function access_check( $as_id, $course_code){
        $sql_query = "SELECT * FROM `access` WHERE `as_id` = '$as_id' AND `course_code` = '$course_code' ";
        $res = $GLOBALS['conn']->query($sql_query);
       if (! ($res->num_rows >0)){
            //die('Error ' . mysql_error());
            return 0;
          }
        else{
	return TRUE;
	}
      
}




?>
