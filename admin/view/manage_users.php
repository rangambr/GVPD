<?php session_start(); 
 require '../controller/manage_users.php';
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manage users</title>
    
    <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
	<link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
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
            .edit_link{
                content: url('../..//common/icons/sites-pencil-icon-small.gif');
            }
            .reset_pw{
                content: url('../..//common/icons/change_password.png');
            }
            .delete_link{
                content: url('../..//common/icons/icon-delete-small.png');
            }
        </style>
</head>

<body  bgcolor="#E1E1FF">
<div style="background-color:#000089; height:10%;padding:10px;padding-left:50px">
	<h3 style="color:#FFFFFF">Manage users</h3>
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
              <li><a href='../../agreement/view/add_agreement1.php'><span>Agreements</span></a></li>
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
          echo "<td class='ac_link'><a  href='update_user.php?username=".$usr['username']."'><span class='edit_link'></span></a>";
          echo " | <a  href='reset_password.php?username=".$usr['username']."'><span class='reset_pw'></span></a>";
          echo " | <a  href='../controller/delete_users.php?username=".$usr['username']."'><span class='delete_link'></span></a></td><tr>";
          }
      ?>
    </table>
    </div>
</div>
</body>
</html>
