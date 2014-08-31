<?php
require_once '../../common/conn.php'; 

class Inquiry{
    
    function addInquiry($title,$name,$email,$telephone,$subject,$message,$datetime){
        $db=new Dbconnect();
        $sql="insert into inquiry (title,name,email,contact_no,subject,message,datetime) values ('$title','$name','$email','$telephone','$subject','$message','$datetime')";    
        $result = $db->query($sql);
        return true; 
    }
	 function getInquiryByCustomer($name) {
        $db = new Dbconnect();
        $sql = "select * from inquiry where name='$name'";
        $result = $db->query($sql);
        return $result;
    }

    function getAllInquiries() {
        $db = new Dbconnect();
        $sql = "select * from inquiry limit 1000";
        $result = $db->query($sql);
        return $result;
    }

    function getInquiryByStatus($status) {
        $db = new Dbconnect();
        $sql = "select * from inquiry where status='$status'";
        $result = $db->query($sql);
        return $result;
    }
}
?>