<?php
//connect to db
require_once '../../common/conn.php'; 

class Customer{
    
    function registerCustomer($username,$fname,$lname,$gender,$birthday,$address1,$address2,$city,$province,$email,$contact_no1,$contact_no2){
        $db=new Dbconnect();
        //KINT::dump($username,$fname,$lname,$address1,$address2,$city,$province,$email,$contact_no1,$contact_no2,$gender,$birthday);
        $sql="insert into customer (username,fname,lname,gender,birthday,address1,address2,city,province,email,contact_no_1,contact_no_2) values ('$username','$fname','$lname','$gender','$birthday','$address1','$address2','$city','$province','$email','$contact_no1','$contact_no2')";    
        $result = $db->query($sql);
        //KINT::dump($result);
        return true; 
    }
    
    function getCustomer($username){    
        $db=new Dbconnect();
        $sql="select * from customer where username='$username'";    
        $result=$db->query($sql);
        return $result;  
    }  
	
	//update customer profile function
    function updateCustomer($fname,$lname,$gender,$address1,$address2,$city,$provice,$birthday,$email,$contact_no1,$contact_no2,$username){
        $db=new Dbconnect();
        
	$sql="UPDATE customer SET fname = '$fname',lname = '$lname' , gender='$gender', address1 = '$address1' , address2 = '$address2' , city = '$city' ,province='$provice', birthday = '$birthday' , email = '$email' , contact_no_1 = '$contact_no1' , contact_no_2 = '$contact_no2'  WHERE username = '$username' ";     
        //KINT::dump($sql);
        $result = $db->query($sql);
        //KINT::dump($result);
        return true;
    }
	
}
?>
     

