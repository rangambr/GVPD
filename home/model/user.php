<?php
//Check if the conn.php file has already been included,and if so,not include(require)it again.
require_once '../../common/conn.php';
 
class User{
    //function for login to the system
    function login($username,$password){    
        $db=new Dbconnect();
        $sql="select * from user where username='$username' and 
        password='$password' ";    
        $result=$db->query($sql);
        return $result;  
    }
    //if the user already registered return true
    function isExistingUser($username){
        $db=new Dbconnect();
        $sql="select * from user where username='$username'";    
        $result=$db->query($sql);
        $num=mysql_num_rows($result); 
        if($num == null || $num == 0){
            return false;
        }
        else {
            return true;
        } 
    }
    //after the user has registered send him a email to his email account
    function registerUser($username,$password,$email_code,$type){
        $db=new Dbconnect();
        if($this->isExistingUser($username)){
		  return false;
        }
        else{
		  $sql="insert into user (username,password,email_code,type)
				 values ('$username','$password','$email_code','$type') ";    
		  $db->query($sql);
		  return true;
        }
    }
    
    //activate or deactivate user
    function activateUser($username,$isActive){
        $db = new Dbconnect();
        if($username != null){
            $sql = "UPDATE user SET active = '$isActive' WHERE username = '$username'";
            $db->query($sql);
            return true;
        }
        return false;
    }
    
    //function: send email when registering a new user
    function activation_email($to,$subject,$body){
	mail($to,$subject,$body,'From: postmaster@localhost');
    }
 }
