<?php
require_once '../controller/display_profile.php';

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Display profile</title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/login_tbl.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">

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
				font-size:12px;
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
                <li><a href='../../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../../property/view/add_property.php'><span>Selling</span></a></li>
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
                        <div style="background-color: #CCFFCC; color: #275C0D; font-size: 14px; height: 30px; font-weight: normal;padding-top:10px" ><strong style="color: #275C0D">
                            <img src="../../common/images/icons/success.gif" width="16px" height="16px"/>Successfully updated your details!</strong>
               </div>
               		<?php } ?>
                    
                  <div id="tabs-1">
                    <?php if (!empty($_REQUEST['msg']) && $_REQUEST['msg'] == "5") { ?>
                        <div style="background-color: #CCFFCC; color: #275C0D; font-size: 14px; height: 30px; font-weight: normal;padding-top:10px" ><strong style="color: #275C0D">
                            <img src="../../common/images/icons/success.gif" width="16px" height="16px" />Successfully removed the property!</strong>
               </div>
               		<?php } ?>
                        
                    </div>
                    
                    <div id="tabs-1">
                    <?php if (!empty($_REQUEST['msg']) && $_REQUEST['msg'] == "7") { ?>
                        <div style="background-color: #CCFFCC; color: #275C0D; font-size: 14px; height: 30px; font-weight: normal;padding-top:10px" ><strong style="color: #275C0D">
                            <img src="../../common/images/icons/success.gif" width="16px" height="16px" />Successfully removed the property from watch list!</strong>
               </div>
               		<?php } ?>
                        
                    </div>
               </div>
                    <form name="update_profile.php" method="post" action="../controller/update_profile.php">
                        <table align="center" width="600" style="border:1px groove #000089;" cellspacing="5px" >
                            <tr bgcolor="#B5B5FF" height="40px">
                                <td height="79" colspan="2" align="center"><img src="../../common/images/icons/user_yellow_edit.png"/>
                                <span align="left" style="font-weight: bold; font-style: normal; font-size: 18px; color: #000089;">Something Changed?Edit your profile.</span>
                                </td>
                            </tr>
                            <tr>
                                
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
                                            echo '<input type="radio" name="gender" value="Male" checked disabled="true"/> <span style="color: #132E06; font-size:12px;">Male</span> ';
                                            echo '<input type="radio" name="gender" value="Female" disabled="true"/> <span style="color: #132E06; font-size:12px;">Female</span> ';
                                        }?>
                                        
                                    <?php 
                                        if($gender == 'Female'){
                                            echo '<input type="radio" name="gender" value="Male" /> <span style="font-size:12px;color: #132E06; ">Male</span> ';
                                            echo '<input type="radio" name="gender" value="Female" checked/> <span style="font-size:12px; color: #132E06">Female</span> ';
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
                                <td colspan="2" align="center" valign="middle"><input type="submit" value="Update" class="myButton small_btn" name="submit" /></td>
                            </tr>
                        </table>
                        <br/>
                        <table align="center" width="600" style="border: 1px groove #000089; font-size: 16px;" cellspacing="5px" >
                            <tr bgcolor="#B5B5FF" height="79px">
                                <td height="79" colspan="4" align="center"><img src="../../common/images/icons/watch__ List.png" width="64" height="64"/>
                                <span align="left" style="font-weight: bold; font-style: normal; font-size: 18px; color: #000089;">My watch list</span>
                                </td>
                            </tr>
                            <tr style="font-size:14px" height="40px">
                            	<th width="281" style="color: #132E06; font-size: 14px; text-align: left; font-style: normal;"><u>Property</u></th><th width="83" style="color: #132E06; font-size: 14px; text-align: left;"><u>Location</u></th><th width="82" style="color: #132E06; font-size: 14px; text-align: left;"><u>Status</u></th><th width="134" style="color: #132E06; font-size: 14px; text-align: left;"><u>Action</u></th>
                            </tr>
                            <?php
                                while($row=mysql_fetch_array($watch_list)){
                                    echo '<tr><td class="wlist"> <a href="../../property/view/display_property.php?id='.$row['property_id'].'">'.$row['name'].'</a></td>';
                                    echo '<td class="wlist" align="center" style="margin-left:5px;">'.$row['city'].'</td>';
                                    echo '<td class="wlist" align="center">'.$row['status'].'</td>';
                                    echo '<td class="wlist"> <a href="../controller/remove_watch_list.php?id='.$row['property_id'].'">remove from watch list</a></td></tr>';
                                }
                            ?>
                               
                        </table>
                         <br/>
                      <table align="center" width="600" style="border: 1px groove #000089; color: #FF4F15;"  cellspacing="5px">
                            <tr bgcolor="#B5B5FF" height="33px">
                                <td height="79" colspan="4" align="center"><img src="../../common/images/icons/property.png"/>
                              <span align="left" style="font-weight: bold; font-style: normal; font-size: 18px; color: #000089;">Properties Added By Me</span>
                                </td>
                            </tr>
                            
                            <tr style="font-size:14px;" height="40px">
                          <th width="281" style="color: #132E06; font-size: 14px; text-align: left;">Property</th><th width="107" style="color: #132E06; font-size: 14px; text-align: left;">Location</th><th width="85" style="color: #132E06; font-size: 14px; text-align: left;">Status</th><th width="107" style="color:#132E06; font-size: 14px; text-align: left;">Action</th></tr>
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
<br/><br/><br/>
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
