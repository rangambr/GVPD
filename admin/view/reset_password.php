<?php require '../controller/reset_password.php'; ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update user</title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/manage_user_table.css">

        <style type="text/css">
            .content{
                padding: 0px !important;
            }
        </style>
    </head>

    <body  bgcolor="#E1E1FF">

<div class="header">
<div style="background-color:#000089; height:10%;padding:10px; padding-left:50px" >
		<h3 style="color:#FFFFFF">Reset Password</h3>
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
</div>
<br/><br/>
<div class="content">
   
        <?php
        ?>
        
            <form name="frm_reset" method="post" action="../controller/reset_password.php">
                <table align="center" width="338" cellspacing="8px" style="border:1px groove #93AE13;padding-bottom: 8%; background-color:#F8F8F7;">
                    <tr height="33px">
                        <td width="100" align="center" style="padding:5px;"><img src="../../common/images/icons/reset password.png"/></td>
                        <td width="226"><p align="left" style="font-weight: bold; font-style: normal; font-size: 16px; color: #01015C; text-align: center;">Reset Password</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <th align="left">Username:</th>
                        <td>
                            <div><?php echo '' . $username;?>
                                <input name="username" type="hidden" value="<?php echo '' . $username;?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th align="left">Password:</th>
                        <td>
                            
                                <input name="password" type="password" value="<?php echo '' . $password;?>">
                        </td>
                    </tr>
                    <tr>
                        <th align="left">New password:</th>
                        <td>
                            <input type="password" name="txt_pass" />                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" valign="middle">
                            <input type="submit" value="Change" class="myButton" name="submit" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
</body>
</html>
