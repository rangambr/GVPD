<?php
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
            .wlist{
                text-align: center;
            }
        </style>
        
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
               			<table class="login_tbl">
                 			<tr>
                    			<td class="user_lgn_msg">
								  <?php if (isset($_SESSION['username']) && $_SESSION['active'] == 1) { ?> 
                                  <?php echo 'Hi, <a href="../../customer/view/display_profile.php">' . $_SESSION['username'] . '</a> '; ?>
                                      <span style="font-style: normal">
                                          <a style="display: inline; font-size: small;" href="../../home/controller/logout.php">Logout</a>
                                     </span>      
                        		<?php } ?>
                    		  </td>
               				</tr>
             			</table>
             	</td>
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
                                    </td>
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
                                <th align="left">Province :</th>
                                <td><input name="province" class="inputs" id="province" placeholder="Please type your province here" size="20" value="<?php echo '' . $province; ?>" disabled="true" /></td>
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
                        
                        <table align="center" width="500" style="border:1px groove #93AE13;">
                            <tr height="33px">
                                <td align="center"><img src="../../common/images/icons/user_yellow_edit.png"/></td>
                                <td><p align="left" style="font-weight: bold; font-style: normal; font-size: 16px; color: #275C0D;">My watch list.</p>
                                </td>
                            </tr>
                            <tr><th>Property</th><th>Location</th><th>Status</th><th>Action</th></tr>
                            <?php
                                while($row=mysql_fetch_array($watch_list)){
                                    echo '<tr><td class="wlist"> <a href="../../property/view/display_property.php?id='.$row['property_id'].'">'.$row['name'].'</a></td>';
                                    echo '<td class="wlist">'.$row['city'].'</td>';
                                    echo '<td class="wlist">'.$row['status'].'</td>';
                                    echo '<td class="wlist"> <a href="../controller/remove_watch_list.php?id='.$row['property_id'].'">remove from watch list</a></td></tr>';
                                }
                            ?>
                               
                        </table>
                        
                        <table align="center" width="500" style="border:1px groove #93AE13;">
                            <tr height="33px">
                                <td align="center"><img src="../../common/images/icons/user_yellow_edit.png"/></td>
                                <td><p align="left" style="font-weight: bold; font-style: normal; font-size: 16px; color: #275C0D;">Properties Added by me</p>
                                </td>
                            </tr>
                            <tr><th>Property</th><th>Location</th><th>Status</th><th>Action</th></tr>
                            <?php
                                while($row=mysql_fetch_array($my_properties)){
                                    echo '<tr><td class="wlist"> <a href="../../property/view/display_property.php?id='.$row['id'].'">'.$row['name'].'</a></td>';
                                    echo '<td class="wlist">'.$row['city'].'</td>';
                                    echo '<td class="wlist">'.$row['Status'].'</td>';
                                    echo '<td class="wlist"> <a href="../controller/remove_property.php?id='.$row['id'].'">remove</a></td></tr>';
                                }
                            ?>
                               
                        </table>
                    </form>
                </div>
                
            </div>

        </div>

        <div class="footer" id="footer_wrap">
            <ul>
                <li class='active'><a href='index.php'><span>Home</span></a></li>
                <li><a href='../view/advanced_search.php'><span>Buying</span></a></li>
                <li><a href='../../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href="../../property/view/search_property.php"><span>Properties</span></a></li>
                <li><a href='../view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='#'><span>Review</span></a></li>
                <li class='last'><a href='../view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
            <p id="copyright" >
                Copyright © 2014 Greenvalley.lk All rights reserved.
            </p>
        </div>

    </body>
</html>
