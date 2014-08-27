<?php 
require '../model/agreement.php';

//require '../../common/kint/Kint.class.php';
$agreementNo = $_REQUEST['agr_no'];
$agrmnt = new Agreement();

$result = $agrmnt->getAgreementsById($agreementNo);
//kint::dump($result);
$agreement;

while ($row = mysql_fetch_array($result)) {
    $agreement = $row;
}

//header("Location:../view/view_agreement.php");



//$res = $agree->getAgreementsById($agr_no);

//$agree=new Agreement();
//$result=$agree->getAllAgreements();
//
////Kint::dump($result);
//while($row=mysql_fetch_array($result)){
//	$reg_no=$row['reg_no'];
//	$l_name = $row['l_name'];
//	$l_address = $row['l_address'];
//	$l_tel = $row['l_tel'];
//	
//	$agr_no=$row['agreement_no'];
//	$location = $row['location'];
//	$date = $row['date'];
//	
//	$fullname= $row['full_name'];
//	$nic= $row['NIC'];
//	$address= $row['address'];
//	$price = $row['agreed_price'];
//	$valid_time = $row['valid_period'];
//	
//	$sur = $row['survey'];
//	$adv = $row['advertising'];
//	$dev = $row['development'];
//	$other = $row['other'];
//	$elec= $row['electricity'];
//	$tot= $row['total'];
//	
//	$description = $row['description'];
//	$wit1 = $row['witness1'];
//	$wit2 = $row['witness2'];
//}
?>	
	