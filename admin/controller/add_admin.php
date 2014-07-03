<?php
require '../model/admin.php';

$usrid=$_POST["txt_usrid"];
$usrname=$_POST["txt_usrname"];
$pass=md5($_POST["txt_pass"]);

//create admin object of the Admin class
$admin=new Admin();
//call function addAdmin
$result=$admin->addAdmin($usrname,$pass);

if($num=="0"){
	header("Location:../view/add_user.php?er=0");
	}
	
	else{
		while($row = mysql_fetch_array($num)){
			$Id=$row['UserId'];
			$Name=$row['UserName'];
			$Password=$row['Password'];
		}
	header("Location:../view/add_user.php?er=1");
	}

?>