<?php session_start(); 
 require '../controller/manage_users.php';
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manage users</title>
    
    <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
	<link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/manage_user_table.css">
     	
     <style type="text/css">
         .content{
             margin-top: 2% !important;
             padding: 0px 0px 0px 0px !important;
         }
            .footer{
                    position:absolute;
                    bottom:0px;
            }
            .btn{
                width: 42.5%;
            }
            .ac_link{
                text-align: center !important;
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
                <li><a href='../view/advanced_search.php'><span>Buying</span></a></li>
                <li><a href='../../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href="../../property/view/search_property.php"><span>Properties</span></a></li>
                <li><a href='../view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='#'><span>Review</span></a></li>
                <li class='last'><a href='../view/contact_us.php'><span>Contact us</span></a></li>
  </ul>
</div>

<div class="content">
    <div class="CSSTableGenerator" >
    <table class="user_table">
        <tr>
            <td>Username</td>
            <td>User Type</td>
            <td>Action</td>
        </tr>
      <?php
        while($usr = mysql_fetch_array($all_users))
          {
          echo "<tr class='user_info'><td>".$usr['username']."</td>";
          echo "<td class='user_info'>".$usr['type']."</td>";
          echo "<td class='ac_link'><a  href='update_user.php?username=".$usr['username']."'>Edit</a>";
          echo " | <a  href='../controller/reset_password.php?username=".$usr['username']."'>Reset password</a>";
          echo " | <a  href='../controller/delete_users.php?username=".$usr['username']."'>delete</a></td><tr>";
          }
      ?>
    </table>
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
