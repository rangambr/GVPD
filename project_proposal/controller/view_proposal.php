<?php 
require '../model/proposal.php';


$proposalId = $_REQUEST['propId'];
$proposal = new PProposal();

$result = $proposal->getProposalsById($proposalId);
$newprop;

while ($row = mysql_fetch_array($result)) {	
    $newprop = $row;	
}
?>	
	