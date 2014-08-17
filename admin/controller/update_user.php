<?php

require '../../home/model/user.php';
require_once '../../common/kint/Kint.class.php';
//Kint::dump($_SESSION['username']);

$username = '';
$userType = '';
$userStatus = '';

if (isset($_GET['username'])) {
    $username = $_GET['username'];
}

$usr = new User();
$usrRecord = $usr->getUserByUsername($username);

while ($row = mysql_fetch_array($usrRecord)) {
    $userType = $row['type'];
    //Kint::dump($fname);
    $userStatus = $row['active'];
}

//include '../view/update_user.php';
//kint::dump($userType);

