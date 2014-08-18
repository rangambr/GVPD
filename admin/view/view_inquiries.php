<?php session_start(); ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Iquiries</title>
    
    <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
	<link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">
 	
     <style type="text/css">
            .left_box{
                float:left;
                width:200px;
                height:380px;
                padding:10px;
				padding-top:50px;
            }
            .left_box ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
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

<div class="header">
<div style="background-color:#000089; height:10%;padding:10px; padding-left:50px" >
		<h3 style="color:#FFFFFF">Inquiries</h3>
	</div>
	<br/>
<div class="admin_menu_bar" align="center" id="cssmenu">
           <ul>
                <li class='active'><a href='index.php'>Home</a></li>
                <li><a href='about_us.php'><span>Users</span></a></li>
                <li><a href='about_us.php'><span>Properties</span></a></li>
                <li><a href='about_us.php'><span>Inquiries</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Reviews</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Reports</span></a></li>
                <li><a href='../../agreement/view/add_agreement1.php'><span>Agreements</span></a></li>
            </ul>
</div>
</div>

<div class="content">
  <div>
    <table border="1" cellpadding="2px">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Contact no:</th>
          <th scope="col">Subject</th>
          <th scope="col">Message</th>
        </tr>
        <tr>
          <?php
              require '../model/admin.php';
              
              $inquiry=new Admin();
              $newInquiry=$inquiry->getAllInquiries();
              
              while ($row = mysql_fetch_array($newInquiry)) {
                  $ID = $row['inquiry_id'];
                  echo '<td>'.$ID.'</td>';
                  $title = $row['title'];
                  echo '<td>'.$title.'</td>';
                  $name = $row['name'];
                  echo '<td>'.$name.'</td>';
                  $email = $row['email'];
                  echo '<td>'.$email.'</td>';
                  $telephone = $row['telephone'];
                  echo '<td>'.$telephone.'</td>';
                  $subject = $row['subject'];
                  echo '<td>'.$subject.'</td>';
                  $message = $row['message'];
                  echo '<td>'.$message.'</td>';
                  echo'</tr>';
              }
          ?>
        </tr>
      </table>
        </div>
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
