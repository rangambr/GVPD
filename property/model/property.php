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
    
    function getPropertiesByStatus($status){
        $db=new Dbconnect();
        $sql="select * from property where status = '$status'";  
        //kint::dump($status);
        $result=$db->query($sql);
        return $result;  
    }
    
    function getPropertiesBySearchCategory($location,$type, $min_val, $max_val,$no_min,$no_max,$no_type,$no_location){
        $db = new Dbconnect();
        $min_max_filter = "";
        $type_filter = "";
        $location_filter = "";
        
        if($no_min && $no_max){
            $min_max_filter = "";
        }
        elseif ($no_min) {
            $min_max_filter = " unit_price <= '$max_val' and ";
        }
        elseif ($no_max) {
            $min_max_filter = " unit_price >= '$min_val' and ";
        }
        else{
            $min_max_filter = " ( unit_price >= '$min_val' and unit_price <= '$max_val' ) and ";
        }
        
        if(! $no_type){
            $type_filter = "type = '$type' and ";
        }
        
        if(! $no_location){
            $location_filter = "( address1 = '$location' or address2 = '$location' or city = '$location' or province = '$location') and ";
        }
        
        $query_str = "select * from property where ".$type_filter." ".$min_max_filter." ".$location_filter." status = 'Active' ";
        //KINT::dump($query_str);
        $result = $db->query($query_str);
        return $result;
    }
}
?>