<?php
require '../model/agreement.php';

$reg_no=$_POST["txt_reg"];
$agr_no=$_POST["txt_agr_no"];
$location=$_POST["txt_location"];
$date=$_POST["txt_date"];
$fullname=$_POST["txt_land_owner"];
$nic=$_POST["txt_nic"];
$address=$_POST["txt_address"];
$price=$_POST["txt_price"];
$valid_time=$_POST["txt_valid"];
$description=$_POST["txt_description"];
$wit1=$_POST["txt_wit1"];
$wit2=$_POST["txt_wit2"];

$l_name=$_POST["txt_lname"];
$l_address=$_POST["txt_laddress"];
$l_tel=$_POST["txt_ltel"];

$sur=$_POST["txt_survey"];
$adv=$_POST["txt_adv"];
$dev=$_POST["txt_dev"];
$other=$_POST["txt_other"];
$elec=$_POST["txt_electricity"];
//$tot=$_POST["txt_total"];
$tot=$sur+$adv+$dev+$other+$elec;

$add_aggr_data=new Agreement();
$agreement_id=$add_aggr_data->insertToAgreement($reg_no,$agr_no,$location,$date,$fullname,$nic,$address,$price,$valid_time,$description,$wit1,$wit2);

$add_aggr_data->insertToLawyer($agreement_id,$l_name,$l_address,$l_tel);
$add_aggr_data->insertToDev_cost($agreement_id,$sur,$adv,$dev,$other,$elec,$tot);

header("Location:../view/agreement_details.php?msg=10");
?>


