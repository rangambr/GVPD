<?php

session_start();
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
$property_id = $property->registerProperty($username, $name, $address1, $address2, $city, $province, $extent, $unit_price, $description);

//upload file
if ($_FILES["uploadedfile1"]["error"] == 0) {
    $file_type = $_FILES["uploadedfile1"]["type"];
    if (($_FILES["uploadedfile1"]["size"] / 1024) < 10240 && ($file_type == 'image/png' || $file_type == 'image/gif' || $file_type == 'image/jpeg' || $file_type == 'image/gif')) {
        $filename1 = basename($_FILES['uploadedfile1']['name']);
        $extension1 = pathinfo($filename1, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["uploadedfile1"]["tmp_name"], "../photos/" . $name . "1." . $extension1);
        $property->insertPhotoImage($property_id, $name . "1." . $extension1);
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
        $property->insertPhotoImage($property_id, $name . "2." . $extension2);
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
        $property->insertPhotoImage($property_id, $name . "3." . $extension3);
    } else {
        header("location:../../property/view/add_property.php?er=8");
    }
}

header("location:../../customer/view/display_profile.php");
?>


