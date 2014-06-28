<?php
require_once '../../common/conn.php'; 

class Admin{
	
	function addAdmin($usrname,$pass){
		$db= new Dbconnect();
		
		$query="INSERT INTO admin (user_name,password) VALUES ('$usrname','$pass') ";
		$result=$db->query($query);
		return true;
		}
	function viewAdmin($usrname){
		$db= new Dbconnect();
		
		$query="SELECT * FROM admin ";
		$result=$db->query($query);
		return true;
		
		}
	}
?>