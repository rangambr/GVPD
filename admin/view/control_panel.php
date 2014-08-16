<?php session_start(); ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Control Panel</title>
    
    <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
	<link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
    
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
        	<table border="0" align="center" width="100%">
            	<tr>
                	<td style="margin-left:30px; padding-left:30px;">
                        <div align="center"><img src="../../common/images/tr_banner.png"/><br/>
                            <span style="color: #3A6839; font-weight: bold; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style: italic; font-size: large;">We Make Your Dream Come True.</span>
                        </div>
           			<td align="center">             
    					<img src="../../common/images/contact.png"/>
    	   			</td>
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
         <th colspan="3"><h3 style="color:#120072;">Administration Tools</h3></th>
     </tr>
     <tr>
         <td class="btn">
             <a href="../view/manage_users.php"><img src="../../common/images/icons/user.png"/>Manage users</a>
         </td>
         <td class="spacer"></td>
          <td  class="btn">
              <a href="../view/manage_properties.php"><img src="../../common/images/icons/property.png"/>Manage properties</a>
         </td>
     </tr>
     <tr>
         <td  class="btn">
             <a href="../view/manage_inquiries.php"><img src="../../common/images/icons/inquiry.png"/>Manage inquiries</a>
         </td>
         <td class="spacer"></td>
          <td  class="btn">
             <a href="#"><img src="../../common/images/icons/payments.png"/>Handle payments</a>
         </td>
     </tr>
     <tr>
         <td  class="btn">
             <a href="../view/reports.php"><img src="../../common/images/icons/report.png"/>Reports</a>
         </td>
         <td class="spacer"></td>
          <td  class="btn">
              <a href="../view/manage_reviews.php"><img src="../../common/images/icons/review.png"/>Manage reviews</a>
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
