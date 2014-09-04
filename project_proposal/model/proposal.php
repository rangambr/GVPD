<?php
require '../../common/conn.php';

class PProposal{
	function addData($name,$address,$subject,$tot_ext,$roadways,$sellable_ext,$min_sell_price,$tot_minsell,$min_comm,$ans1,$answer1,$sur,$adv,$dev,$other,$elec,$totex,$mintax,$owner_tax,$owner){
		$db=new Dbconnect();
		$sql="INSERT INTO proposal (name,address,subject,total_extent,roadways,sellable_extent	,min_sell_price,tot_min_sell,five_min_sell,min_comm,ans1,suveryor,advertising,development,other,electricity,tot_expences,tot_less_min,tax_less_min,tot_owner) 
		VALUES ('$name','$address','$subject','$tot_ext','$roadways','$sellable_ext','$min_sell_price','$tot_minsell','$min_comm','$ans1','$answer1','$sur','$adv','$dev','$other','$elec','$totex','$mintax','$owner_tax','$owner')";
		$result=$db-> query($sql);
		return true;
		}
	function getAllFrmProposal(){
		$db=new Dbconnect();
		$sql="SELECT * FROM proposal" ;
		$result=$db-> query($sql);
		return $result;
		}
	function deleteProposal($pid){
		$db=new Dbconnect();
		$sql="DELETE FROM proposal WHERE id='".$pid."'" ;
		$result=$db-> query($sql);
		
		}
	function getProposalsById($pid){
		$db=new Dbconnect();
		$sql="SELECT * FROM proposal WHERE id='" . $pid . "'" ;
		$result=$db-> query($sql);
		return $result;
		}
	}
?>