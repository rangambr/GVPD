<?php
//connect to db
require_once '../../common/conn.php';

class Reminder{
	function addReminder($username,$date,$note){
		$db=new Dbconnect();
		//KINT::dump($username,$date,$note);
		$sql="INSERT INTO reminder(username,date,note) VALUES ('$username','$date','$note')";
		
		$result=$db->query($sql);
		//KINT::dump($result);
		return true;
		}
	}
?>