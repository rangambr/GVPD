<?php
require '../model/admin.php';

$usrname=$_POST["txt_usrname"];
$pass=md5($_POST["txt_pass"]);

$admin=new Admin();
$NewAdmin=$admin->addAdmin($usrname,$pass);
$NewAdmin=$admin->viewAdmin($usrname);
header("Location:../model/admin.php");
?>