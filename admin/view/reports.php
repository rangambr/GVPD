<?php session_start(); ?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Administration Reports</title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">

        <style type="text/css">
            .left_box{
                width: 100%;
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
            .spacer{
                width: 15%;
            }
            .footer{
                position:absolute;
                bottom:0px;
            }
            .btn{
                width: 42.5%;
            }
        </style>
    </head>

    <body  bgcolor="#EAF3CF">

        <div class="header">

            <div class="header">
                <img src="../../common/images/myBanner.png"  style="margin-left:50px"/><span>
                    <img src="../../common/images/contact.png" style="margin-left:140px"/></span> </div>  		

        </div>

    </td>
<td>&nbsp;</td>
</tr>
</table>

</div>

<div class="menu_bar" align="center" id="cssmenu">
            <ul>
                <li class='active'><a href='../../home/view/index.php'><span>Home</span></a></li>
                <li><a href='../../home/view/about_us.php'><span>About Us</span></a></li>
                <li><a href='../../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href='../../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
     </ul>
</div>
<div class="content" style="padding-top:0px;">

    <table class="left_box">
        <tr>
            <th colspan="3"><h3 style="color:#120072;">Administration Reports</h3></th>
        </tr>
        <tr>
            <td class="btn">
                <a href="../../reports/view/prefered_properties.php">Most Popular Properties</a>
            </td>
            <td class="spacer"></td>
            <td  class="btn">
                <a href="../../reports/view/prefered_locations.php">Most Popular Areas</a>
            </td>
        </tr>
        <tr>
            <td  class="btn">
                <a href="../../reports/view/prefered_price_ranges.php">Most Popular Price Ranges</a>
            </td>
            <td class="spacer"></td>
           <!-- <td  class="btn">
                <a href="#"></a>
            </td>-->
        </tr>
       

    </table>

</div>

<div class="footer" id="footer_wrap">
    <ul>
        <li class='active'><a href='index.php'><span>Home</span></a></li>
        <li><a href='#'><span>Buying</span></a></li>
        <li><a href='#'><span>Selling</span></a></li>
        <li><a href='#'><span>Search property</span></a></li>
        <li><a href='#'><span>My profile</span></a></li>
        <li><a href='#'><span>Review</span></a></li>
        <li class='last'><a href='#'><span>Contact us</span></a></li>
    </ul>
    <p id="copyright" >
        Copyright © 2014 Greenvalley.lk All rights reserved.
    </p>
</div>

</body>
</html>
