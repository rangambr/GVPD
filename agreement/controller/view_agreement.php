<?php 
require '../model/agreement.php';

require '../../common/kint/Kint.class.php';
$agreementNo = $_REQUEST['agr_no'];
//kint::dump($agreementNo);
$agrmnt = new Agreement();

$result = $agrmnt->getAgreementsById($agreementNo);
//kint::dump($result);
$agreement;

while ($row = mysql_fetch_array($result)) {	
    $agreement = $row;	
}
?>	
	