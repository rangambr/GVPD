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
     
     <script type="text/javascript">
     	function confirm_func() {
	var answer = confirm("Are you sure you want to delete ?")
	if (answer){
		alert("Deleted!")
		window.location = "manage_users.php";
	}
	else{
		alert("Cancelled!")
	}
}
     </script>
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
                content: url('../..//common/icons/icon-delete-small.png' );
            }
        </style>
</head>

<body  bgcolor="#E1E1FF">
<div style="background-color:#000089; height:10%;padding:10px;padding-left:50px">
	<h3 style="color:#FFFFFF">Reply Inquiries</h3>
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
<div>
<br/><br/>
	<form name="frm_repInquiry" method="post" action="">
                <table align="center" width="418" cellspacing="3px" style="border: 1px groove #93AE13; padding-bottom: 2%; background-color: #F8F8F7; font-size: small;">
                    <tr height="33px">
                        <td colspan="2" width="310" align="center"><img src="../../common/images/icons/inquiry.png"/><span style="text-align: center; margin-bottom:5px; font-weight: bold; font-style: normal; font-size: 16px; color: #01015C;" > Reply Inquiry</span></p>
                        </td>
                    </tr>
                    <tr>
                        <th align="left"><div align="left">Reply :</div></th>
                        <td>
                            <textarea name="txt_reply" cols="40" rows="7"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" valign="middle">
                            <input type="submit" value="send" class="myButton" name="submit" />
                        </td>
                    </tr>
                </table>
            </form>
</div>
</body>
</html>
