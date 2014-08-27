<?php
require_once '../../common/conn.php'; 

class Agreement{
    
    function insertToAgreement($reg_no,$agr_no,$location,$date,$fullname,$nic,$address,$price,$valid_time,$description,$wit1,$wit2){
        $db=new Dbconnect();
        $sql="insert into agreement (reg_no,agreement_no,location,date,full_name,NIC,address,agreed_price,valid_period,description,witness1,witness2) values ('$reg_no','$agr_no','$location','$date','$fullname','$nic','$address','$price','$valid_time','$description','$wit1','$wit2')";    
        $result = $db->query($sql);
        return true; 
    }
	function insertToLawyer($l_name,$l_address,$l_tel){
        $db=new Dbconnect();
        $sql="insert into lawyer (l_name,l_address,l_tel) values ('$l_name','$l_address','$l_tel')";    
        $result = $db->query($sql);
        return true; 
    }
	function insertToDev_cost($sur,$adv,$dev,$other,$elec,$tot){
        $db=new Dbconnect();
        $sql="insert into dev_cost (survey,advertising,development,other,electricity,total) values ('$sur','$adv','$dev','$other','$elec','$tot')";
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
        $sql = "select * from agreement where agreement_no='$agrno'";
        $result = $db->query($sql);
        return $result;
    }
	 function deleteAgreement($agrno) {
        $db = new Dbconnect();

        $sql = "DELETE FROM agreement WHERE agreement_no='" . $agrno . "'";
        $result = $db->query($sql);
    }

 
}
?>
 