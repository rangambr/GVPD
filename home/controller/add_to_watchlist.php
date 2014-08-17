<?php
	session_start();
    require '../model/user.php';
    //retrieve the username and prpoerty id
    $username=$_SESSION['username'];
    $property_id = $_REQUEST['id'];
    
    //create obj object of the user
    $obj=new User(); 
    
    //call to the function login
    $result = $obj->saveWatchList($username,$property_id);
	header("Location:../view/hot_deals.php");
 
?>