<?php
session_start();
require_once '../controller/display_profile.php';

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration</title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">

        <link href="../../common/jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
        <link href="../../common/jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
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
            <img src="../../common/images/myBanner.png"  style="margin-left:50px"/><span>
                <img src="../../common/images/contact.png" style="margin-left:140px"/></span> </div>  		

        <div class="menu_bar" align="center" id="cssmenu">
            <ul>
                <li class='active'><a href='index.html'><span>Home</span></a></li>
                <li><a href='#'><span>Buying</span></a></li>
                <li><a href='#'><span>Selling</span></a></li>
                <li><a href='#'><span>Search property</span></a></li>
                <li><a href='#'><span>My profile</span></a></li>
                <li><a href='#'><span>Review</span></a></li>
                <li class='last'><a href='#'><span>Contact us</span></a></li>
            </ul>
        </div>
        <div class="content">
            
            <div id="Tabs1">

                <div id="tabs-1">
                    <?php if (!empty($_REQUEST['er']) && $_REQUEST['er'] == "12") { ?>
                        <div style="background-color: #CCFFCC; color: #275C0D; font-size: 14px; height: 30px; font-weight: normal;padding-top:10px" >
                            We've successfully updated your details!
                        </div>
                        <div>
                        <?php } ?>
                    </div>
                    <form name="update_profile.php" method="post" action="../controller/update_profile.php">
                        <table align="center" width="500" style="border:1px groove #93AE13;">
                            <tr height="33px">
                                <td align="center"><img src="../../common/images/icons/user_yellow_edit.png"/></td>
                                <td><p align="left" style="font-weight: bold; font-style: normal; font-size: 16px; color: #275C0D;">Something Changed? &nbsp;&nbsp; Edit your profile.</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr /></td>
                            </tr>
                            <tr>
                                <th align="left">First Name :</th>
                                <td><input name="txtfname" type="text" id="txtfname" placeholder="Please type your first  name here" size="20" class="inputs" value="<?php echo '' . $fname; ?>" disabled="true"/></td>
                            </tr>
                            <tr>
                                <th align="left">Last Name :</th>
                                <td><input name="txtlname" type="text" id="txtlname" placeholder="Please type your last name here" size="20" class="inputs" value="<?php echo '' . $lname; ?>" disabled="true" /></td>
                            </tr>
                            <tr>
                                <th align="left">Gender :</th>
                                <td>
                                    <?php 
                                        if($gender == 'Male'){
                                            echo '<input type="radio" name="gender" value="Male" checked disabled="true"/> <span style="color: #275C0D">Male</span> ';
                                            echo '<input type="radio" name="gender" value="Female" disabled="true"/> <span style="color: #275C0D">Female</span> ';
                                        }?>
                                        
                                    <?php 
                                        if($gender == 'Female'){
                                            echo '<input type="radio" name="gender" value="Male" /> <span style="color: #275C0D">Male</span> ';
                                            echo '<input type="radio" name="gender" value="Female" checked/> <span style="color: #275C0D">Female</span> ';
                                        }
                                    ?>
                            </tr>
                            <tr>
                                <th align="left">House Number/ Name :</th>
                                <td><input name="txtaddress1" class="inputs" id="txtaddress1" placeholder="Please type your home number here" size="20" value="<?php echo '' . $address1; ?>" disabled="true"/></td>
                            </tr>
                            <tr>
                                <th align="left">Street :</th>
                                <td><input name="txtaddress2" class="inputs" id="txtaddress2" placeholder="Please type your street name here" size="20" value="<?php echo '' . $address2; ?>" disabled="true" /></td>
                            </tr>
                            <tr>
                                <th align="left">City :</th>
                                <td><input name="city" class="inputs" id="city2" placeholder="Please type your city here" size="20" value="<?php echo '' . $city; ?>" disabled="true" /></td>
                            </tr>
                            <tr>
                                <th align="left">Birthday :</th>
                                <td><input type="text" id="Datepicker1" class="inputs" name="txtbday" placeholder="Enter your birthday here" size="20" value="<?php echo '' . $birthday; ?>" disabled="true" /></td>
                            </tr>
                            <tr>
                                <th align="left">Email :</th>
                                <td><input name="txtemail" type="text" id="txtemail" placeholder="Enter your valid email address here" size="20" class="inputs" value="<?php echo '' . $email; ?>" disabled="true"/></td>
                            </tr>
                            <tr>
                                <th align="left">Contact Numbers :</th> 
                                <td><input name="txttp1" type="text" id="txttp1" placeholder="Enter your mobile number here" size="20" class="inputs" value="<?php echo '' . $contact_no1; ?>" disabled="true"/>
                                    <br/>
                                    <input name="txttp2" type="text" id="txttp2" placeholder="Enter your telephone number here" size="20" class="inputs" value="<?php echo '' . $contact_no2; ?>" disabled="true"/></td>
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
                <li class='active'><a href='index.html'><span>Home</span></a></li>
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
