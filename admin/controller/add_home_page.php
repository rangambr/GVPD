<?php
	session_start();
    require '../model/admin.php';
    //retrieve the username and prpoerty id
    $prop_id = $_REQUEST['propId'];
    
    //create obj object of the admin
    $obj=new Admin(); 
    
    $result = $obj->addHomepage($prop_id);
	header("Location:../view/manage_properties.php");
 
?>