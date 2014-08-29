<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Plans</title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">

        <style type="text/css">
            .left_box{
                width: 20%;
            }
            .left_box td{
                padding-left: 7%;
                padding-top: 10px;
            }

            .left_box a:link, a:visited {
                display: block;
                font-weight: bold;
                color: #FFFFFF;
                background-color: #9fa393;
                width: 235px;
                text-align: center;
                padding: 4px;
                text-decoration: none;
            }

            .left_box a:hover, a:active {
                background-color: #D1D3CB;
            }
            
            .footer{
                position:absolute;
                bottom:0px;
            }
        </style>
    </head>

    <body  bgcolor="#E1E1FF">
	
    	<div style="background-color:#000089; height:10%;padding:10px;padding-left:50px">
			<h3 style="color:#FFFFFF">Plans</h3>
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
<br/><br/>        
<div class="content" style="padding-top:0px;">
<form name="frm_plan" action="../controller/add_plan.php" method="post" enctype="multipart/form-data">
	<table  border="0" cellspacing="5" cellpadding="5" bgcolor="#F8F8F7">
    	<tr align="center">
        <td colspan="2">Add property plans</td>
      </tr>
      <tr>
        <td>Plan No.</td>
        <td><input type="text" name="txt_pno"/></td>
      </tr>
      <tr>
        <td>Property Name:</td>
        <td><input type="text" name="txt_pname"/></td>
      </tr>
      <tr>
        <td>Upload Plans:</td>
        <td><input type="file" name="img_plan1" size="1000000"/><br/>
        	<input type="file" name="img_plan2"/><br/>
            <input type="file" name="img_plan3"/>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="sbmit" value="save"/></td>
      </tr>
	</table>
</form>
</div>
</body>
</html>
