<?php
require_once '../controller/display_profile.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update User Profile</title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/login_tbl.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">
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
        <link href="../../jQueryAssets/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
        
    </head>

    <body  bgcolor="#EAF3CF">
        <div class="header">
        	<table border="0" align="center" width="100%">
            	<tr>
                	<td style="margin-left:30px; padding-left:30px;">
                        <div align="center"><img src="../../common/images/tr_banner.png"/><br/>
                            <span style="color: #3A6839; font-weight: bold; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style: italic; font-size: large;">We Make Your Dream Come True.</span>
                        </div>
					</td>
                    <td align="center">
               			<table style="border:2px solid rgb(181,194,179); border-radius:6px; font-size:small;">

                           <tr>

<?php if (isset($_SESSION['username']) && $_SESSION['active'] == 1) { ?> 
                                        <td colspan="3" class="user_lgn_msg">
                                            <div style="width:95%;">
    <?php echo '<a class="login_btn_gr" href="display_profile.php"> Hi, ' . $_SESSION['username'] . '</a> '; ?>
                                                <br/>

                                                <a class="login_btn_gr" style="font-size: small;" href="../../home/controller/logout.php">
                                                    Logout
                                                </a><br/>
                                                <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Admin') { ?>
                                                    <a class="login_btn_gr" style="font-size: small;" href="../../admin/view/control_panel.php">Admin Panel</a>
    <?php } ?>
                                            </div>
                                        </td>      
<?php } ?> 

                                </tr>

                        </table>
             		</td>
             </tr>
         </table>
        </div>  		

         <div class="menu_bar" align="center" id="cssmenu">
            <ul>
                <li class='active'><a href='../../home/view/index.php'><span>Home</span></a></li>
                <li><a href='../../home/view/about_us.php'><span>About Us</span></a></li>
                                <li><a href='../../property/view/add_property.php'><span>Sell your property</span></a></li>
                <li><a href='../../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../forum/main_forum.php'><span>Forum</span></a></li>
                <li><a href='../../reviews/view/display_review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
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
                    <form name="update_profile.php" method="post" action="../controller/save_profile.php">
                        <table align="center" width="350" style="border:1px groove #93AE13;">
                            <tr height="33px">
                                <td width="116" align="center"><img src="../../common/images/icons/user_yellow_edit.png"/></td>
                                <td width="222"><p align="left" style="font-weight: bold; font-style: normal; font-size: 16px; color: #275C0D;">Something Changed? &nbsp;&nbsp; Edit your profile.</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr /></td>
                            </tr>
                            <tr>
                                <th align="left">First Name :</th>
                                <td><input name="txtfname" type="text" id="txtfname" placeholder="Please type your first  name here" size="20"  value="<?php echo '' . $fname; ?>" /></td>
                            </tr>
                            <tr>
                                <th align="left">Last Name :</th>
                                <td><input name="txtlname" type="text" id="txtlname" placeholder="Please type your last name here" size="20"  value="<?php echo '' . $lname; ?>"  /></td>
                            </tr>
                            <tr>
                                <th align="left">Gender :</th>
                                <td>
                                    <?php
                                    if ($gender == 'Male') {
                                        echo '<input type="radio" name="gender" value="Male" checked /> <span style="color: #132E06; font-size:12px;">Male</span> ';
                                        echo '<input type="radio" name="gender" value="Female" /> <span style="color: #132E06; font-size:12px;">Female</span> ';
                                    }
                                    ?>

                                    <?php
                                    if ($gender == 'Female') {
                                        echo '<input type="radio" name="gender" value="Male" /> <span style="color: #132E06; font-size:12px;">Male</span> ';
                                        echo '<input type="radio" name="gender" value="Female" checked/> <span style="color: #132E06;font-size:12px;">Female</span> ';
                                    }
                                    ?>
                            </tr>
                            <tr>
                                <th align="left">House Number/ Name :</th>
                                <td><input name="txtaddress1"  id="txtaddress1" placeholder="Please type your home number here" size="20" value="<?php echo '' . $address1; ?>" /></td>
                            </tr>
                            <tr>
                                <th align="left">Street :</th>
                                <td><input name="txtaddress2"  id="txtaddress2" placeholder="Please type your street name here" size="20" value="<?php echo '' . $address2; ?>"  /></td>
                            </tr>
                            <tr>
                                <th align="left">City :</th>
                                <td><input name="city"  id="city2" placeholder="Please type your city here" size="20" value="<?php echo '' . $city; ?>"  /></td>
                            </tr>
                            <tr>
                                <th align="left">Province :</th>
                                <td>
                                    
                                    <select name="province" >
                                        <option <?php if($province == "Central Province") echo 'selected'; ?>>Central Province </option>
                                        <option <?php if($province == "Eastern Province") echo 'selected'; ?>>Eastern Province</option>
                                        <option <?php if($province == "Northern Province") echo 'selected'; ?>>Northern Province</option>
                                        <option <?php if($province == "Southern Province") echo 'selected'; ?>>Southern Province</option>
                                        <option <?php if($province == "Western Province") echo 'selected'; ?>>Western Province</option>
                                        <option <?php if($province == "North Western Province") echo 'selected'; ?>>North Western Province</option>
                                        <option <?php if($province == "North Central Province") echo 'selected'; ?>>North Central Province</option>
                                        <option <?php if($province == "Uva Province") echo 'selected'; ?>>Uva Province</option>
                                        <option <?php if($province == "Sabaragamuwa Province") echo 'selected'; ?>>Sabaragamuwa Province</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th height="39" align="left">Birthday :</th>
                              <td><input type="text" id="Datepicker1"  name="txtbday" placeholder="Enter your birthday here" size="20" value="<?php echo '' . $birthday; ?>"  /></td>
                            </tr>
                            <tr>
                                <th align="left">Email :</th>
                                <td><input name="txtemail" type="text" id="txtemail" placeholder="Enter your valid email address here" size="20"  value="<?php echo '' . $email; ?>" /></td>
                            </tr>
                            <tr>
                                <th align="left">Contact Numbers :</th> 
                                <td><input name="txttp1" type="text" id="txttp1" placeholder="Enter your mobile number here" size="20"  value="<?php echo '' . $contact_no1; ?>" />
                                    <br/>
                                    <input name="txttp2" type="text" id="txttp2" placeholder="Enter your telephone number here" size="20"  value="<?php echo '' . $contact_no2; ?>" /></td>
                            </tr>

                            <tr>
                                <td colspan="2" align="center" valign="middle"><input type="submit" value="Update" class="myButton small_btn" name="submit" /></td>
                            </tr>
                            
                       </table></form>


