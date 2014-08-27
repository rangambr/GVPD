<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create agreement</title>
    <link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
    <style type="text/css">
		
	</style>
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
<?php if (!empty($_REQUEST['msg']) && $_REQUEST['msg'] == "10") { ?>
<div align="center">
<div align="center" style="border:solid #275C0D; width:300px; height:30px; padding:5px; background:#E3EFAF" ><img src="../../common/images/icons/successful.png" width="16px" height="16px"/><span style="color:#368112; font-size:14px;" ><b>You have entered information successfully!</b></span></div>
</div>
<?php } ?>
<br/>
<div class="content" style="padding-top:0px; background-color:#FCFCFC" >
	<form name="frm_agreement" action="../controller/agreement.php" method="post">
    	<table align="center" style=" border: 1px groove #93AE13; padding:5px;" width="600px">
        	<tr>
            	<td colspan="2" align="center" style="padding:6px"><u><b>AGREEMENT FORM</b></u></td>
            </tr>
        	<tr>
            	<td width="162"> Prior Registration:</td>
                <td width="326"><input name="txt_reg" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Lawyer's name:</td>
                <td><input name="txt_lname" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Lawyer's address:</td>
                <td><textarea name="txt_laddress" cols="43" rows="3"></textarea></td>
            </tr>
            <tr>
            	<td>Lawyer's tel no:</td>
                <td><input name="txt_ltel" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td colspan="2">&nbsp;</td>
            </tr>
            <tr>
            	<td colspan="2"><strong>AGREEMENT TO SELL ON BEHALF OF OWNER NO.</strong></td>
            </tr>
            <br/>
            <tr>
            	<td>Agreement No :</td>
            	<td><input name="txt_agr_no" type="text" size="45"/></td>

            <tr>
            	<td>Location :</td>
            	<td><input name="txt_location" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Date :</td>
            	<td><input name="txt_date" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Land owner's full name :</td>
            	<td><input name="txt_land_owner" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Land owner's NIC :</td>
            	<td><input name="txt_nic" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Land owner's address :</td>
            	<td> <input name="txt_address" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Agreed minimum price :</td>
            	<td> <input name="txt_price" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Agreed valid period :</td>
            	<td> <input name="txt_valid" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td colspan="2">Statement of approximate expenditure.</td>
               	<tr>
            	<td>Survey fees :</td>
            	<td> <input name="txt_survey" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Advertising expenses :</td>
            	<td> <input name="txt_adv" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Development expenses :</td>
            	<td> <input name="txt_dev" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Other expenses :</td>
            	<td> <input name="txt_other" type="text" size="45"/></td>
            </tr>
            <tr>
            	<td>Electricity :</td>
            	<td> <input name="txt_electricity" type="text"  size="45"/></td>
            </tr>
            <tr>
            	<td>Total :</td>
            	<td> <input name="txt_total" type="text"  size="45"/></td>
            </tr>
            <tr>
            	<td colspan="2"><strong>THE SCHEDULE ABOVE REFFRRED TO</strong></td>
            </tr>
            <tr>
            	<td>Description :</td>
            	<td> <textarea name="txt_description" cols="43" rows="10"></textarea></td>
            </tr>
             <tr>
            	<td>Witness name :</td>
            	<td>1.<input name="txt_wit1" type="text" size="45"/><br/>
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
