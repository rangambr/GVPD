<?php session_start();
require '../model/customer.php';
require '../../property/model/property.php';
require '../../home/model/user.php';
require_once '../../common/kint/Kint.class.php';
//Kint::dump($_SESSION['username']);
$username=$_SESSION['username'];
if($username == null && isset($_GET['username'])){
    $username = $_GET['username'];
}
$customer=new Customer();
$result=$customer->getCustomer($username);

//Kint::dump($result);
while($row=mysql_fetch_array($result)){
	$fname=$row['fname'];
	//Kint::dump($fname);
	$lname=$row['lname'];
	$gender = $row['gender'];
        //KINT::dump($gender);
	$address1 = $row["address1"];
	$address2 = $row["address2"];
	$city = $row["city"];
	$birthday = $row["birthday"];
	$email = $row["email"];
	$contact_no1 = $row["contact_no_1"];
	$contact_no2 = $row["contact_no_2"];
	}
        
$watch_list = $customer->get_watchlist($username);  
$prps = new Property();

$my_properties = $prps->getPropertiesByUsername($username);
//$customer->updateCustomer($fname,$lname,$gender,$address1,$address2,$city,$birthday,$email,$contact_no1,$contact_no2);
//Kint::dump($fname);

 

?>