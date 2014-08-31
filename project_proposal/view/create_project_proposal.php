<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Project Proposal</title>
    <link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
    <style type="text/css">
		td{
			padding:0px;
			}
    	    </style>
    

<link rel="stylesheet" type="text/css" href="../../common/datepicker/jquery.datepick.css">

        <script src="../../common/JS/jquery-2.1.1.min.js"></script>
        <script src="../../common/datepicker/jquery.plugin.js"></script>
        <script src="../../common/datepicker/jquery.datepick.js"></script>

        <script>
            $(function() {
                $('#Datepicker1').datepick({dateFormat: 'yyyy-mm-dd'});

            });  
		
		
    	function validateForm(){
			var x=document.forms["frm_agreement"]["txt_reg"].value; 
			if(x==null || x==""){
				alert("Please enter the prior registration number!");
				return false
				}
			var x=document.forms["frm_agreement"]["txt_lname"].value; 
			if(x==null || x==""){
				alert("Please enter the name of the lawyer!");
				return false
				}
			var x=document.forms["frm_agreement"]["txt_laddress"].value; 
			if(x==null || x==""){
				alert("Please enter the address of the lawyer!");
				return false
				}
			var x=document.forms["frm_agreement"]["txt_ltel"].value; 
			if(x==null || x==""){
				alert("Please enter the lawyers telephone number!");
				return false
				}
			var x=document.forms["frm_agreement"]["txt_agr_no"].value; 
			if(x==null || x==""){
				alert("Please enter the agreement no!");
				return false
				}
			var x=document.forms["frm_agreement"]["txt_location"].value; 
			if(x==null || x==""){
				alert("Please enter the location!");
				return false
				}
			var x=document.forms["frm_agreement"]["txt_date"].value; 
			if(x==null || x==""){
				alert("Please enter the date!");
				return false
				}
			var x=document.forms["frm_agreement"]["txt_nic"].value; 
			if(x==null || x==""){
				alert("Please enter the NIC!");
				return false
				}
			 if (!validateNIC($("#txt_nic").val())) {
                    alert('Please enter a valid NIC number.');
                    return false;
                }
			var x=document.forms["frm_agreement"]["txt_address"].value; 
			if(x==null || x==""){
				alert("Please enter the land owner's address!");
				return false
				}
			var x=document.forms["frm_agreement"]["txt_address"].value; 
			if(x==null || x==""){
				alert("Please enter the address of the land owner!");
				return false
				}
			var x=document.forms["frm_agreement"]["txt_price"].value; 
			if(x==null || x==""){
				alert("Please enter the minimum price!");
				return false
				}
			
				var x=document.forms["frm_agreement"]["txt_valid"].value; 
			if(x==null || x==""){
				alert("Please enter valid period!");
				return false
				}
			if (!isDecimal($("#txt_survey").val())) {
                    alert('Please enter a price.');
                    return false;
                }
		}
			
			function validateNIC(nic) {
//ine characters should be numbers[0-9],9 digits are numbers{9},ext letter should be x, X, v or V[vVxX],regular expression is over$/
                var re = /^[0-9]{9}[vVxX]$/;
                return re.test(nic);
            }
			function isDecimal (s) {// Checks that an input string is a decimal number, with an optional +/- sign character.
var isDecimal_re     = /^\s*(\+|-)?((\d+(\.\d+)?)|(\.\d+))\s*$/;
   return String(s).search (isDecimal_re) != -1
}
			
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
<div class="content" style="padding-top:0px; background-color:#FCFCFC" >
	<form name="frm_agreement" action="../../agreement/controller/agreement.php" method="post" onsubmit="return validateForm()">
    	<table align="center" width="500px">
        	<tr>
            	<td colspan="2" align="center" style="padding:6px; font-size:16px;"><u><b>PROJECT PROPOSAL</b></u></td>
            </tr>
            <tr>
            	<td width="121" >Client's  address:</td>
                <td width="314" class="required"><label><textarea name="txt_caddress" cols="42" rows="3"></textarea></label></td>
            </tr>
            <tr>
            	<td >Date :</td>
            	<td class="required"><label><input type="text" id="Datepicker1" name="txt_date" size="40" readonly/></label></td>
            </tr>
            <tr>
            	<td width="121" >Subject:</td>
                <td width="314" class="required"><label><input type="text" id="Datepicker1" name="txt_date" size="40" /></label></td>
            </tr>
     </table>
         <br/>   
        <table align="center" width="500px">
            <tr bgcolor="#BABAFF">
            	<td width="359">Total Extent (perches):</td>
                <td width="129" class="required"><label><input name="txt_extenttot" type="text" size="20"/></label></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Roadways (perches):</td>
                <td class="required"><label><input name="txt_road" type="text" size="20"/></label></td>
            </tr>
            <tr bgcolor="#C3EAF5">
            	<td>Sellable Extent (perches):</td>
                <td class="required"><label><input name="txt_extentsell" type="text" size="20"/></label></td>
            </tr>
	</table>   
     <br/>
                <table align="center" width="500px">
                    <tr>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">Minimum selling price:</th>
                      <th scope="col">Average selling price:</th>
                    </tr>
                    <tr bgcolor="#BABAFF">
                      <td>&nbsp;</td>
                      <td class="required"><label><input name="txt_minsell" type="text" size="20"/></label></td>
                      <td class="required"><label><input name="txt_avgsell" type="text" size="20"/></label></td>
                    </tr>
                    <tr bgcolor="#BABAFF">
                      <td>Total selling price:</td>
                      <td class="required"><label><input name="txt_tot_minsell" type="text" size="20"/></label></td>
                      <td class="required"><label><input name="txt_tot_avgsell" type="text" size="20"/></label></td>
                    </tr>
                    <tr bgcolor="#BABAFF">
                      <td>Less 5% commission:</td>
                      <td class="required"><label><input name="txt_min_comm" type="text" size="20"/></label></td>
                      <td class="required"><label><input name="txt_avg_comm" type="text" size="20"/></label></td>
                    </tr>
                    <tr bgcolor="#C3EAF5">
                      <td>&nbsp;</td>
                      <td class="required"><label><input name="txt_ans1" type="text" size="20"/></label></td>
                      <td class="required"><label><input name="txt_ans2" type="text" size="20"/></label></td>
                    </tr>
                    <tr bgcolor="#BABAFF">
                      <td>Plus 50% of over &amp; above selling price:</td>
                      <td class="required"><label><input name="txt_fif1" type="text" size="20"/></label></td>
                      <td class="required"><label><input name="txt_fif2" type="text" size="20"/></label></td>
                    </tr>
                    <tr bgcolor="#C3EAF5">
                      <td>&nbsp;</td>
                      <td class="required"><label><input name="txt_answer1" type="text" size="20"/></label></td>
                      <td class="required"><label><input name="txt_answer2" type="text" size="20"/></label></td>
                    </tr>
      </table>
      
      <br/>
	<table align="center" width="500px">
      <tr>
            	<td colspan="3"><strong>Less development expenses.</strong></td>
      </tr>
            
            
            <tr bgcolor="#BABAFF">
            	<td width="359">Surveyor Fees :</td>
            	<td width="129"> <input name="txt_survey" id="txt_survey" type="text" size="20" placeholder="eg: 10000.00"/></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Advertising :</td>
            	<td> <input name="txt_adv" placeholder="eg: 10000.00" type="text" size="20"/></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Development Exps :</td>
            	<td> <input name="txt_dev" placeholder="eg: 10000.00" type="text" size="20"/></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Other Exps :</td>
            	<td> <input name="txt_other" placeholder="eg: 10000.00" type="text" size="20"/></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Electricity :</td>
            	<td> <input name="txt_electricity" placeholder="eg: 10000.00" type="text"  size="20"/></td>
            </tr>
            <tr bgcolor="#C3EAF5">
            	<td>Total :</td>
            	<td> <input name="txt_total" placeholder="eg: 10000.00" type="text"  size="20"/></td>
            </tr>
   </table>
   <table align="center" width="500px">
   		<tr bgcolor="#BABAFF">
        	<td></td>
            <td><input name="txt_tax" type="text"  size="20"/></td>
            <td><input name="txt_tax" type="text"  size="20"/></td>
        </tr>
             <tr bgcolor="#BABAFF">
            	<td>Less Sale Tax 1% :</td>
            	<td> <input name="txt_owner_tax" type="text"  size="20"/></td>
                <td> <input name="txt_com_tax" type="text" size="20"/></td>
            </tr> 
             <tr bgcolor="#C3EAF5">
            	<td><strong style="font-size:14px;">Total realization for the owner :</strong></td>
            	<td> <input name="txt_owner" placeholder="eg: 10000.00" type="text"  size="20"/></td>
                <td> <input name="txt_com" placeholder="eg: 10000.00" type="text"  size="20"/></td>
            </tr>           
            <tr>
            	<td colspan="3" align="center"><input type="submit" value="save" /></td>
            </tr>
        </table>
	</form>
    
</div>
</body>
</html>
