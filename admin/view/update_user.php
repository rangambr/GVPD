<?php require '../controller/update_user.php'; ?>
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
		<h3 style="color:#FFFFFF">Update users</h3>
	</div>
	<br/>
<div class="admin_menu_bar" align="center" id="cssmenu">
           <ul>
                <li><a href='../../home/view/index.php'>Home</a></li>
                <li><a href='control_panel.php'><span>Admin panel</span></a></li>
                <li><a href='manage_users.php'><span>Users</span></a></li>
                <li><a href='manage_properties.php'><span>Properties</span></a></li>
                <li><a href='manage_inquiries.php'><span>Inquiries</span></a></li>
                <li><a href='manage_reviews.php'><span>Reviews</span></a></li>
                <li><a href='reports.php'><span>Reports</span></a></li>
                <li><a href='../../agreement/view/agreement_details.php'><span>Agreements</span></a></li>
                <li><a href='../../plan/view/plan_details.php'><span>Property plans</span></a></li>
                <li><a href='../../project_proposal/view/proposal_main_page.php'><span>Project proposals</span></a></li>
            </ul>
</div>
</div>
<br/><br/>
<div class="content">
   
        <?php
        ?>
        
            <form name="frm_update" method="post" action="../controller/edit_user.php">
                <table align="center" width="338" style="border:1px groove #93AE13;padding-bottom: 8%; background-color:#F8F8F7;">
                    <tr height="33px">
                        <td width="100" align="center" style="padding:5px;"><img src="../../common/images/icons/user.png"/></td>
                        <td width="226"><p align="left" style="font-weight: bold; font-style: normal; font-size: 16px; color: #01015C; text-align: center;">Update User</p>
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
                        <th align="left">Type:</th>
                        <td>
                            <select class="len" name="type">
                                <?php
                                
                                echo '<option ' . ( $userType == 'Readonly' ? 'selected="selected"' : '' ) . '>Readonly</option>';
                                ?>
                                <?php
                                echo '<option ' . ( $userType == 'Admin' ? 'selected="selected"' : '' ) . '>Admin</option>';
                                ?>
                                <?php
                                echo '<option ' . ( $userType == 'Super' ? 'selected="selected"' : '' ) . '>Super</option>';
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th align="left">Active:</th>
                        <td>
                            <select class="len" name="status">
                                <?php
                                
                                echo '<option ' . ( $userStatus == '1' ? 'selected="selected"' : '' ) . ' value="1">Active</option>';
                                ?>
                                <?php
                                echo '<option ' . ( $userStatus == '0' ? 'selected="selected"' : '' ) . ' value="0">Inactive</option>';
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" valign="middle">
                            <input type="submit" value="Update" class="myButton" name="submit" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
</body>
</html>
