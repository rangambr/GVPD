<?php
require_once '../../common/conn.php';

class Review{
	function insertRatings($description,$rate){
		$db=new Dbconnect();
		
		$sql="insert into reviews (description,rating) values ('$description','$rate')";    
        $result = $db->query($sql);
        return true;
		}
	}

?>