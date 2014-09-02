<?php 
session_start();
require '../model/customer.php';
require '../../common/kint/Kint.class.php';

$username=$_SESSION['username'];
//kint::dump($username);
//$uname=$_POST['txtusername'];
$pass=md5($_POST['txtpass']);
$email_code=md5($username.''.microtime());

$cus=new Customer();
$cus->updatePassword($username, $pass, $email_code);
$to=$cus->getEmailByUsername($username, $email_code);

kint::dump($to);
//$cus->emailResetPassword($to,"Reset your account","");