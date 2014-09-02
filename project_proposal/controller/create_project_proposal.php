<?php
require'../model/proposal.php';

$name=$_POST['txt_cname'];
$address=$_POST['txt_caddress'];
$subject=$_POST['txt_sub'];

$tot_ext=$_POST['txt_extenttot'];
$roadways=$_POST['txt_road'];
$sellable_ext=$_POST['txt_extentsell'];

$min_sell_price=$_POST['txt_minsell'];
$avg_sell_price=$_POST['txt_avgsell'];

$tot_minsell=$_POST['txt_tot_minsell'];
$tot_avgsell=$_POST['txt_tot_avgsell'];
$min_comm=$_POST['txt_min_comm'];
$avg_comm=$_POST['txt_avg_comm'];
$ans1=$_POST['txt_ans1'];
$ans2=$_POST['txt_ans2'];
$fif_min=$_POST['txt_fif1'];
$fif_avg=$_POST['txt_fif2'];
$answer1=$_POST['txt_answer1'];
$answer2=$_POST['txt_answer2'];

$sur=$_POST["txt_survey"];
$adv=$_POST["txt_adv"];
$dev=$_POST["txt_dev"];
$other=$_POST["txt_other"];
$elec=$_POST["txt_electricity"];
//$tot=$_POST["txt_total"];
$tot=$sur+$adv+$dev+$other+$elec;

$name=$_POST['txt_min_tax'];
$name=$_POST['txt_avg_tax'];
$name=$_POST['txt_owner_tax'];
$name=$_POST['txt_com_tax'];
$name=$_POST['txt_owner'];
$name=$_POST['txt_com'];
?>