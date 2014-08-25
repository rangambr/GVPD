<?php
require '../model/admin.php';
$admin = new Admin();
$all_users = $admin->getAllUsers();
?>
