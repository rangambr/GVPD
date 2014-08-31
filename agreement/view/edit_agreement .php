<?php
require_once '../controller/view_agreement.php';

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit agreement</title>
    <link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
    <style type="text/css">
		
	</style>
</head>

<body  bgcolor="#E1E1FF">
	<div style="background-color:#000089; height:10%;padding:10px;padding-left:50px">
		<h3 style="color:#FFFFFF">Edit Agreement</h3>
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
<br/>
<div class="content" style="padding-top:0px; background-color:#FCFCFC" >
	<form name="frm_agreement" action="../controller/edit_agreement.php" method="post">
    	<table align="center" style=" border: 1px groove #93AE13; padding:5px;" width="600px">
        	<tr>
            	<td colspan="2" align="center" style="padding:6px"><u><b>AGREEMENT FORM</b></u></td>
            </tr>
        	<tr>
            	<td width="162"> Prior Registration:</td>
                <td width="326">
                <input name="txt_reg" type="text" size="45" value="<?php echo '' . $agreement['reg_no']; ?>"/></td>
            </tr>
            <tr>
            	<td>Lawyer's name:</td>
                <td><input name="txt_lname" type="text" size="45"value="<?php echo '' .$agreement['l_name'] ; ?>"/></td>
            </tr>
            <tr>
            	<td>Lawyer's address:</td>
                <td><textarea name="txt_laddress" cols="43" rows="3"><?php echo '' .$agreement['l_address'] ; ?></textarea></td>
            </tr>
            <tr>
            	<td>Lawyer's tel no:</td>
                <td><input name="txt_ltel" type="text" size="45" value="<?php echo '' .$agreement['l_tel'] ; ?>"/></td>
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
            	<td><input name="txt_agr_no" type="text" size="45" value="<?php echo ''.$agreement['agreement_no'] ; ?>"/>
                    <input  name="txt_agr_id" type="hidden" size="45" value="<?php echo ''.$_REQUEST['agr_id'] ; ?>" />
                </td>

            <tr>
            	<td>Location :</td>
            	<td><input name="txt_location" type="text" size="45" value="<?php echo '' .$agreement['location']; ?>"/></td>
            </tr>
            <tr>
            	<td>Date :</td>
            	<td><input name="txt_date" type="text" value="<?php echo '' .$agreement['date'] ; ?>" size="45" readonly/></td>
            </tr>
            <tr>
            	<td>Land owner's full name :</td>
            	<td><input name="txt_land_owner" type="text" size="45" value="<?php echo '' .$agreement['full_name'] ; ?>"/></td>
            </tr>
            <tr>
            	<td>Land owner's NIC :</td>
            	<td><input name="txt_nic" type="text" size="45" value="<?php echo '' .$agreement['NIC'] ; ?>"/></td>
            </tr>
            <tr>
            	<td>Land owner's address :</td>
            	<td><textarea name="txt_address" cols="43" rows="3"><?php echo '' .$agreement['address'] ; ?></textarea> 		</td>
            </tr>
            <tr>
            	<td>Agreed minimum price :</td>
            	<td> <input name="txt_price" type="text" size="45" value="<?php echo '' .$agreement['agreed_price'] ; ?>"/></td>
            </tr>
            <tr>
            	<td>Agreed valid period :</td>
            	<td> <input name="txt_valid" type="text" size="45" value="<?php echo '' .$agreement['valid_period'] ; ?>"/></td>
            </tr>
            <tr>
            	<td colspan="2">Statement of approximate expenditure.</td>
               	<tr>
            	<td>Survey fees :</td>
            	<td> <input name="txt_survey" type="text" size="45" value="<?php echo '' .$agreement['survey'] ; ?>"/></td>
            </tr>
            <tr>
            	<td>Advertising expenses :</td>
            	<td> <input name="txt_adv" type="text" size="45" value="<?php echo '' .$agreement['advertising'] ; ?>"/></td>
            </tr>
            <tr>
            	<td>Development expenses :</td>
            	<td> <input name="txt_dev" type="text" size="45" value="<?php echo '' .$agreement['development'] ; ?>"/></td>
            </tr>
            <tr>
            	<td>Other expenses :</td>
            	<td> <input name="txt_other" type="text" size="45" value="<?php echo '' .$agreement['other'] ; ?>"/></td>
            </tr>
            <tr>
            	<td>Electricity :</td>
            	<td> <input name="txt_electricity" type="text"  size="45" value="<?php echo '' .$agreement['electricity'] ; ?>"/></td>
            </tr>
            <tr>
            	<td>Total :</td>
            	<td> <input name="txt_total" type="text"  size="45" value="<?php echo '' .$agreement['total'] ; ?>"/></td>
            </tr>
            <tr>
            	<td colspan="2"><strong>THE SCHEDULE ABOVE REFFRRED TO</strong></td>
            </tr>
            <tr>
            	<td>Description :</td>
            	<td> <textarea name="txt_description" cols="43" rows="10"><?php echo '' .$agreement['description'] ; ?></textarea></td>
            </tr>
             <tr>
            	<td>Witness name :</td>
            	<td>1.<input name="txt_wit1" type="text" size="45" value="<?php echo '' .$agreement['witness1'] ; ?>"/><br/>
                2.<input name="txt_wit2" type="text"  size="45" value="<?php echo '' .$agreement['witness2'] ; ?>" /></td>
            </tr>
            <tr>
            	<td colspan="2" align="center"><input type="submit" value="Edit"/></td>
            </tr>

            
        </table>
	</form>
</div>
</body>
</html>
