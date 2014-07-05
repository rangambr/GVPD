<?php
require '../model/admin.php';

$usrid=$_POST["txt_usrid"];
$usrname=$_POST["txt_usrname"];
$pass=md5($_POST["txt_pass"]);

//create admin object of the Admin class
$admin=new Admin();
//call function addAdmin
$result=$admin->addAdmin($usrname,$pass);
header("Location:../view/add_user.php?er=1");

?>