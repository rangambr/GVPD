<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create agreement</title>
    <link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
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
                <li><a href='add_agreement1.php'><span>Agreements</span></a></li>
            </ul>
        </div>
<br/>
<br/>
<div class="content" style="padding-top:0px;">
	<form name="frm_agreement" action="../controller/agreement.php" method="post">
    	<table align="center" width="500px">
        	<tr>
            	<td>Prior Registration:</td>
                <td><input type="text" name="txt_reg"/></td>
            </tr>
            <tr>	
            	<td>No.</td>
                <td><input type="text" name="txt_no"/></td>
            </tr>
            <tr>
            	<td>Lawyer's name:</td>
                <td><input type="text" name="txt_lname"/></td>
            </tr>
            <tr>
            	<td>Lawyer's address:</td>
                <td><input type="text" name="txt_laddress"/></td>
            </tr>
            <tr>
            	<td>Lawyer's tel no:</td>
                <td><input type="text" name="txt_ltel"/></td>
            </tr>
            <tr>
            	<td colspan="2">&nbsp;</td>
            </tr>
            <tr>
            	<td colspan="2"><strong>AGREEMENT TO SELL ON BEHALF OF OWNER NO.</strong><span>
            	<input type="text" name="txt_owner"/></span></td>
            </tr>
            <br/>
            <tr>
            	<td colspan="2">
                	<p align="justify" style="padding:10px">
                    	THIS AGREEMENT IS MADE AND ENTERED INTO AT <input type="text" name="txt_location" placeholder="location"/> on this <input type="text" name="txt_date"  placeholder="date"/>in day of <input type="text" name="txt_month" placeholder="month"/>,  <input type="text" name="txt_year" placeholder="year"/>by and between <input type="text" name="txt_land_owner" placeholder="land owner's full name"/> (hereinafter referred to as Seller) (I.D No. <input type="text" name="txt_id" placeholder="NIC no."/>) <input type="text" name="txt_address" placeholder="land owner's address"/> and Green Valley Property Development (Pvt) Ltd. ,a Company duly incorporated under the Companies Act No 17 of 1982 and having its registered office at  No.77,Doranegama road, Medawala.(H.P) (hereinafter referred to as the Company )
The Seller is the owner and the proprietor of the Company is engaged as the Seller’s agent for the sale of property described in the Schedule hereto.
					</p>
                </td>
            </tr>
            <tr>
            	<td colspan="2" align="center"><input type="submit" value="save" /></td>
            </tr>
             <tr>
            	<td colspan="2" align="right"><a href="add_agreement2.php"><strong>Next>></strong></a></td>
            </tr>
        </table>
	</form>
</div>
</body>
</html>
