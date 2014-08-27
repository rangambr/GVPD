<?php

require '../model/property.php';
require '../../common/kint/Kint.class.php';
$propertyId = $_REQUEST['propId'];
$prop = new Property();

$result = $prop->getPropertyById($propertyId);
//kint::dump($result);
$property;

while ($row = mysql_fetch_array($result)) {
    $property = $row;
}
$allPhotoURLs = $prop->getAllPhotoURLs($property['id']);

?>
