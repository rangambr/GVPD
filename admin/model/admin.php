<?php
require_once '../../common/conn.php';

class Admin {

    function addAdmin($usrname, $pass) {
        $db = new Dbconnect();

        $query = "INSERT INTO user(username,password,type) VALUES ('$usrname','$pass','Admin') ";
        $result = $db->query($query);
        return $result;
    }

    function getAllAdmins() {
        $db = new Dbconnect();

        $query = "SELECT username,type FROM user WHERE type='Admin' ";
        $result1 = $db->query($query);
        return $result1;
    }

    function updateAdmin($usrid, $usrname, $pass) {
        $db = new Dbconnect();

        $query = "UPDATE admin SET user_name='" . $usrname . "',password='" . $pass . "' WHERE user_id=" . $usrid . " ";
        $result = $db->query($query);
        return true;
    }

    function deleteAdmin($username) {
        $db = new Dbconnect();

        $sql = "DELETE FROM user WHERE username='" . $username . "'";
        $result = $db->query($sql);
    }

    function getAllInquiries() {
        $db = new Dbconnect();
        $sql = "SELECT * FROM inquiry LIMIT 1000";
        $result = $db->query($sql);
        return $result;
    }
	function getAllInquiryById($inq_id) {
        $db = new Dbconnect();
        $sql = "SELECT * FROM inquiry WHERE inquiry_id=".$inq_id." ";
        $result = $db->query($sql);
        return $result;
    }
	function getAllResponseById($inq_id){
		$db = new Dbconnect();
        $sql = "SELECT * FROM inquiry_response WHERE inquiry_id=".$inq_id." ";
        $result = $db->query($sql);
        return $result;	
	}
	
    function getAllUsers() {
        $db = new Dbconnect();
        $sql = "SELECT * FROM user ORDER BY type, username";
        $result = $db->query($sql);
        return $result;
    }

    function addHotProperties($prop_id) {
        $db = new Dbconnect();
        $sql = "UPDATE property SET is_hot_property='1' WHERE id='$prop_id' ";
        $result = $db->query($sql);
        return $result;
    }
    
    function removeHotProperties($prop_id) {
        $db = new Dbconnect();
        $sql = "UPDATE property SET is_hot_property='0' WHERE id='$prop_id' ";
        $result = $db->query($sql);
        return $result;
    }
    
    
    function addHomepage($prop_id) {
        $db = new Dbconnect();
        $sql = "UPDATE property SET visible_home_page='1' WHERE id='$prop_id' ";
        $result = $db->query($sql);
        return $result;
    }
    
    function removeHomepage($prop_id) {
        $db = new Dbconnect();
        $sql = "UPDATE property SET visible_home_page='0' WHERE id='$prop_id' ";
        $result = $db->query($sql);
        return $result;
    }

    function deleteProperties($pro_id) {
        $db = new Dbconnect();

        $sql = "DELETE FROM property WHERE id='" . $pro_id . "'";
        $result = $db->query($sql);
    }

    function generate_password($length = 8) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr(str_shuffle($chars), 0, $length);
        $password = md5($password);
        return $password;
    }

    function updatePassword($username, $pass) {
        $db = new Dbconnect();

        $query = "UPDATE user SET password='$pass' WHERE username='$username'";
        $result = $db->query($query);
        return true;
    }
	function insertRespond($inq_id,$res,$datetime){
		$db = new Dbconnect();

        $query = "INSERT INTO inquiry_response(inquiry_id,response,datetime) VALUES ('$inq_id','$res','$datetime') ";
        $result = $db->query($query);
        return $result;
		}
	function emailRespond($to, $subject, $body){ 
		mail($to, $subject, $body, 'From: greenvalleypvt@gmail.com');
	}
	//function: send email after reset the password by the admin
    function reset_password_email($to, $subject, $body) {
        mail($to, $subject, $body, 'From: postmaster@localhost');
    }


    function deleteReview($pro_id) {
        $db = new Dbconnect();

        $sql = "DELETE FROM review WHERE id='" . $pro_id . "'";
        $result = $db->query($sql);
    }

}

?>