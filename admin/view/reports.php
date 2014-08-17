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
                width: 15%;
            }
            .left_box td{
                padding-left: 9%;
                padding-top: 10px;
            }

            .left_box a:link, a:visited {
                display: block;
                font-weight: bold;
                color: #FFFFFF;
                background-color: #9fa393;
                width: 220px;
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
              <li class='active'><a href='index.php'><span>Home</span></a></li>
                <li><a href='about_us.php'><span>Users</span></a></li>
                <li><a href='about_us.php'><span>Properties</span></a></li>
                <li><a href='about_us.php'><span>Inquiries</span></a></li>
                <li><a href='../view/hot_deals.php'><span>Payments</span></a></li>
				<li><a href='../../forum/create_topic.php'><span>Reports</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Reviews</span></a></li>
            </ul>
		</div>
        
<div class="content" style="padding-top:0px;">

    <table class="left_box" align="center">
        <tr>
         <th colspan="2" align="center"><h3 style="color:#120072;">Administration Tools</h3></th>
        </tr>
        <tr>
            <td>
                <a href="../../reports/view/prefered_properties.php">Most Popular Properties</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="../../reports/view/prefered_locations.php">Most Popular Areas</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="../../reports/view/prefered_price_ranges.php">Most Popular Price Ranges</a>
            </td>
        </tr>
     </table>

</div>

<div class="footer" id="footer_wrap">
    <ul>
         <li class='active'><a href='../../home/view/index.php'><span>Home</span></a></li>
                <li><a href='../../home/view/about_us.php'><span>About Us</span></a></li>
                <li><a href='../../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href='../../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
    </ul>
    <p id="copyright" >
        Copyright © 2014 Greenvalley.lk All rights reserved.
    </p>
</div>

</body>
</html>
