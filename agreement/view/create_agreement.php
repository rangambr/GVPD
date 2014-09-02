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
                $('#Datepicker1').datepick({dateFormat: 'yyyy-mm-dd', yearRange: "2014:2040"});

            });  
		</script>
        <script type="text/javascript">
        	function validate(){
            	if ($("#txt_reg").val() == '') {
                    alert('Please enter Prior Registration Number.');
                    $("#txt_reg").focus();
                    return false;
                }
				if ($("#txt_lname").val() == '') {
                    alert('Please enter the Name of the Lawyer.');
                    $("#txt_lname").focus();
                    return false;
                }
				if(! validateName($("#txt_lname").val())){
					alert('Please enter valid name');
					$("#txt_lname").focus();
					return false;
				}
				if ($("#txt_laddress").val() == '') {
                    alert('Please enter the Address of the Lawyer.');
                    $("#txt_laddress").focus();
                    return false;
                }
				if ($("#txt_ltel").val() == '') {
                    alert('Please enter the Contact Number of the Lawyer.');
                    $("#txt_ltel").focus();
                    return false;
                }
				if(! validateTelephoneNo($("#txt_ltel").val())){
					alert('Please enter a valid Contact Number.');
					return false;
				}
				if ($("#txt_agr_no").val() == '') {
                    alert('Please enter the Agreement Number.');
                    $("#txt_agr_no").focus();
                    return false;
                }
				if(! validateAgreementNo($("#txt_agr_no").val())){
					alert('Agreement no must contain numbers only.');
					return false;
				}
				if ($("#txt_location").val() == '') {
                    alert('Please enter the Location.');
                    $("#txt_location").focus();
                    return false;
                }
				if ($("#Datepicker1").val() == '') {
                    alert('Please enter the Date.');
                    $("#Datepicker1").focus();
                    return false;
                }
				if ($("#txt_land_owner").val() == '') {
                    alert('Please enter the full name of the Land Owner.');
                    $("#txt_land_owner").focus();
                    return false;
                }
				if(! validateName($("#txt_land_owner").val())){
					alert('Full name must contain only letters.');
					return false;
				}
				if ($("#txt_nic").val() == '') {
                    alert('Please enter valid NIC.');
                    $("#txt_nic").focus();
                    return false;
                }
				if(! validateNIC($("#txt_nic").val())){
					alert('Please enter a valid NIC Number.');
					return false;
				}
				if ($("#txt_address").val() == '') {
                    alert('Please enter the address of the Land Owner.');
                    $("#txt_address").focus();
                    return false;
                }
				if ($("#txt_price").val() == '') {
                    alert('Please enter minimum price.');
                    $("#txt_price").focus();
                    return false;
                }
				if ($("#txt_valid").val() == '') {
                    alert('Please enter the valid period.');
                    $("#txt_valid").focus();
                    return false;
                }
				if(! validatePrice($("#txt_survey").val())){
					alert('Please enter price in 0000.00 format.');
					$("#txt_survey").focus();
					return false;
				}
				if(! validatePrice($("#txt_adv").val())){
					alert('Please enter price in 0000.00 format.');
					$("#txt_adv").focus();
					return false;
				}
				if(! validatePrice($("#txt_dev").val())){
					alert('Please enter price in 0000.00 format.');
					$("#txt_dev").focus();
					return false;
				}
				if(! validatePrice($("#txt_other").val())){
					alert('Please enter price in 0000.00 format.');
					$("#txt_other").focus();
					return false;
				}
				if(! validatePrice($("#txt_electricity").val())){
					alert('Please enter price in 0000.00 format.');
					$("#txt_electricity").focus();
					return false;
				}
				if ($("#txt_description").val() == '') {
                    alert('Please enter the description of the land.');
                    $("#txt_description").focus();
                    return false;
                }
            }
			//checking for all letters
			function validateName(name){
				 var letters = /^[A-Za-z]+$/;
				 return letters.test(name);  
				}
			//checking all numbers
			function validateAgreementNo(number){
				var no=/^[0-9]+$/;
				return no.test(number);
				}
			//phone number must contain 10 numbers.
			function validateTelephoneNo(tp) {
                var re =  /^\d{10}$/;;
                return re.test(tp);
            }
			function validateNIC(nic) {
//ine characters should be numbers[0-9],9 digits are numbers{9},ext letter should be x, X, v or V[vVxX],regular expression is over$/
                var re = /^[0-9]{9}[vVxX]$/;
                return re.test(nic);
            }
			function validatePrice(price) {
        		var pattern =  /^\d+(?:\.\d{0,2})$/ ;
        		return pattern.test(price); 
           
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
                <li><a href='../../plan/view/plan_details.php'><span>Property plans</span></a></li>
                <li><a href='../../project_proposal/view/proposal_main_page.php'><span>Project proposals</span></a></li>
            </ul>
        </div>
<br/>

<div class="content" style="padding-top:0px; background-color:#FCFCFC" >
	<form name="frm_agreement" action="../controller/agreement.php" method="post" onsubmit="return validate();">
    	<table align="center" style=" border: 1px groove #93AE13; padding:5px;" width="600px">
        	<tr>
            	<td colspan="2" align="center" style="padding:6px"><u><b>AGREEMENT FORM</b></u></td>
            </tr>
        	<tr>
            	<td width="162">Prior Registration:</td>
                <td width="326" class="required"><label><input name="txt_reg" id="txt_reg" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td >Lawyer's name:</td>
                <td class="required"><label><input name="txt_lname" id="txt_lname" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td >Lawyer's address:</td>
                <td class="required"><label><textarea name="txt_laddress" id="txt_laddress" cols="46" rows="3"></textarea></label></td>
            </tr>
            <tr>
            	<td>Lawyer's tel no:</td>
                <td class="required"><label><input name="txt_ltel" type="text" size="45" id="txt_ltel" placeholder="eg: xxxxxxxxxx"/></label></td>
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
            	<td class="required"><label><input name="txt_agr_no" id="txt_agr_no" type="text" size="45"/></label></td>

            <tr>
            	<td>Location :</td>
            	<td class="required"><label><input name="txt_location" id="txt_location" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td >Date :</td>
            	<td class="required"><label><input name="txt_date" type="text"  size="45"  id="Datepicker1"/></label></td>
            </tr>
            <tr>
            	<td>Land owner's full name :</td>
            	<td class="required"><label><input name="txt_land_owner" id="txt_land_owner" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td>Land owner's NIC :</td>
            	<td class="required"><label><input name="txt_nic" id="txt_nic" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td >Land owner's address :</td>
            	<td class="required"> <label><textarea name="txt_address" id="txt_address" cols="46" rows="3"></textarea></label></td>
            </tr>
            <tr>
            	<td >Agreed minimum price :</td>
            	<td class="required"><label> <input name="txt_price" id="txt_price" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td>Agreed valid period :</td>
            	<td class="required"> <label><input name="txt_valid" id="txt_valid" type="text" size="45"/></label></td>
            </tr>
            <tr>
            	<td colspan="2">Statement of approximate expenditure.</td>
               	<tr>
            	<td>Survey fees :</td>
            	<td> <input name="txt_survey" id="txt_survey" type="text" size="45" placeholder="eg: 10000.00"/></td>
            </tr>
            <tr>
            	<td>Advertising expenses :</td>
            	<td> <input name="txt_adv" id="txt_adv" placeholder="eg: 10000.00" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Development expenses :</td>
            	<td> <input name="txt_dev" id="txt_dev" placeholder="eg: 10000.00" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Other expenses :</td>
            	<td> <input name="txt_other" id="txt_other" placeholder="eg: 10000.00" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Electricity :</td>
            	<td> <input name="txt_electricity" id="txt_electricity" placeholder="eg: 10000.00" type="text"  size="45"/></td>
            </tr>
            <tr>
            	<td colspan="2"><strong>THE SCHEDULE ABOVE REFFRRED TO</strong></td>
            </tr>
            <tr>
            	<td>Description :</td>
            	<td class="required"><label> <textarea name="txt_description" id="txt_description" cols="46" rows="10"></textarea></label></td>
            </tr>
             <tr>
            	<td>Witness name :</td>
            	<td>1.<label><input name="txt_wit1" type="text" size="45"/></label><br/>
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
