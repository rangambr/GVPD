<?php
require_once '../../common/conn.php'; 

class Agreement{
    
    function insertToAgreement($reg_no,$agr_no,$location,$date,$fullname,$nic,$address,$price,$valid_time,$description,$wit1,$wit2){
        $db=new Dbconnect();
        $sql="insert into agreement (reg_no,agreement_no,location,date,full_name,NIC,address,agreed_price,valid_period,description,witness1,witness2) values ('$reg_no','$agr_no','$location','$date','$fullname','$nic','$address','$price','$valid_time','$description','$wit1','$wit2')";    
        $result = $db->query_last_id($sql);
        return $result; 
    }
	function insertToLawyer($agreement_id,$l_name,$l_address,$l_tel){
        $db=new Dbconnect();
        $sql="insert into lawyer (agreement_id,l_name,l_address,l_tel) values ('$agreement_id','$l_name','$l_address','$l_tel')";    
        $result = $db->query($sql);
        return true; 
    }
	function insertToDev_cost($agreement_id,$sur,$adv,$dev,$other,$elec,$tot){
        $db=new Dbconnect();
        $sql="insert into dev_cost (agreement_id,survey,advertising,development,other,electricity,total) values ('$agreement_id','$sur','$adv','$dev','$other','$elec','$tot')";
		$result = $db->query($sql);
        return true; 
    }
	
	function getAllAgreements() {
        $db = new Dbconnect();
        $sql = "select * from agreement";
        $result = $db->query($sql);
        return $result;
    }
 	function getAgreementsById($agrno) {
        $db = new Dbconnect();
        $sql = "select * from agreement,lawyer,dev_cost where agreement_no='$agrno'";
        $result = $db->query($sql);
        return $result;
    }
	 function deleteAgreement($agrno) {
        $db = new Dbconnect();

        $sql = "DELETE FROM agreement WHERE agreement_no='" . $agrno . "'";
        $result = $db->query($sql);
    }
	
	function updateAgreementTable($reg_no,$agrno,$location,$date,$fullname,$nic,$address,$price,$valid_time,$description,$wit1,$wit2){
		$db = new Dbconnect();
        $sql = "UPDATE agreement SET reg_no='$reg_no',location = '$location',date = '$date',full_name = '$fullname',NIC = '$nic',address = '$address',agreed_price='$price',valid_period='$valid_time',description='$description',witness1='$wit1',witness2='$wit2' where  agreement_no='" . $agrno . "' ";
        $result = $db->query($sql);
        //KINT::dump($result);
        return $result;
    }
	
	function updateLawyerTable($agrno,$l_name,$l_address,$l_tel){
		$db = new Dbconnect();
        $sql = "UPDATE lawyer SET reg_no='$reg_no',location = '$location',date = '$date',full_name = '$fullname',NIC = '$nic',address = '$address',agreed_price='$price',valid_period='$valid_time',description='$description',witness1='$wit1',witness2='$wit2' where  agreement_no='" . $agrno . "' ";
        $result = $db->query($sql);
        //KINT::dump($result);
        return $result;
    }
	function updateDev_costTable($agrno,$sur,$adv,$dev,$other,$elec, $tot){
		$db = new Dbconnect();
        $sql = "UPDATE dev_cost SET reg_no='$reg_no',location = '$location',date = '$date',full_name = '$fullname',NIC = '$nic',address = '$address',agreed_price='$price',valid_period='$valid_time',description='$description',witness1='$wit1',witness2='$wit2' where  agreement_no='" . $agrno . "' ";
        $result = $db->query($sql);
        //KINT::dump($result);
        return $result;
    }
 
}
?>
 