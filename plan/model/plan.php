<?php
//connect to db
require '../../common/conn.php';

class Plan {
	function addPlan($p_no, $p_name){
		$db=new Dbconnect();
		$sql="INSERT INTO plan (plan_no,property_name) VALUES ('$p_no','$p_name')";
		$result=$db->query($sql);
		return true;
		}	
	 // plan image upload
    function insertPlanImage($p_no, $pimg) {
        $db = new Dbconnect();
        $sql = "INSERT INTO plan_photo (plan_no, plan_img) VALUES ('$p_no', '$pimg')";
        $result = $db->query($sql);
        //KINT::dump($result);
        return true;
    }
}	
?>	