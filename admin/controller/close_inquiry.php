<?php
require '../model/admin.php';

$inq = $_REQUEST['inqId'];
$new_inquiry=new Admin();
$new_inquiry->closeInquiryById($inq);
header("location:../view/manage_inquiries.php");
?>