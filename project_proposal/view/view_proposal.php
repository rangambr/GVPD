<?php require '../controller/view_proposal.php'; ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Project Proposal</title>
    <link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
    
    
    <style type="text/css">
		td{
			padding:0px;
			height:5px;
			padding:5px;
			}
    </style>
    <script src="../../common/JS/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
    	
	</script>

        
</head>

<body  bgcolor="#E1E1FF">
	<div style="background-color:#000089; height:10%;padding:10px;padding-left:50px">
		<h3 style="color:#FFFFFF">Project Proposal</h3>
	</div>
	<br/>
	<div class="admin_menu_bar" align="center" id="cssmenu">
            <ul>
               <li class='active'><a href='../../home/view/index.php'>Home</a></li>
              <li><a href='../../admin/view/control_panel.php'><span>Admin panel</span></a></li>
              <li><a href='../../admin/view/manage_users.php'><span>Users</span></a></li>
              <li><a href='../../admin/view/manage_properties.php'><span>Properties</span></a></li>
              <li><a href='../../admin/view/manage_inquiries.php'><span>Inquiries</span></a></li>
              <li><a href='../../admin/view/manage_reviews.php'><span>Reviews</span></a></li>
              <li><a href='../../admin/view/reports.php'><span>Reports</span></a></li>
              <li><a href='../../agreement/view/agreement_details.php'><span>Agreements</span></a></li>
              <li><a href='../../plan/view/plan_details.php'><span>Property plans</span></a></li>
                <li><a href='proposal_main_page.php'><span>Project proposals</span></a></li>
            </ul>
        </div>
<br/>
<?php if (!empty($_REQUEST['msg']) && $_REQUEST['msg'] == "10") { ?>
<div align="center">
<div align="center" style="border:solid #275C0D; width:300px; height:40px; padding:5px; background:#E3EFAF" ><img src="../../common/images/icons/successful.png" width="16px" height="16px"/><span style="color:#368112; font-size:14px;" ><b>You have entered information successfully!</b><br/>
<a href="../../agreement/view/view_agreement .php"><b>View your agreement</b></a></span></div>
</div>
<?php } ?>
<br/>
<div class="content">
<div>
	<form name="frm_proposal" action="../controller/create_project_proposal.php" method="post" >
    	<table align="center" width="700px"  style="padding-top:0px; background-color:#FCFCFC;">
        	<tr>
            	<td colspan="2" align="center" style="padding:6px; font-size:16px;"><u><h2>PROJECT PROPOSAL</h2></u></td>
            </tr>
            <tr>
            	
            	<td colspan="2"><label><?php echo '' . $newprop['name']; ?></label></td>
            </tr>
            <tr>
            	
                <td width="314" colspan="2"><?php echo '' . $newprop['address']; ?></td>
            </tr>
            
            <tr>
            	<td width="314" colspan="2"><h3 align="center"><u><?php echo '' . $newprop['subject']; ?></u></h3></td>
            </tr>
    
            <tr bgcolor="#BABAFF">
            	<td width="224">Total Extent (perches):</td>
                <td width="243" class="required"><?php echo '' . $newprop['total_extent']; ?></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Roadways (perches):</td>
                <td class="required"><label><?php echo '' . $newprop['roadways']; ?></label></td>
            </tr>
            <tr bgcolor="#C3EAF5">
            	<td>Sellable Extent (perches):</td>
                <td class="required"><?php echo '' . $newprop['sellable_extent']; ?></td>
            </tr>
	
                    <tr>
                      <th width="224" scope="col">&nbsp;</th>
                      <th width="240" scope="col">Minimum selling price:</th>
                    </tr>
                    <tr bgcolor="#BABAFF">
                      <td>&nbsp;</td>
                      <td class="required"><label><?php echo '' . $newprop['min_sell_price']; ?></label></td>
                     
                    </tr>
                    <tr bgcolor="#BABAFF">
                      <td>Total selling price:</td>
                      <td class="required"><label><?php echo '' . $newprop['tot_min_sell']; ?></label></td>
                      
                    <tr bgcolor="#BABAFF">
                      <td>Less 5% commission:</td>
                      <td class="required"><label><?php echo '' . $newprop['five_min_sell']; ?></label></td>
                    </tr>
                    <tr bgcolor="#C3EAF5">
                      <td>&nbsp;</td>
                      <td class="required"><label><?php echo '' . $newprop['ans1']; ?></label></td>
                    </tr>
                    <tr bgcolor="#BABAFF">
                      <td>Plus 50% of over &amp; above selling price:</td>
                      <td class="required"><label><?php echo 'Nil' ; ?></label></td>
                    </tr>
                    <tr bgcolor="#C3EAF5">
                      <td>&nbsp;</td>
                      <td class="required"><?php echo '' . $newprop['five_min_sell']; ?></td>
                    </tr>
     
      <tr>
            	<td colspan="3"><strong>Less development expenses.</strong></td>
      </tr>
            
            
            <tr bgcolor="#BABAFF">
            	<td width="227">Surveyor Fees :</td>
            	<td width="239"><?php echo '' . $newprop['suveryor']; ?></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Advertising :</td>
            	<td><?php echo '' . $newprop['advertising']; ?></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Development Exps :</td>
            	<td><?php echo '' . $newprop['development']; ?></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Other Exps :</td>
            	<td><?php echo '' . $newprop['other']; ?></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Electricity :</td>
            	<td><?php echo '' . $newprop['electricity']; ?></td>
            </tr>
            <tr bgcolor="#C3EAF5">
            	<td>Total :</td>
            	<td><?php echo '' . $newprop['tot_expences']; ?></td>
            </tr>
  
   		<tr bgcolor="#BABAFF">
        	<td width="224"></td>
            <td width="242"><?php echo '' . $newprop['tot_less_min']; ?></td>
           
        </tr>
             <tr bgcolor="#BABAFF">
            	<td>Less Sale Tax 1% :</td>
            	<td> <?php echo '' . $newprop['tax_less_min']; ?></td>
                
            </tr> 
             <tr bgcolor="#C3EAF5">
            	<td><h3>Total realization for the owner :</h3></td>
            	<td><h3><?php echo '' . $newprop['tot_owner']; ?></h3></td>
                
            </tr>
        </table>
	</form>
   </div> 
</div>
</body>
</html>
