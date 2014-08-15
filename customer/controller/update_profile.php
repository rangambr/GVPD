<?php

require '../model/customer.php';
require '../../home/model/user.php';
require_once '../../common/kint/Kint.class.php';
//Kint::dump($_SESSION['username']);
$username = $_SESSION['username'];
if ($username == null && isset($_GET['username'])) {
    $username = $_GET['username'];
}
$customer = new Customer();
$result = $customer->getCustomer($username);

//Kint::dump($result);
while ($row = mysql_fetch_array($result)) {
    $fname = $row['txtfname'];
    //Kint::dump($fname);
    $lname = $row['txtlname'];
    $gender = $row['gender'];
    //KINT::dump($gender);
    $address1 = $row['txtaddress1'];
    $address2 = $row['txtaddress2'];
    $city = $row['txtcity'];
    $birthday = $row['txtbday'];
    $email = $row['txtemail'];
    $contact_no1 = $row['txttp1'];
    $contact_no2 = $row['txttp2'];
}
header("Location:../view/update_profile.php");
//$customer->updateCustomer($fname,$lname,$gender,$address1,$address2,$city,$birthday,$email,$contact_no1,$contact_no2);
//Kint::dump($fname);
?>