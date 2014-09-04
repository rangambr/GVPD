<?php

require '../../home/model/user.php';
require_once '../../common/kint/Kint.class.php';
require '../model/admin.php';
//Kint::dump($_SESSION['username']);

$username = $_REQUEST['username'];

$adm = new Admin();
$admRecord = $adm->generate_password();

$adm->updatePassword($username,$admRecord);
$toemail=$adm->getEmailByUsername($username,$email);
while ($row = mysql_fetch_array($toemail)) {	
    
		

$adm->reset_password_email($row['email'],"Reset your password","Hello ".$username.", \n\n You need to reset your password , Please use the link below: \n\n http://localhost/GVPD/home/view/reset_password_by_admin.php?ecode=$email_code&username=$username \n\n--Green Valley Property Development (PVT) Ltd--");
	}
 header("location:../view/manage_users.php");
?>