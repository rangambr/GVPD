<?php
//connect to db
require_once '../../common/conn.php';

class Property{
    
    function registerProperty($username,$name,$address1,$address2,$city,$province,$extent,$unit_price,$facilities){
        $db=new Dbconnect();
        //KINT::dump($username,$fname,$lastname,$address1,$address2,$city,$province,$email,$contact_no1,$contact_no2,$gender,$birthday);
        $sql="insert into property (username,name,address1,address2,city,province,extent,unit_price,facilities) values ('$username','$name','$address1','$address2','$city','$province','$extent','$unit_price','$facilities')";    
        $result = $db->query($sql);
        //KINT::dump($result);
        return true; 
    }
    
    function getPropertyByCustomer($username){    
        $db=new Dbconnect();
        $sql="select * from property where username='$username'";    
        $result=$db->query($sql);
        return $result;  
    }  
    
    function getPropertyById($id){    
        $db=new Dbconnect();
        $sql="select * from property where id='$id'";    
        $result=$db->query($sql);
        return $result;  
    } 
    
    function getAllProperties(){
        $db=new Dbconnect();
        $sql="select * from property limit 1000";    
        $result=$db->query($sql);
        return $result;  
    }
	
	function getPropertySubset($limit){
        $db = new Dbconnect();
        $result = $db->query("select * from property ".$limit);
        return $result;
    }
}
?>