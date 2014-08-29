<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create agreement</title>
    <link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
    <style type="text/css">
		td{
			padding:4px;
			}
    	.required {
  			display: inline-block;
		}
		.required label {
  		/* constrain the absolutely positioned pseudo */
  			position: relative;
  		/* create some space for the '*' */
  			margin-right: .4em;
		}
		.required label:after {
  			content:"*";
  			display: block;
			color:#FF0000;
  			position: absolute;
  			right: -.6em;
  			top: -.1em;
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
		<h3 style="color:#FFFFFF">Create agreement</h3>
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
                <li><a href='agreement_details.php'><span>Agreements</span></a></li>
            </ul>
        </div>
<br/>

<div class="content" style="padding-top:0px; background-color:#FCFCFC" >
	<form name="frm_agreement" action="../controller/agreement.php" method="post" onsubmit="return validateForm()">
    	<table align="center" style=" border: 1px groove #93AE13; padding:5px;" width="600px">
        	<tr>
            	<td colspan="2" align="center" style="padding:6px"><u><b>AGREEMENT FORM</b></u></td>
            </tr>
        	<tr>
            	<td width="162">Prior Registration:</td>
                <td width="326" class="required"><label><input name="txt_reg" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td >Lawyer's name:</td>
                <td class="required"><label><input name="txt_lname" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td >Lawyer's address:</td>
                <td class="required"><label><textarea name="txt_laddress" cols="46" rows="3"></textarea></label></td>
            </tr>
            <tr>
            	<td>Lawyer's tel no:</td>
                <td class="required"><label><input name="txt_ltel" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td colspan="2">&nbsp;</td>
            </tr>
            <tr>
            	<td colspan="2"><strong>AGREEMENT TO SELL ON BEHALF OF OWNER NO.</strong></td>
            </tr>
            <br/>
            <tr>
            	<td >Agreement No :</td>
            	<td class="required"><label><input name="txt_agr_no" type="text" size="45"/></label></td>

            <tr>
            	<td>Location :</td>
            	<td class="required"><label><input name="txt_location" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td >Date :</td>
            	<td class="required"><label><input name="txt_date" type="text" id="Datepicker1" size="45" readonly="readonly" /></label></td>
            </tr>
            <tr>
            	<td>Land owner's full name :</td>
            	<td class="required"><label><input name="txt_land_owner" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td>Land owner's NIC :</td>
            	<td class="required"><label><input name="txt_nic" id="txt_nic" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td >Land owner's address :</td>
            	<td class="required"> <label><textarea name="txt_address" cols="46" rows="3"></textarea></label></td>
            </tr>
            <tr>
            	<td >Agreed minimum price :</td>
            	<td class="required"><label> <input name="txt_price" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td>Agreed valid period :</td>
            	<td class="required"> <label><input name="txt_valid" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td colspan="2">Statement of approximate expenditure.</td>
               	<tr>
            	<td>Survey fees :</td>
            	<td> <input name="txt_survey" id="txt_survey" type="text" size="45" placeholder="eg: 10000.00"/></td>
            </tr>
            <tr>
            	<td>Advertising expenses :</td>
            	<td> <input name="txt_adv" placeholder="eg: 10000.00" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Development expenses :</td>
            	<td> <input name="txt_dev" placeholder="eg: 10000.00" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Other expenses :</td>
            	<td> <input name="txt_other" placeholder="eg: 10000.00" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Electricity :</td>
            	<td> <input name="txt_electricity" placeholder="eg: 10000.00" type="text"  size="45"/></td>
            </tr>
            <tr>
            	<td colspan="2"><strong>THE SCHEDULE ABOVE REFFRRED TO</strong></td>
            </tr>
            <tr>
            	<td>Description :</td>
            	<td class="required"><label> <textarea name="txt_description" cols="46" rows="10"></textarea></label></td>
            </tr>
             <tr>
            	<td>Witness name :</td>
            	<td class="required">1.<label><input name="txt_wit1" type="text" size="45"/></label><br/>
                2.<input name="txt_wit2" type="text"  size="45"/></td>
            </tr>
            
            
            <tr>
            	<td colspan="2" align="center"><input type="submit" value="save" /></td>
            </tr>
        </table>
	</form>
    
</div>

</body>
</html>
