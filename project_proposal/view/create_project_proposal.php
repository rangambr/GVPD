<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Project Proposal</title>
    <link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
    
    
    <style type="text/css">
		td{
			padding:4px;
			}
    </style>
    <script src="../../common/JS/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
    	function updatesum(){
        	document.frm_proposal.txt_extentsell.value = (document.frm_proposal.txt_extenttot.value -0) - (document.frm_proposal.txt_road.value -0);
		}	
		function totalSellingPriceMin(){
			document.frm_proposal.txt_tot_minsell.value = (document.frm_proposal.txt_extentsell.value -0) * (document.frm_proposal.txt_minsell.value -0);
			
			}
		function fivePrecent(){
        	var a=document.frm_proposal.txt_tot_minsell.value;
			var b=a*0.05;
			document.frm_proposal.txt_min_comm.value= b ;
		}	
      function minusComission(){
		  var a=document.frm_proposal.txt_tot_minsell.value;
			//alert(a);
		  var b=document.frm_proposal.txt_min_comm.value;
		  var c=(a-b);
		  document.frm_proposal.txt_ans1.value= c ;
		  
		  var aa=document.frm_proposal.txt_ans1.value;
		  var bb=document.frm_proposal.txt_fif1.value;
		  var cc=(aa+bb);
		  document.frm_proposal.txt_answer1.value= cc ;

		  }
		  function minusSum(){
			  document.frm_proposal.txt_min_tax.value = (document.frm_proposal.txt_answer1.value -0) - (document.frm_proposal.txt_total.value -0);
			  
			  }
		  function Sum(){
			  document.frm_proposal.txt_total.value = (document.frm_proposal.txt_survey.value -0) + 
			  											(document.frm_proposal.txt_adv.value -0) +
														(document.frm_proposal.txt_dev.value -0)+
														(document.frm_proposal.txt_other.value -0)+
														(document.frm_proposal.txt_electricity.value -0);
			  }
		function sumup(){
			var a=document.frm_proposal.txt_ans1.value;
			var b=document.frm_proposal.txt_fif1.value;
			var c=(a+b);
			document.frm_proposal.txt_answer1.value=c;
			}
		function lessExpenses(){
			var a=document.frm_proposal.txt_answer1.value;
			var b=document.frm_proposal.txt_total.value;
			var c=(a-b);
			document.frm_proposal.txt_min_tax.value=c;
			}
		function tax(){
        	var a=document.frm_proposal.txt_tot_minsell.value;
			var b=a*0.01;
			document.frm_proposal.txt_owner_tax.value= b ;
			
		}	
		
		function last(){
			var pp=document.frm_proposal.txt_min_tax.value;
			var qq=document.frm_proposal.txt_owner_tax.value;
			var rr=(pp-qq);
			document.frm_proposal.txt_owner.value=rr;
			
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
              <li><a href='../../plan/view/plan_details.php'><span>Property plans</span></a></li>
                <li><a href='proposal_main_page.php'><span>Project proposals</span></a></li>
            </ul>
        </div>
<br/>

<br/>
<div class="content" style="padding-top:0px; background-color:#FCFCFC" >
	<form name="frm_proposal" action="../controller/create_project_proposal.php" method="post" onsubmit="return validateForm()">
    	<table align="center" width="600px">
        	<tr>
            	<td colspan="2" align="center" style="padding:6px; font-size:16px;"><u><b>PROJECT PROPOSAL</b></u></td>
            </tr>
            <tr>
            	<td >Name of the client :</td>
            	<td class="required"><label><input type="text" id="cname" name="txt_cname" size="40" /></label></td>
            </tr>
            <tr>
            	<td width="213" >Client's  address:</td>
                <td width="275" class="required"><label><textarea name="txt_caddress" cols="42" rows="3"></textarea></label></td>
            </tr>
            
            <tr>
            	<td width="213" >Subject:</td>
                <td width="275" class="required"><label><input type="text"  name="txt_sub" id="txt_sub"  size="40" /></label></td>
            </tr>
    
            <tr bgcolor="#BABAFF">
            	<td width="213">Total Extent (perches):</td>
                <td width="275" align="center"><label><input name="txt_extenttot" id="txt_extenttot" type="text" size="20" onChange="updatesum()"/></label></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Roadways (perches):</td>
                <td align="center"><label><input name="txt_road" id="txt_road" type="text" size="20" onChange="updatesum()"/></label></td>
            </tr>
            <tr bgcolor="#C3EAF5">
            	<td>Sellable Extent (perches):</td>
                <td align="center"><label><input name="txt_extentsell" id="txt_extentsell" type="text" size="20"  readonly style="border:0px;" onChange="totalSellingPriceMin()"/></label>
                
</td>
            </tr>
	
                    <tr>
                      <th width="213" scope="col">&nbsp;</th>
                      <th width="275" scope="col">Minimum selling price:</th>
                    </tr>
                    <tr bgcolor="#BABAFF">
                      <td>&nbsp;</td>
                      <td align="center"><label><input name="txt_minsell" type="text" size="20" onChange="totalSellingPriceMin()" /></label></td>
                     
                    </tr>
                    <tr bgcolor="#BABAFF">
                      <td>Total selling price:</td>
                      <td align="center"><label><input name="txt_tot_minsell" type="text" size="20" readonly="readonly" /></label></td>
                      
                    <tr bgcolor="#BABAFF">
                      <td>Less 5% commission:</td>
                      <td align="center"><label><input name="txt_min_comm" type="text" id="txt_min_comm" onClick="fivePrecent()" size="20" readonly="readonly"/></label></td>
                    </tr>
                    <tr bgcolor="#C3EAF5">
                      <td>&nbsp;</td>
                      <td align="center"><label><input name="txt_ans1" type="text" onClick="minusComission()" size="20" readonly="readonly"/></label></td>
                    </tr>
                    <tr bgcolor="#BABAFF">
                      <td>Plus 50% of over &amp; above selling price:</td>
                      <td align="center"><label><input name="txt_fif1" type="text" placeholder="Nil" size="20" readonly="readonly"/></label></td>
                    </tr>
                    <tr bgcolor="#C3EAF5">
                      <td>&nbsp;</td>
                      <td align="center"><label><input name="txt_answer1" type="text" onClick="sumup()" size="20" readonly="readonly"/></label></td>
                    </tr>
      
      <tr>
            	<td colspan="3"><strong>Less development expenses.</strong></td>
      </tr>
            
            
            <tr bgcolor="#BABAFF">
            	<td width="213">Surveyor Fees :</td>
            	<td align="center"> <input name="txt_survey" id="txt_survey" type="text" size="20"  onChange="Sum()"/></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Advertising :</td>
            	<td align="center"> <input name="txt_adv"  type="text" size="20" onChange="Sum()"/></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Development Exps :</td>
            	<td align="center"> <input name="txt_dev"  type="text" size="20" onChange="Sum()"/></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Other Exps :</td>
            	<td align="center"> <input name="txt_other"  type="text" size="20" onChange="Sum()"/></td>
            </tr>
            <tr bgcolor="#BABAFF">
            	<td>Electricity :</td>
            	<td align="center"> <input name="txt_electricity"  type="text"  size="20" onChange="Sum()"/></td>
            </tr>
            <tr bgcolor="#C3EAF5">
            	<td>Total :</td>
            	<td align="center"> <input name="txt_total"  type="text" onChange="minusSum()"  size="20" readonly="readonly"/></td>
            </tr>
  
   		<tr bgcolor="#BABAFF">
        	<td width="213"></td>
            <td align="center"><input name="txt_min_tax" type="text" onClick="lessExpenses()"  size="20" readonly="readonly"/></td>
           
        </tr>
             <tr bgcolor="#BABAFF">
            	<td>Less Sale Tax 1% :</td>
            	<td align="center"> <input name="txt_owner_tax" type="text" onClick="tax()"  size="20" readonly="readonly"/></td>
                
            </tr> 
             <tr bgcolor="#C3EAF5">
            	<td><strong style="font-size:14px;">Total realization for the owner :</strong></td>
            	<td align="center"> <input name="txt_owner"  type="text" onClick="last()"  size="20" readonly="readonly"/></td>
                
            </tr>           
            <tr>
            	<td colspan="3" align="center"><input type="submit" value="save" /></td>
            </tr>
        </table>
	</form>
    
</div>
</body>
</html>
