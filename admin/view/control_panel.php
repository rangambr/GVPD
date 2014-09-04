<?php session_start(); ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Control Panel</title>
    
	<link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
    
     <style type="text/css">
         .left_box{
             width: 40%;
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
         <th colspan="3"><h3 style="color:#120072; margin-left:100px;">Administration Tools</h3></th>
     </tr>
      <tr>
         <td>
             <a href="../../home/view/index.php"><img src="../../common/images/icons/home2.jpg"/>&nbsp;Home</a>
         </td>
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
        <td >
          	<a href="../view/manage_reviews.php"><img src="../../common/images/icons/review.png"/>Manage reviews</a>
        </td>
        <td>
             <a href="../view/reports.php"><img src="../../common/images/icons/report.png"/>Reports</a>
         </td>  
     </tr>
     
     <tr>
       	<td>
          <a href="../../agreement/view/agreement_details.php"><img src="../../common/images/icons/agreement2.png"/>Agreements</a>
        </td>
        <td>
        	 <a href="../../plan/view/plan_details.php"><img src="../../common/images/icons/map-icon.png"/>Propery plans</a>
        </td>  
        <td>
            <a href="../../project_proposal/view/proposal_main_page.php"><img src="../../common/images/icons/project proposal.png"/>Project proposals</a>
         </td> 
     </tr>
 </table>
    
</div>
</body>
</html>
