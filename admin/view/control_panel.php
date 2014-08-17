<?php session_start(); ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Control Panel</title>
    
	<link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
    
     <style type="text/css">
         .left_box{
             width: 50%;
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
<div style="background-color:#000089; height:10%;padding:10px;padding-left:50px" >
	<h1 style="color:#FFFFFF">Welcome to control panel</h1>
</div>
<br/>
<div class="admin_menu_bar" align="center" id="cssmenu">
            <ul>
                <li class='active'><a href='index.php'>Home</a></li>
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
             <a href="../view/manage_users.php"><img src="../../common/images/icons/user.png"/>Manage users</a>
         </td>
          <td >
              <a href="../view/manage_properties.php"><img src="../../common/images/icons/property.png"/>Manage properties</a>
         </td>
     </tr>
     <tr>
         <td>
             <a href="../view/manage_inquiries.php"><img src="../../common/images/icons/inquiry.png"/>Manage inquiries</a>
         </td>
          <td>
             <a href="#"><img src="../../common/images/icons/payments.png"/>Handle payments</a>
         </td>
     </tr>
     <tr>
         <td>
             <a href="../view/reports.php"><img src="../../common/images/icons/report.png"/>Reports</a>
         </td>
          <td>
              <a href="../view/manage_reviews.php"><img src="../../common/images/icons/review.png"/>Manage reviews</a>
         </td>
     </tr>
     
 </table>
    
</div>
</body>
</html>
