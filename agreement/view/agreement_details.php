<?php session_start(); 
 require '../controller/agreement_info.php';
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agreements </title>
    
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
			 .create_link{
                content: url('../..//common/icons/create.png');
				
            }
            .view_link{
                content: url('../..//common/icons/view.png');
            }
            .delete_link{
                content: url('../..//common/icons/icon-delete-small.png' );
            }
        </style>
</head>

<body  bgcolor="#E1E1FF">
<div style="background-color:#000089; height:10%;padding:10px;padding-left:50px">
	<h3 style="color:#FFFFFF">Agreements</h3>
</div>
<br/>
<div class="admin_menu_bar" align="center" id="cssmenu">
            <ul>
              <li class='active'><a href='../../home/view/index.php'>Home</a></li>
              <li><a href='../../admin/view/control_panel.php'><span>Admin panel</span></a></li>
              <li><a href='../../admin/view/manage_users.php'><span>Users</span></a></li>
              <li><a href='../../admin/view/manage_properties.php'><span>Properties</span></a></li>
              <li><a href='../../admin/view/manage_inquiries.php'><span>Inquiries</span></a></li>
              <li><a href='../../admin/view/manage_reviews.php'><span>Reviews</span></a></li>
              <li><a href='../../admin/view/reports.php'><span>Reports</span></a></li>
              <li><a href='agreement_details.php'><span>Agreements</span></a></li>
            </ul>
</div>

<div class="content">
    <div class="CSSTableGenerator" >
    <table class="user_table">
        <tr>
            <td height="30">Registration No:</td>
            <td height="30">Agreement No:</td>
            <td>Date </td>
            <td>Agreed price:</td>
            <td>Action</td>
        </tr>
      <?php
        while($agr = mysql_fetch_array($all_agrs))
          {
          echo "<tr class='user_info'><td>".$agr['reg_no']."</td>";
          echo "<td class='user_info'>".$agr['agreement_no']."</td>";
		  echo "<td class='user_info'>".$agr['date']."</td>";
		  echo "<td class='user_info'>".$agr['agreed_price']."</td>";
		 
          echo "<td class='ac_link'><a  href='create_agreement.php?agr_no=".$agr['agreement_no']."'><span class='create_link' title='Create Agreement'></span></a>";
         echo " | <a  href='view_agreement .php?agr_no=".$agr['agreement_no']."'><span class='view_link' title='View Agreement'></span></a>";
        echo " | <a onClick=\"return confirm('Are you sure?')\" href='../controller/delete_agreement.php?agr_no=".$agr['agreement_no']."'><span class='delete_link' title='Delete Agreement'></span></a></td><tr>";
          }
      ?>
    </table>
    </div>
</div>
</body>
</html>
