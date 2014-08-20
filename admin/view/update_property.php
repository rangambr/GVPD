<?php
require '../controller/update_property.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo '' . $property['name']; ?></title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/login_tbl.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">
        <style>
            .ct_table th{
                width: 33%;
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

   <div class="content">
             <form name="edit_form" action="update_property.php" method="post" enctype="multipart/form-data">
             
             <table align="center" width="500" cellspacing="8px" style="border:1px groove #93AE13; background-color:#F8F8F7;">
                <tr height="33px">
                        <td width="149" align="center" style="padding:5px;"><img src="../../common/images/icons/edit-property.png" style="margin-left:40px;"/></td>
                        <td width="271"><p align="left" style="font-weight: bold; font-style: normal; font-size: 16px; color: #01015C; margin-left:30px;"> Edit Property</p>
                        </td>
               </tr>
               
                    <tr>
                        <th align="left"> Name : </th>
                        <td><label for="property_name">
                                <input type="hidden" name="prop_id" value="<?php echo '' . $property['id']; ?>"/>

                                <input name="property_name" type="text" id="property_name" value="<?php echo '' . $property['name'] ?>" size="45" class="inputs" />
                            </label></td>
                    </tr>
                    <tr>
                        <th align="left">Address Line 1 :</th>
                        <td><label for="address1">
                                <input name="address1" class="inputs" id="txtaddress1" value="<?php echo '' . $property['address1'] ?>" size="45" cols="47" rows="5"/>
                            </label></td>
                    </tr>
                    <tr>
                        <th align="left">Address Line 2 :</th>
                        <td><label for="address2">
                                <input name="address2" class="inputs" id="address2" value="<?php echo '' . $property['address2'] ?>" size="45" cols="47" rows="5"/>
                            </label></td>
                    </tr>
                    <tr>
                        <th align="left">City :</th>
                        <td><label for="city">
                                <input name="city" class="inputs" id="city" value="<?php echo '' . $property['city'] ?>" size="45" cols="47" rows="5"/>
                            </label></td>
                    </tr>
                    <tr>
                        <th align="left">Province :</th>
                        <td><label for="province">
                                <input name="province" class="inputs" id="city" value="<?php echo '' . $property['province'] ?>" size="45" cols="47" rows="5"/>
                            </label></td>
                    </tr>
                    <tr>
                        <th align="left">Extent(no. of perches) :</th>
                        <td><label for="extent">
                                <input name="extent" type="text" id="extent" value="<?php echo '' . $property['extent'] ?>" size="45" class="inputs"/>
                            </label></td>
                    </tr>
                    <tr>
                        <th align="left">Unit Price :</th>
                        <td><label for="unit_price">
                                <input name="unit_price" type="text" id="unit_price" value="<?php echo '' . $property['unit_price'] ?>" size="45" class="inputs"/>
                            </label></td>
                    </tr>
                    <tr>
                        <th align="left">Description :</th>
                        <td><label for="description">
                                <textarea name="description" id="description" value="<?php echo '' . $property['description'] ?>" rows="5" cols="40" class="inputs"></textarea>
                            </label></td>
                    </tr>
                    <tr>
                        <th align="left">Upload images :</th>

                        <td>
                            <?php
                            $rw_count = 0;
                            while ($rowpic = mysql_fetch_array($allPhotoURLs)) {
                                $rw_count++;
                                ?>
                                <span class="img left">
                                    <img src="../../property/photos/<?php echo '' . $rowpic['pic'] ?>" alt="" title=""/>
                                    <?php echo '<input type="hidden" name="oldpic' . $rw_count . '" value="' . $rowpic['pic'] . '"/>'; ?>
                                </span>
                            <?php } ?>
                            <div>
                                <label for="images">
                                    <input name="uploadedfile1" type="file" />
                                </label>

                                <label for="images">
                                    <input name="uploadedfile2" type="file" />
                                </label>

                                <label for="images">
                                    <input name="uploadedfile3" type="file" />
                                </label>
                            </div>

                        </td>

                    </tr>
                    <tr>
                        <td colspan="2" align="center" valign="middle">
                            <input type="submit" value="Update Property" class="myButton" name="submit" />
                        </td>
                    </tr>
              
            </table>
             </form>

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