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
	<h1 style="color:#FFFFFF">Welcome to admin panel</h1>
</div>
<br/>

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
              <a href="../view/manage_reviews.php"><img src="../../common/images/icons/review.png"/>Manage reviews</a>
         </td>
     </tr>
     <tr>
         <td>
             <a href="../view/reports.php"><img src="../../common/images/icons/report.png"/>Reports</a>
         </td>
          <td>
             <a href="../../agreement/view/add_agreement1.php"><img src="../../common/images/icons/agreement.png"/>Create agreements</a>
         </td>
     </tr>
     
 </table>
    
</div>
</body>
</html>
