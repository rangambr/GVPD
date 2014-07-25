<?php
session_start();
require '../model/admin.php';
if(isset($_GET['username']))
{
    $adm = new Admin();
    $adm->deleteAdmin($_GET['username']);
    header("location:../view/manage_users.php");  
}
else{
    header("location:../view/manage_users.php?er=12");  
}

