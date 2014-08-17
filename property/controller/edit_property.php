<?php
require '../model/property.php';
require '../../common/kint/Kint.class.php';
$prop_id = $_POST['prop_id'];
$name = $_POST['property_name'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$province = $_POST['province'];
$extent = $_POST['extent'];
$unit_price = $_POST['unit_price'];
$description = $_POST['description'];
//$prop = new Property();

$oldpic1 = '';
$oldpic2 = '';
$oldpic3 = '';

$property = new Property();

if(isset($_POST['oldpic1'])){
   $oldpic1 = $_POST['oldpic1'];
}
if(isset($_POST['oldpic2'])){
   $oldpic2 = $_POST['oldpic2'];
}
if(isset($_POST['oldpic3'])){
   $oldpic3 = $_POST['oldpic3'];
}
//kint::dump($prop_id);
//
//kint::dump($_FILES["uploadedfile1"]);
//upload file
if ($_FILES["uploadedfile1"]["error"] == 0) {
    
    $file_type = $_FILES["uploadedfile1"]["type"];
    if (($_FILES["uploadedfile1"]["size"] / 1024) < 10240 && ($file_type == 'image/png' || $file_type == 'image/gif' || $file_type == 'image/jpeg' || $file_type == 'image/gif')) {
        $filename1 = basename($_FILES['uploadedfile1']['name']);
        $extension1 = pathinfo($filename1, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["uploadedfile1"]["tmp_name"], "../photos/" . $name . "1." . $extension1);
        $property->updatePhotoImage($prop_id, $name . "1." . $extension1, $oldpic1);
    } else {
        header("location:../../property/view/add_property.php?er=8");
    }
}

if ($_FILES["uploadedfile2"]["error"] == 0) {
    $file_type = $_FILES["uploadedfile2"]["type"];
    if (($_FILES["uploadedfile2"]["size"] / 1024) < 10240 && ($file_type == 'image/png' || $file_type == 'image/gif' || $file_type == 'image/jpeg' || $file_type == 'image/gif')) {
        $filename2 = basename($_FILES['uploadedfile2']['name']);
        $extension2 = pathinfo($filename2, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["uploadedfile2"]["tmp_name"], "../photos/" . $name . "2." . $extension2);
        $property->updatePhotoImage($prop_id, $name . "2." . $extension2, $oldpic2);
    } else {
        header("location:../../property/view/add_property.php?er=8");
    }
}

if ($_FILES["uploadedfile3"]["error"] == 0) {
    $file_type = $_FILES["uploadedfile3"]["type"];
    if (($_FILES["uploadedfile3"]["size"] / 1024) < 10240 && ($file_type == 'image/png' || $file_type == 'image/gif' || $file_type == 'image/jpeg' || $file_type == 'image/gif')) {
        $filename3 = basename($_FILES['uploadedfile3']['name']);
        $extension3 = pathinfo($filename3, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["uploadedfile3"]["tmp_name"], "../photos/" . $name . "3." . $extension3);
        $property->updatePhotoImage($prop_id, $name . "3." . $extension3, $oldpic3);
    } else {
        header("location:../../property/view/add_property.php?er=8");
    }
}

$property->updateProperty($prop_id, $name, $address1, $address2, $city, $province, $extent, $unit_price, $description);
header("location:../view/update_property.php?propId=".$prop_id);
