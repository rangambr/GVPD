<?php
require '../model/property.php';
 require '../../common/kint/Kint.class.php';
$propertyId = $_REQUEST['id'];
$prop = new Property();

$result = $prop->getPropertyById($propertyId);
$property;

while ($row = mysql_fetch_array($result)) {
    $property = $row;
}
//include '../view/display_property.php';
