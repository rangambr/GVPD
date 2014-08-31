<?php session_start(); ?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Administration Reports</title>

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
			<h3 style="color:#FFFFFF">Reports</h3>
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
                <li><a href='../../agreement/view/agreement_details.php'><span>Agreements</span></a></li>
                <li><a href='../../plan/view/plan_details.php'><span>Property plans</span></a></li>
                <li><a href='../../project_proposal/view/proposal_main_page.php'><span>Project proposals</span></a></li>
            </ul>
		</div>
<br/><br/>        
<div class="content" style="padding-top:0px;">

    <table class="left_box" align="center">
        <tr>
         <th colspan="2" align="center"><h3 style="color:#120072;">Management Reports</h3></th>
        </tr>
        <tr>
            <td><a href="../../reports/view/prefered_properties.php"><img src="../../common/images/icons/property.png" />Most Popular Properties</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="../../reports/view/prefered_locations.php"><img src="../../common/images/icons/areas.png"/>Most Popular Areas</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="../../reports/view/prefered_price_ranges.php"><img src="../../common/images/icons/price report.png"/>Most Popular Price Ranges</a>
            </td>
        </tr>
     </table>

</div>
</body>
</html>
