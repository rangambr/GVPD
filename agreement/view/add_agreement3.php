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
               <li><a href='control_panel.php'><span>Admin panel</span></a></li>
                <li><a href='manage_users.php'><span>Users</span></a></li>
                <li><a href='manage_properties.php'><span>Properties</span></a></li>
                <li><a href='manage_inquiries.php'><span>Inquiries</span></a></li>
                <li><a href='manage_reviews.php'><span>Reviews</span></a></li>
                <li><a href='reports.php'><span>Reports</span></a></li>
                <li><a href='../../agreement/view/add_agreement1.php'><span>Agreements</span></a></li>
            </ul>
        </div>

<div class="content" style="padding-top:0px;">
	<form>
    	<table align="center" width="500px">
        	<tr>
            	<td colspan="2">THE SCHEDULE ABOVE REFFRRED TO</td>
            </tr>
            <tr>
            	<td>Add description:</td>
                <td><textarea name="txt_description"></textarea></td>
            </tr>
            <tr>
            	<td><p>Signed  in the presence of us and we do here by declare that we are well acquainted  with the executants and know their proper names occupations and residences…………</p></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
            	<td>1.<input type="text" name="txt_wit1" placeholder="witness 1"/></td>
                <td>&nbsp;</td>
            </tr>  
            <tr>
            	<td>2.<input type="text" name="txt_wit2" placeholder="witness 2"/></td>
                <td>&nbsp;</td>
            </tr>     	
        </table>
	</form>
</div>
</body>
</html>
