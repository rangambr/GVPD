<?php
//session_start();
require '../model/admin.php';
$pro_id = $_REQUEST['propId'];
 
$adm = new Admin();
$adm->deleteReview($pro_id);
header("location:../view/manage_reviews.php");  
?>
