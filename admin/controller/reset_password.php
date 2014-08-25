<?php

require '../../home/model/user.php';
require_once '../../common/kint/Kint.class.php';
require '../model/admin.php';
//Kint::dump($_SESSION['username']);

$username = '';
//$password = '';
//$pass=$_POST['txt_pass'];

if (isset($_REQUEST['username'])) {
	 //Kint::dump($username);
    $username = $_REQUEST['username'];
}

$adm = new Admin();
$admRecord = $adm->generate_password();

$adm->updatePassword($username,$admRecord);	
$adm->reset_password_email($email,"Reset your password","Hello ".$username.", \n\n You need to reset your password , Please use the link below: \n\n http://localhost/GVPD/home/view/activate_user.php?ecode=$email_code&username=$username \n\n--Green Valley Property Development (PVT) Ltd--");
	
 header("location:../view/manage_users.php");
?>