<form name="frm_reset" action="../controller/reset_username_password.php" method="post">
     <table align="center" width="350" style="border:1px groove #93AE13;">
        <tr height="33px">
            <td width="124" align="center"><img src="../../common/images/icons/reset password.png"/></td>
            <td width="214"><p align="left" style="font-weight: bold; font-style: normal; font-size: 16px; color: #275C0D;"> Reset your Username & Password.</p>
            </td>
        </tr>
        <tr>
            <td colspan="2"><hr /></td>
        </tr>

        <tr>
            <th align="left">User name :</th>
            <td><input name="txtusername" type="text" id="username"  size="20" value="<?php echo '' . $username; ?>" disabled /></td>
        </tr>
        <tr>
            <th align="left">New Password :</th>
            <td><input name="txtpass" type="password" id="txtpass" size="20" /></td>
        </tr>
        <tr>
            <th align="left">Confirm Password :</th>
            <td><input name="txtpass2" type="password" id="txtpass2" size="20"  /></td>
        </tr>
        <tr>
            <th colspan="2"><input type="submit" value="Reset password" name="submit" class="myButton small_btn" /></th>
        </tr>
    </table>
</form>
                </div>

            </div>

        </div>
		<br/>
        <div class="footer" id="footer_wrap">
            <ul>
                <li class='active'><a href='index.php'><span>Home</span></a></li>
                 <li><a href='about_us.php'><span>About Us</span></a></li>
                <li><a href='../view/advanced_search.php'><span>Buying</span></a></li>
                <li><a href='../../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href="../../property/view/search_property.php"><span>Properties</span></a></li>
                <li><a href='../view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='#'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
            <p id="copyright" >
                Copyright © 2014 Greenvalley.lk All rights reserved.
            </p>
        </div>

    </body>
</html>
