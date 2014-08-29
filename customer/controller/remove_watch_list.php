<?php
require '../model/customer.php';
$property_id = $_REQUEST['id'];
 
$prp_cus = new Customer();
$prp_cus->removeFromWatchList($property_id);
header("location:../view/display_profile.php?msg=7");  
?>
