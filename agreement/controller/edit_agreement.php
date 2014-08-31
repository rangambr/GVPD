<?php

require '../model/agreement.php';
require '../../common/kint/Kint.class.php';
//$agrno = $_REQUEST['agr_no'];

$reg_no = $_POST["txt_reg"];
$agr_no = $_POST["txt_agr_no"];
$agr_id = $_POST["txt_agr_id"];
$location = $_POST["txt_location"];
$date = $_POST["txt_date"];
$fullname = $_POST["txt_land_owner"];
$nic = $_POST["txt_nic"];
$address = $_POST["txt_address"];
$price = $_POST["txt_price"];
$valid_time = $_POST["txt_valid"];
$description = $_POST["txt_description"];
$wit1 = $_POST["txt_wit1"];
$wit2 = $_POST["txt_wit2"];

$l_name = $_POST["txt_lname"];
$l_address = $_POST["txt_laddress"];
$l_tel = $_POST["txt_ltel"];

$sur = $_POST["txt_survey"];
$adv = $_POST["txt_adv"];
$dev = $_POST["txt_dev"];
$other = $_POST["txt_other"];
$elec = $_POST["txt_electricity"];
//$tot=$_POST["txt_total"];
//$tot=$sur+$adv+$dev+$other+$elec;
//update agreement table
$add_aggr_data = new Agreement();
$add_aggr_data->updateAgreementTable($reg_no, $agr_id, $agr_no, $location, $date, $fullname, $nic, $address, $price, $valid_time, $description, $wit1, $wit2);

//update lawyer table
$add_aggr_data->updateLawyerTable($agr_id, $l_name, $l_address, $l_tel);

//update dev_cost table

$tot=$sur+$adv+$dev+$other+$elec;
$add_aggr_data->updateDev_costTable($agr_id, $sur, $adv, $dev, $other, $elec, $tot);
header("location:../view/agreement_details.php?agr_no=" . $agr_no);

?>