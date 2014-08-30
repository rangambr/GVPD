<?php
require '../model/contact.php';

$title=$_POST["cmb_title"];
$name=$_POST["txtname"];
$email=$_POST["txtemail"];
$telephone=$_POST["txttp"];
$subject=$_POST["txtsub"];
$message=$_POST["txtmsg"];
$datetime=date("d/m/y H:i:s");

$inquiry=new Inquiry();
$newInquiry=$inquiry->addInquiry($title,$name,$email,$telephone,$subject,$message,$datetime);
header("Location:../view/contact_us.php?er=4");
?>