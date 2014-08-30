<?php
require '../model/plan.php';

$p_no=$_POST['txt_pno'];
$p_name=$_POST['txt_pname'];

$obj_plan=new Plan();
$res_plan=$obj_plan->addPlan($p_no,$p_name);

//upload file
if ($_FILES["img_plan1"]["error"] == 0) {
    $file_type = $_FILES["img_plan1"]["type"];
    if (($_FILES["img_plan1"]["size"] / 1024) < 10240 && ($file_type == 'image/png' || $file_type == 'image/gif' || $file_type == 'image/jpeg' || $file_type == 'image/gif')) {
        $filename1 = basename($_FILES['img_plan1']['name']);
        $extension1 = pathinfo($filename1, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["img_plan1"]["tmp_name"], "../plans/" . $p_name . "1." . $extension1);
        $obj_plan->insertPlanImage($res_plan, $p_name ."1.".$extension1);
    } else {
        header("location:../../plan/view/add_plans.php?er=8");
    }
}
?>