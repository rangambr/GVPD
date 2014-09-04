<?php 
session_start();
require '../model/customer.php';
require '../../common/kint/Kint.class.php';

$username=$_SESSION['username'];
$pass=md5($_POST['txtpass']);
$email_code=md5($username.''.microtime());

$cus=new Customer();
$cus->updatePassword($username, $pass, $email_code);

$to=$cus->getEmailByUsername($username, $email_code);
	while ($row = mysql_fetch_array($to)) {	
    
$cus->emailResetPassword($row['email'],"Reset your account","");
	}
	header("location:../view/update_profile.php");