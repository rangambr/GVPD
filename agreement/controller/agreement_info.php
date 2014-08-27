<?php
require '../model/agreement.php';
$agreement = new Agreement();
$all_agrs = $agreement->getAllAgreements();
?>