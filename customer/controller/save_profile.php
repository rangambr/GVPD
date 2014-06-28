<?php
session_start();
require '../model/customer.php';
require '../../home/model/user.php';
require '../../common/kint/Kint.class.php';

$username= $_SESSION['username'];

$fname = $_POST["txtfname"];
$lname = $_POST["txtlname"];
$address1 = $_POST["txtaddress1"];
$address2 = $_POST["txtaddress2"];
$city = $_POST["city"];
$email = $_POST["txtemail"];
$contact_no1 = $_POST["txttp1"];
$contact_no2 = $_POST["txttp2"];
$gender = $_POST["gender"];
$birthday = $_POST["txtbday"];



$customer = new Customer();
$customer->updateCustomer($fname, $lname, $gender, $address1, $address2, $city, $birthday, $email, $contact_no1, $contact_no2,$username);
header("Location:../view/display_profile.php");
