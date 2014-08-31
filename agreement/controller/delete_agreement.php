<?php
//session_start();
require '../model/agreement.php';
$agrid = $_REQUEST['agr_id'];
 
$agreement = new Agreement();
$agreement->deleteAgreement($agrid);
header("location:../view/agreement_details.php");  
?>