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
 header("location:../view/manage_users.php");
