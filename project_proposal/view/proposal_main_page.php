<?php session_start(); 
 require '../controller/proposal_main_page.php';
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title> Agreements </title>
    
    <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
	<link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/manage_user_table.css">
     
     <style type="text/css">
	 	 .left_box{
             width: 50%;
			 border-radius:6px;
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
                content: url('../..//common/icons/pencil.gif');
				
            }
            .view_link{
                content: url('../..//common/icons/eye.png');
            }
			.print_link{
				content: url('../..//common/icons/print-icon.png');
				}
            .delete_link{
                content: url('../..//common/icons/icon-delete-small.png' );
            }
        </style>
</head>

<body  bgcolor="#E1E1FF">
<div style="background-color:#000089; height:10%;padding:10px;padding-left:50px">
	<h3 style="color:#FFFFFF">Project proposal</h3>
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
              <li><a href='../../agreement/view/agreement_details.php'><span>Agreements</span></a></li>
              <li><a href='../../plan/view/plan_details.php'><span>Property plans</span></a></li>
                <li><a href='proposal_main_page.php'><span>Project proposals</span></a></li>
            </ul>
</div>
<br/>

<br/>
<div class="content">
    <div class="CSSTableGenerator" >
    <table class="user_table">
        <tr>
            <td width="27%" height="30">Client:</td>
            <td width="52%" height="30">Realization(owner):</td>
            <td>Action:</td>
        </tr>
        <tr bgcolor="#275C0D">
      	<td colspan="5" style="margin-right:10px;"><img src="../../common/icons/add_small.png"/><a href="create_project_proposal.php"><u><b style="color: rgba(0,0,255,1)" >Create  project proposal</b></u></a></td>
      </tr>
      <?php
        while($row=mysql_fetch_array($allprop))
          {
          echo "<tr class='user_info'><td>".$row['name']."</td>";
          echo "<td class='user_info'>".$row['tot_owner']."</td>";

         echo "<td class='ac_link'>  <a  href='view_proposal.php?propId=".$row['id']."'><span class='view_link' title='View Proposal'></span></a>";
		 echo " | <a  href='print_proposal.php?propId=".$row['id']."'><span class='print_link' title='Print Agreement'></span></a>";
        echo " | <a onClick=\"return confirm('Are you sure?')\" href='../controller/delete_proposal.php?propId=".$row['id']."'><span class='delete_link' title='Delete Proposal'></span></a></td>" ;
          
          }
      ?> 
     
    </table>
    </div>
</div>
</body>
</html>
