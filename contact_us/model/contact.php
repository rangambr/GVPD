<?php
require_once '../../common/conn.php'; 

class Inquiry{
    
    function addInquiry($title,$name,$email,$telephone,$subject,$message){
        $db=new Dbconnect();
        $sql="insert into inquiry (title,name,email,telephone,subject,message) values ('$title','$name','$email','$telephone','$subject','$message')";    
        $result = $db->query($sql);
        return true; 
    }
}
?>