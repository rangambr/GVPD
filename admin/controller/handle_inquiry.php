<?php
require '../model/admin.php';

$inquiry=$_REQUEST['inqId'];
$respond_inq=new Admin();

$result=$respond_inq->getAllInquiryById($inquiry);
$newinquiry;

while($row=mysql_fetch_array($result)){
	$newinquiry=$row;
	}


?>