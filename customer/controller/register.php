<?php
session_start();
require '../model/customer.php';
require '../../home/model/user.php';
require '../../common/kint/Kint.class.php';

$fname = $_POST["txtfname"];
$lname = $_POST["txtlname"];
$address1 = $_POST["txtaddress1"];
$address2 = $_POST["txtaddress2"];
$city = $_POST["txtcity"];
$province = $_POST["txtprovince"];
$email = $_POST["txtemail"];
$contact_no1 = $_POST["txttp1"];
$contact_no2 = $_POST["txttp2"];
$gender = $_POST["gender"];
$birthday = $_POST["txtbday"];
$username = $_POST["txtusername"];
$password = md5($_POST["txtpass"]);
$email_code=md5($username.''.microtime());

$user = new User();
$isNewuser = $user->registerUser($username,$password,$email_code,'Readonly');

if($isNewuser){
    $customer = new Customer();
    $customer->registerCustomer($username, $fname, $lname, $gender, $birthday, $address1, $address2, $city, $province, $email, $contact_no1, $contact_no2);

    //$_SESSION['username'] = $username;
    //$_SESSION['password'] = $password;
    
    $user->activation_email($email,"Activate your account","Hello ".$username.", \n\n You need to activate your account , Please use the link below: \n\n http://localhost/GVPD/home/view/activate_user.php?ecode=$email_code&username=$username \n\n--Green Valley Property Development (PVT) Ltd--");
	
    header("Location:../../home/view/index.php");
}
else{
    header("location:../view/register.php?er=5");  
}


