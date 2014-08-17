<?php
require '../model/add_agreement.php';

$reg_no=$_POST["txt_reg"];
$no=$_POST["txt_no"];
$lawyer_name=$_POST["txt_lname"];
$lawyer_address=$_POST["txt_laddress"];
$lawyer_tel=$_POST["txt_ltel"];
$owner=$_POST["txt_owner"];
$location=$_POST["txt_location"];
$date=$_POST["txt_date"];
$month=$_POST["txt_month"];
$year=$_POST["txt_year"];
$land_owner=$_POST["txt_land_owner"];
$NIC=$_POST["txt_id"];
$address=$_POST["txt_address"];

$add_aggr_data=new Agreement();
$aggreemnt_data=$add_aggr_data->insertAggrData($reg_no,$no,$lawyer_name,$lawyer_address,$lawyer_tel,$owner,$location,$date,$month,$year,$land_owner,$NIC,$address);
header("Location:../view/add_agreement1.php");
?>