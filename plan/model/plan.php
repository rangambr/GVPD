<?php

//connect to db
require '../../common/conn.php';

class Plan {

    function addPlan($p_no, $p_name) {
        $db = new Dbconnect();
        $sql = "INSERT INTO plan (plan_no,plan_name) VALUES ('$p_no','$p_name')";
        $result = $db->query_last_id($sql);
        return $result;
    }

    // plan image upload
    function insertPlanImage($res_plan, $pimg) {
        $db = new Dbconnect();
        $sql = "INSERT INTO plan_photo (plan_id, plan_img) VALUES ('$res_plan', '$pimg')";
        $result = $db->query($sql);
        //KINT::dump($result);
        return true;
    }

    function getAllPlans() {
        $db = new Dbconnect();
        $sql = "SELECT * FROM plan";
        $result = $db->query($sql);
        return $result;
    }

}

?>	