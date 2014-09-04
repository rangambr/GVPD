<?php require '../controller/view_proposal.php'; ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../../common/CSS/print.css"
type="text/css" media="print" />
    <style type="text/css">
		td{
			padding:0px;
			height:5px;
			padding:2px;
			}
    </style>
    <script src="../../common/JS/jquery-2.1.1.min.js"></script>
         
</head>

<body  bgcolor="#E1E1FF">
	<div class="print" style="background-color:#000089; height:3%; padding:3px; ">
		<h1 style="color:#FFFFFF" align="center">Green Valley Property Development (PVT) Ltd.</h1></div>
	<hr/>
<div class="content">
</div>
<div class="print">
	<form name="frm_proposal" action="../controller/create_project_proposal.php" method="post" >
    	<table align="center" width="600px"  style="padding-top:0px; background-color:#FCFCFC;">
            <tr>
            	
            	<td colspan="2"><label><?php echo '' . $newprop['name']; ?></label></td>
            </tr>
            <tr>
            	
                <td colspan="2"><?php echo '' . $newprop['address']; ?></td>
            </tr>
            
            <tr>
            	<td colspan="2"><h3 align="center"><u><?php echo '' . $newprop['subject']; ?></u></h3></td>
            </tr>
    
            <tr bgcolor="#BABAFF">
            	<td width="282">Total Extent (perches):</td>
                <td width="306" class="required"><?php echo '' . $newprop['total_extent']; ?></td>
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
                      <th width="282" scope="col">&nbsp;</th>
                      <th width="306" scope="col" align="left">Minimum selling price:</th>
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
            	<td width="282">Surveyor Fees :</td>
            	<td width="306"><?php echo '' . $newprop['suveryor']; ?></td>
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
        	<td width="282"></td>
            <td width="306"><?php echo '' . $newprop['tot_less_min']; ?></td>
           
        </tr>
             <tr bgcolor="#BABAFF">
            	<td>Less Sale Tax 1% :</td>
            	<td> <?php echo '' . $newprop['tax_less_min']; ?></td>
                
            </tr> 
             <tr bgcolor="#C3EAF5">
            	<td><h4>Total realization for the owner :</h4></td>
            	<td><h4><u><?php echo '' . $newprop['tot_owner']; ?></u></h4></td>
                
            </tr>
            <tr bgcolor="#C3EAF5">
            	<td colspan="2">We hope to receive your early, favourable response.<br/>Yours faithfully,<br/><br/><br/><br/>
            	  <p><h4><i>Director.<br/>Green Valley Property Development (PVT) Ltd.</i></h4></p></td>
                
            </tr>
        </table>
	</form>
   </div> 
   <div align="center"><input type="button" value=" Print this page "
onclick="window.print();return false;" /></div>
</body>
</html>
