<?php
require_once '../../common/conn.php';
class Search_Preference{
    function insert_search_preference($property_type,$price_range,$city){
        $db=new Dbconnect();
        //KINT::dump($username,$fname,$lastname,$address1,$address2,$city,$province,$email,$contact_no1,$contact_no2,$gender,$birthday);
        $sql="insert into search_preference (property_type,price_range,city,created_date_time) values ('$property_type','$price_range','$city',NOW())";    
        $result = $db->query($sql);
        //KINT::dump($result);
        return true; 
    }
    
    function getAllPreferences(){
        $db=new Dbconnect();
        $sql="select * from search_preference limit 1000";    
        $result=$db->query($sql);
        return $result;  
    }
    
    function getPreferencesGroupByCity(){
        $db=new Dbconnect();
        $query = "SELECT city,COUNT(id) FROM search_preference GROUP BY city"; 
	$result=$db->query($query);
        return $result;
    }
    
}

