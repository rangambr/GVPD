<?php
require '../model/plan.php';

$p_no=$_POST['txt_pno'];
$p_name=$_POST['txt_pname'];

$obj_plan=new Plan();
$res_plan=$obj_plan->addPlan($p_no,$p_name);

//upload image file1
if ($_FILES["img_plan1"]["error"] == 0) {
    $file_type = $_FILES["img_plan1"]["type"];
    if (($_FILES["img_plan1"]["size"] / 1024) < 1073741824 && ($file_type == 'image/png' || $file_type == 'image/gif' || $file_type == 'image/jpeg' || $file_type == 'image/gif')) {
        $filename1 = basename($_FILES['img_plan1']['name']);
        $extension1 = pathinfo($filename1, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["img_plan1"]["tmp_name"], "../plans/" . $p_name . "1." . $extension1);
        $obj_plan->insertPlanImage($res_plan, $p_name ."1.".$extension1);
    } else {
        header("location:../../plan/view/add_plans.php?er=8");
	}
}
//upload image file2
if ($_FILES["img_plan2"]["error"] == 0) {
    $file_type = $_FILES["img_plan2"]["type"];
    if (($_FILES["img_plan2"]["size"] / 1024) < 1073741824 && ($file_type == 'image/png' || $file_type == 'image/gif' || $file_type == 'image/jpeg' || $file_type == 'image/gif')) {
        $filename1 = basename($_FILES['img_plan2']['name']);
        $extension1 = pathinfo($filename1, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["img_plan2"]["tmp_name"], "../plans/" . $p_name . "2." . $extension1);
        $obj_plan->insertPlanImage($res_plan, $p_name ."2.".$extension1);
    } else {
        header("location:../../plan/view/add_plans.php?er=9");
    }
}
//upload image file3
if ($_FILES["img_plan3"]["error"] == 0) {
    $file_type = $_FILES["img_plan3"]["type"];
    if (($_FILES["img_plan3"]["size"] / 1024) < 1073741824 && ($file_type == 'image/png' || $file_type == 'image/gif' || $file_type == 'image/jpeg' || $file_type == 'image/gif')) {
        $filename1 = basename($_FILES['img_plan3']['name']);
        $extension1 = pathinfo($filename1, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["img_plan3"]["tmp_name"], "../plans/" . $p_name . "3." . $extension1);
        $obj_plan->insertPlanImage($res_plan, $p_name ."3.".$extension1);
    } else {
        header("location:../../plan/view/add_plans.php?er=10");
    }
}
header("location:../../plan/view/add_plans.php");
?>