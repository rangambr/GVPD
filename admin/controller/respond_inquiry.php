<?php
require '../model/admin.php';

$inq = $_REQUEST['inqId'];
$res=$_POST["txt_reply"];

$res_inquiry=new Admin();
$res_inquiry->insertRespond($inq,$res);
$res_inquiry->getAllInquiries();
//$res_inquiry->emailRespond()
//
//$user->activation_email($email,"Activate your account","Hello ".$username.", \n\n You need to activate your account , Please use the link below: \n\n http://localhost/GVPD/home/view/activate_user.php?ecode=$email_code&username=$username \n\n--Green Valley Property Development (PVT) Ltd--");
//	
//    header("Location:../../home/view/index.php");



header("Location:../view/respond_inquiry?er=4");



?>