<?php
require '../model/admin.php';

$vinquiry = $_REQUEST['inqId'];
$view_inq = new Admin();

$result1 = $view_inq->getAllInquiryById($vinquiry);
$newvinq_1;

while ($row = mysql_fetch_array($result1)) {	
    $newvinq_1 = $row;	
}

$result2 = $view_inq->getAllResponseById($vinquiry);
$newvinq_2;

while ($row = mysql_fetch_array($result2)) {	
    $newvinq_2 = $row;	
}
header("location:../view/view_inquiry.php?inqId=". $vinquiry);
?>	
	
