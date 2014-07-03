<?php
require_once '../../common/conn.php'; 

class Admin{
	
	function addAdmin($usrname,$pass){
		$db= new Dbconnect();
		
		$query="INSERT INTO admin (user_name,password) VALUES ('$usrname','$pass') ";
		$result=$db->query($query);
		return $result;
		}
	function viewAdmin($usrname){
		$db= new Dbconnect();
		
		$query="SELECT * FROM admin ";
		$result1=$db->query($query);
		return $result1;
		$num=mysql_num_rows($result1);
		}
	}
	function updateAdmin($usrid,$usrname,$pass){
		$db= new Dbconnect();
		
		$query="UPDATE admin SET user_name='".$usrname."',password='".$pass."' WHERE user_id=".$usrid." ";
		$result=$db->query($query);
		return true;
		}
	function deleteAdmin(){}
?>