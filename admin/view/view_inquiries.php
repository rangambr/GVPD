<?php session_start(); ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>HOME</title>
    
    <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
	<link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
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
	  <li class='active'><a href='index.php'><span>Home</span></a></li>
	  <li><a href='#'><span>Buying</span></a></li>
	  <li><a href='#'><span>Selling</span></a></li>
	  <li><a href="../../property/view/search_property.php"><span>Search property</span></a></li>
	  <li><a href='#'><span>My profile</span></a></li>
	  <li><a href='#'><span>Review</span></a></li>
	  <li class='last'><a href='#'><span>Contact us</span></a></li>
  </ul>
</div>

<div class="content">
  <div class="left_box">
        <ul>
            <li><a href="add_user.php">Manage users</a></li>
            <li><a href="#">Manage property</a></li>
            <li><a href="view_inquiries.php">Handle inquiries</a></li>
            <li><a href="#">Handle payments</a></li>
            <li><a href="#">Reports</a></li>
        </ul>
    </div>
    <div style="margin-left: 300px; font-style: normal; color: #000000;">
      <h3>INQUIRIES</h3>
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
