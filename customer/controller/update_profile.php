<?php
require '../model/customer.php';
require '../../home/model/user.php';
require '../../common/kint/Kint.class.php';

//Kint::dump($_SESSION['username']);
$username=$_SESSION['username'];

$customer=new Customer();
$result=$customer->getCustomer($username);
$fname="ABC";
//Kint::dump($result);
while($row=mysql_fetch_array($result)){
	$fname=$row['fname'];
	//Kint::dump($fname);
	$lname=$row['lastname'];
	$gender = $row['gender'];
	$address1 = $row["address1"];
	$address2 = $row["address2"];
	$city = $row["city"];
	$birthday = $row["birthday"];
	$email = $row["email"];
	$contact_no1 = $row["contact_no_1"];
	$contact_no2 = $row["contact_no_2"];
	}
//$customer->updateCustomer($fname,$lname,$gender,$address1,$address2,$city,$birthday,$email,$contact_no1,$contact_no2);
//Kint::dump($fname);

 

?>