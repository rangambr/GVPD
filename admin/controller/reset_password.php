<?php

require '../../home/model/user.php';
require_once '../../common/kint/Kint.class.php';
require '../model/admin.php';
//Kint::dump($_SESSION['username']);

$username = '';
//$password = '';
//$pass=$_POST['txt_pass'];

if (isset($_GET['username'])) {
	 //Kint::dump($username);
    $username = $_GET['username'];
}

$usr = new User();
$usrRecord = $usr->getUserByUsername($username);

while ($row = mysql_fetch_array($usrRecord)) {
    $password = $row['password'];
	
//$adm=new Admin();
//$new_adm=$adm->updatePassword($pass);
//$new_adm;
}