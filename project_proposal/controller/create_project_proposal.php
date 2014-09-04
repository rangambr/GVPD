<?php
require'../model/proposal.php';

$name=$_POST['txt_cname'];
$address=$_POST['txt_caddress'];
$subject=$_POST['txt_sub'];

$tot_ext=$_POST['txt_extenttot'];
$roadways=$_POST['txt_road'];
$sellable_ext=$_POST['txt_extentsell'];

$min_sell_price=$_POST['txt_minsell'];

$tot_minsell=$_POST['txt_tot_minsell'];
$min_comm=$_POST['txt_min_comm'];
$ans1=$_POST['txt_ans1'];
//$fif_min=$_POST['txt_fif1'];
$answer1=$_POST['txt_answer1'];

$sur=$_POST["txt_survey"];
$adv=$_POST["txt_adv"];
$dev=$_POST["txt_dev"];
$other=$_POST["txt_other"];
$elec=$_POST["txt_electricity"];
$totex=$_POST["txt_total"];
//$tot=$sur+$adv+$dev+$other+$elec;

$mintax=$_POST['txt_min_tax'];
$owner_tax=$_POST['txt_owner_tax'];
$owner=$_POST['txt_owner'];

$proposal=new PProposal();
$proposal->addData($name,$address,$subject,$tot_ext,$roadways,$sellable_ext,$min_sell_price,$tot_minsell,$min_comm,$ans1,$answer1,$sur,$adv,$dev,$other,$elec,$totex,$mintax,$owner_tax,$owner);
header("Location:../view/proposal_main_page.php");
?>