<?php
require '../model/contact.php';

$title=$_POST["cmb_title"];
$name=$_POST["txtname"];
$email=$_POST["txtemail"];
$telephone=$_POST["txttp"];
$subject=$_POST["txtsub"];
$message=$_POST["txtmsg"];

$inquiry=new Inquiry();
$newInquiry=$inquiry->addInquiry($title,$name,$email,$telephone,$subject,$message);
header("Location:../view/contact_us.php?er=4");
?>