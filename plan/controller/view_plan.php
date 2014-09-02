<?php 
require '../model/plan.php';

//require '../../common/kint/Kint.class.php';
$pId = $_REQUEST['pId'];

$objplan = new Plan();

$result = $objplan->getPlanById($pId);
//kint::dump($result);
$plan_data;

while ($row = mysql_fetch_array($result)) {	
    $plan_data = $row;	
}

$allPhotos=$objplan->getAllPhotoURLs($pId);
?>