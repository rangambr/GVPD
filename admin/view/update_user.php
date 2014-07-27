<?php
session_start();
require '../controller/update_user.php';
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update user</title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/manage_user_table.css">

        <style type="text/css">
            .sidebar {
                position: absolute;
                left: 62px;
                top: 214px;
                bottom: 0;
                width: 282px;
                height: 480px;
                padding: 5px 5px 5px 25px;
            }
            #Tabs1{
                width: 800px;
                margin-left: 280px;
                margin-right: auto;
                margin-top: 5px;
                background-color:#FFFFFF;
            }
            #Tabs1 li{
                font-size:14px ;color:#275C0D;
                font-family:Helvatica;
                font-weight:bold;

            }
            .content{
                padding: 0px !important;
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
    <div id="Tabs1">

        <div id="tabs-1">
            <form name="update_profile.php" method="post" action="../controller/update_user.php">
                <table align="center" width="500" style="border:1px groove #93AE13;padding-bottom: 8%;">
                    <tr height="33px">
                        <td align="center"><img src="../../common/images/icons/user_yellow_edit.png"/></td>
                        <td><p align="left" style="font-weight: bold; font-style: normal; font-size: 16px; color: #275C0D;">Something Changed? &nbsp;&nbsp; Edit user profile.</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr /></td>
                    </tr>
                    <tr>
                        <th align="left">Username:</th>
                        <td>
                            <input name="username" type="text" id="txtfname" placeholder="Please enter username here" size="20" class="inputs" value="<?php echo ''.$username; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <th align="left">Type:</th>
                        <td>
                            <select class="len" name="type">
                                <?php
                                echo '<option '. ( $userType == 'Readonly' ? 'selected="selected"' : '' ) . '>Readonly</option>';
                                ?>
                                <?php
                                echo '<option '. ( $userType == 'Admin' ? 'selected="selected"' : '' ) . '>Admin</option>';
                                ?>
                                <?php
                                echo '<option '. ( $userType == 'Super' ? 'selected="selected"' : '' ) . '>Super</option>';
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th align="left">Active:</th>
                        <td>
                            <select class="len" name="status">
                                <?php
                                echo '<option '. ( $userStatus == '0' ? 'selected="selected"' : '' ) . '>Active</option>';
                                ?>
                                <?php
                                echo '<option '. ( $userStatus == '1' ? 'selected="selected"' : '' ) . '>Inactive</option>';
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                     <tr>
                         <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" valign="middle"><input type="submit" value="Update" class="myButton" name="submit" /></td>
                    </tr>
                </table>
            </form>
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
