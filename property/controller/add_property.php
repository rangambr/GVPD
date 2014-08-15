<?php session_start();
require '../model/property.php';
require '../../common/kint/Kint.class.php';

/* @var $_POST DOMAttr */
$title=$_POST['cmb_title'];
$name = $_POST['property_name'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$province = $_POST['province'];
$extent = $_POST['extent'];
$unit_price = $_POST['unit_price'];
$description = $_POST['description'];

$username = $_SESSION['username'];

$property = new Property();
$property->registerProperty($username,$title, $name, $address1, $address2, $city, $province, $extent, $unit_price, $description);

header("location:../view/list_properties.php");  
?>


