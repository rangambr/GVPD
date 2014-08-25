<?php
require_once '../../common/conn.php'; 

class Agreement{
    
    function insertAggrData($reg_no,$no,$lawyer_name,$lawyer_address,$lawyer_tel,$owner,$location,$date,$month,$year,$land_owner,$NIC,$address){
        $db=new Dbconnect();
        $sql="insert into agreement (reg_no,number,lawyer_name	,lawyer_address,lawyer_tel,owner_name,location,date,month,year,land_owner,nic,address) values ('$reg_no','$no','$lawyer_name','$lawyer_address','$lawyer_tel','$owner','$location','$date','$month','$year','$land_owner','$NIC','$address')";    
        $result = $db->query($sql);
        return true; 
    }
	
	//function getAllAgreements() {
//        $db = new Dbconnect();
//        $sql = "SELECT * FROM agreement ORDER BY type, username";
//        $result = $db->query($sql);
//        return $result;
 //   }
}
?>