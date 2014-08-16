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
$description = $_POST['description'];

$username = $_SESSION['username'];

$property = new Property();
$property->registerProperty($username, $name, $address1, $address2, $city, $province, $extent, $unit_price, $description);

//upload file
if ($_FILES["uploadedfile1"]["error"] != 0) {
   //TODO: add validation for type and size
   //echo "Type: " . $_FILES["file"]["type"] . "<br>";
   //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";

   $filename  = basename($_FILES['uploadedfile1']['name']);
   $extension = pathinfo($filename, PATHINFO_EXTENSION);
   
   move_uploaded_file($_FILES["uploadedfile1"]["tmp_name"],"../photos/property1".$extension); 
   //TODO: need to add a record to property_photo table with pic name
} 

header("location:../../customer/view/display_profile.php");  
?>


