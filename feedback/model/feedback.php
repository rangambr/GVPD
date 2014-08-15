<?php
//connect to db
require_once '../../common/conn.php'; 

class Feedback{
    
    function insertInfo($visited,$often_visited,$access,$available,$look_and_feel,$impression,$topic,$feedback,$name,$email){
        $db=new Dbconnect();
        
        $sql="INSERT INTO feedback (visited,often_visited,accessibility,availability,look_feel,impression,topic,feedback,name,email) VALUES ('$visited','$often_visited','$access','$available','$look_and_feel','$impression','$topic','$feedback','$name','$email')";    
        $result = $db->query($sql);
        return true; 
    }
}