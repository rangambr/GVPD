<?php
require '../../home/model/user.php';
require_once '../../common/kint/Kint.class.php';
//Kint::dump($_SESSION['username']);
$username = '';
$userType = '';
$userStatus = '';
//kint::dump($_REQUEST['username']);
if (isset($_POST['username']) && isset($_POST['type']) && isset($_POST['status'])) {
    $username = $_POST['username'];
    $usr = new User();
    
    $usr->updateUser($username, $_POST['type'], $_POST['status']);
}
header("location:../view/update_user.php?username=".$username);