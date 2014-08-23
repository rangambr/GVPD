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

$adm = new Admin();
$admRecord = $adm->generate_password();

while ($row = mysql_fetch_array($admRecord)) {
    $password = $row['password'];
	
}
