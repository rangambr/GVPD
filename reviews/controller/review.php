<?php
require '../model/review.php';
require '../../property/model/property.php';
//require '../../common/kint/Kint.class.php';
$property_id=$_REQUEST['property_id'];
//Kint::dump($property_id);
$description=$_POST['txt_desc'];
$rate=$_POST['cmb_rate'];

//$property1=new Property();
//$result = $property1->getPropertyById($property_id);
//while ($row = mysql_fetch_array($result)) {
//    $property1 = $row;
//}

$rating=new Review();
$rating->insertRatings($property_id,$description,$rate);
header("Location: ../../home/view/hot_deals.php");

?>




