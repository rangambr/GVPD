<?php
require '../model/admin.php';

$inquiry=$_REQUEST['inquiry_id'];
$res=$_POST["txt_reply"];
$sub=$_POST['txt_sub'];
$email=$_POST['txt_to'];
$datetime=date("d/m/y H:i:s");

$inquiry_obj=new Admin();
$inquiry_obj->insertRespond($inquiry,$res,$datetime);

$inquiry_obj->emailRespond($email,$sub,$res);
//
//$user->activation_email($email,"Activate your account","Hello ".$username.", \n\n You need to activate your account , Please use the link below: \n\n http://localhost/GVPD/home/view/activate_user.php?ecode=$email_code&username=$username \n\n--Green Valley Property Development (PVT) Ltd--");
//	
//    header("Location:../../home/view/index.php");

header("Location:../view/manage_inquiries.php?er=4" );



?>