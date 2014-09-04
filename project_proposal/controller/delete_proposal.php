<?php
require '../model/proposal.php';
$pid=$_REQUEST['propId'];
 
$objproposal= new PProposal();
$objproposal->deleteProposal($pid);
header("location:../view/proposal_main_page.php");  
?>