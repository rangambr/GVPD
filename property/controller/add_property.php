<?php session_start();
require '../model/property.php';
require '../../common/kint/Kint.class.php';

/* @var $_POST DOMAttr */
$name = $_POST['property_name'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$province = $_POST['province'];
$extent = $_POST['extent'];
$unit_price = $_POST['unit_price'];
$facilities = $_POST['facilities'];

$username = $_SESSION['username'];

$property = new Property();
$property->registerProperty($username, $name, $address1, $address2, $city, $province, $extent, $unit_price, $facilities);

header("location:../view/list_properties.php");  
?>


