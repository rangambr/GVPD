<?php 
require '../model/agreement.php';

//require '../../common/kint/Kint.class.php';
$agreementId = $_REQUEST['agr_id'];
//kint::dump($agreementId);
$agrmnt = new Agreement();

$result = $agrmnt->getAgreementsById($agreementId);
//kint::dump($result);
$agreement;

while ($row = mysql_fetch_array($result)) {	
    $agreement = $row;	
}
?>	
	