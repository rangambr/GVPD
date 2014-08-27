<?php
//session_start();
require '../model/agreement.php';
$agrno = $_REQUEST['agr_no'];
 
$agreement = new Agreement();
$agreement->deleteAgreement($agrno);
header("location:../view/manage_properties.php");  
?>