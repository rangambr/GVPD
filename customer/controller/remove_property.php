<?php
require '../model/customer.php';
$property_id = $_REQUEST['id'];
 
$prp_cus = new Customer();
$prp_cus->removeProperty($property_id);
header("location:../view/display_profile.php?msg=5");  
?>
