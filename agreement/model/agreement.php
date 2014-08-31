<?php

require_once '../../common/conn.php';

//require '../../common/kint/Kint.class.php'; 

class Agreement {

    function insertToAgreement($reg_no, $agr_no, $location, $date, $fullname, $nic, $address, $price, $valid_time, $description, $wit1, $wit2) {
        $db = new Dbconnect();
        $sql = "insert into agreement (reg_no,agreement_no,location,date,full_name,NIC,address,agreed_price,valid_period,description,witness1,witness2) values ('$reg_no','$agr_no','$location','$date','$fullname','$nic','$address','$price','$valid_time','$description','$wit1','$wit2')";
        $result = $db->query_last_id($sql);
        return $result;
    }

    function insertToLawyer($agreement_id, $l_name, $l_address, $l_tel) {
        $db = new Dbconnect();
        $sql = "insert into lawyer (agreement_id,l_name,l_address,l_tel) values ('$agreement_id','$l_name','$l_address','$l_tel')";
        $result = $db->query($sql);
        return true;
    }

    function insertToDev_cost($agreement_id, $sur, $adv, $dev, $other, $elec, $tot) {
        $db = new Dbconnect();
        $sql = "insert into dev_cost (agreement_id,survey,advertising,development,other,electricity,total) values ('$agreement_id','$sur','$adv','$dev','$other','$elec','$tot')";
        $result = $db->query($sql);
        return true;
    }

    function getAllAgreements() {
        $db = new Dbconnect();
        $sql = "select * from agreement";
        $result = $db->query($sql);
        return $result;
    }

    function getAgreementsById($agrid) {
        $db = new Dbconnect();
        $sql = "select * from agreement, lawyer, dev_cost where agreement.id = '$agrid' and lawyer.agreement_id = '$agrid' and dev_cost.agreement_id = '$agrid'";
        $result = $db->query($sql);
        return $result;
    }

    function deleteAgreement($agrid) {
        $db = new Dbconnect();

<<<<<<< HEAD
        $sql = "DELETE FROM agreement WHERE agreement_id='" . $agrno . "'";
        $result = $db->query($sql);
=======
        $sql1 = "DELETE FROM agreement WHERE id='" . $agrid . "'";
        $sql2 = "DELETE FROM lawyer WHERE agreement_id='" . $agrid . "'";
        $sql3 = "DELETE FROM dev_cost WHERE agreement_id='" . $agrid . "'";
        $result1 = $db->query($sql1);
        $result2 = $db->query($sql2);
        $result3 = $db->query($sql3);
>>>>>>> df88000619ab2641c7779eaa11af6d08dc2c4806
    }

    function updateAgreementTable($reg_no, $agrid, $argno, $location, $date, $fullname, $nic, $address, $price, $valid_time, $description, $wit1, $wit2) {
        $db = new Dbconnect();
        $sql = "UPDATE agreement SET reg_no='$reg_no', agreement_no ='$argno', location = '$location',date = '$date',full_name = '$fullname',NIC = '$nic',address = '$address',agreed_price='$price',valid_period='$valid_time',description='$description',witness1='$wit1',witness2='$wit2' where  id='" . $agrid . "' ";
        $result = $db->query($sql);
        //KINT::dump($result);
        return $result;
    }
<<<<<<< HEAD
	
	function updateLawyerTable($agrno,$l_name,$l_address,$l_tel){
		
		$db = new Dbconnect();
        $sql = "UPDATE lawyer SET l_name='$l_name',l_address = '$l_address',l_tel = '$l_tel' WHERE agreement_id='$agrno' ";
		
        $result = $db->query($sql);
       //kint::dump($result);
        return $result;
    }
	
	function updateDev_costTable($agrno,$sur,$adv,$dev,$other,$elec, $tot){
		$db = new Dbconnect();
        $sql = "UPDATE dev_cost SET survey='$sur',advertising = '$adv',development = '$dev',other= '$other',electricity= '$elec',tot= '$tot' WHERE  agreement_id='$agrno' ";
		
=======

    function updateLawyerTable($agrid, $l_name, $l_address, $l_tel) {

        $db = new Dbconnect();
        $sql = "UPDATE lawyer SET l_name='$l_name',l_address = '$l_address',l_tel = '$l_tel' WHERE agreement_id='$agrid' ";
        //kint::dump($sql);
        $result = $db->query($sql);

        return $result;
    }

    function updateDev_costTable($agrid, $sur, $adv, $dev, $other, $elec, $tot) {
        $db = new Dbconnect();
        $sql = "UPDATE dev_cost SET survey='$sur',advertising = '$adv',development = '$dev',other= '$other',electricity= '$elec',total= '$tot' WHERE  agreement_id='$agrid' ";
>>>>>>> df88000619ab2641c7779eaa11af6d08dc2c4806
        $result = $db->query($sql);
        //KINT::dump($result);
        return $result;
    }

}

?>
 