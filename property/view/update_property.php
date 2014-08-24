<?php
session_start();
require '../controller/update_property.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo '' . $property['name']; ?></title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
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
                        <table >
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
                <li class='active'><a href='../../home/view/index.php'><span>Home</span></a></li>
                <li><a href='../../home/view/about_us.php'><span>About Us</span></a></li>
                <li><a href='advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='add_property.php'><span>Selling</span></a></li>
                <li><a href='../../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../forum/create_topic.php'><span>Forum</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
        </div>

        <div class="content">
             <form name="edit_form" action="../controller/edit_property.php" method="post" enctype="multipart/form-data">
            <table class="ct_table" align="center" width="500" style="border:1px groove #93AE13;" >
                <tr bgcolor="#005825">
                    <td colspan="2" align="center"><h1 style="color: #FFFFFF; font-style: normal;"> Edit Property</h1></td>
                </tr>
                <tr>
                	
                <?php if (isset($_SESSION['username']) && $_SESSION['active'] == 1 && $_SESSION['user_type'] == 'Admin') { ?> 
                <th align="left">Status :</th>
                	<td>
                          <?php 
                                        if($property['Status'] == 'Active'){
                                            echo '<input type="radio" name="status" value="Active" checked disabled="true"/> <span style="color: #275C0D">Active</span> ';
                                            echo '<input type="radio" name="status" value="Draft" disabled="true"/> <span style="color: #275C0D">Draft</span> ';
                                        }
									?>
                                        
                            <?php 
                                        if($property['Status'] == 'Draft'){
                                            echo '<input type="radio" name="status" value="Active" /> <span style="color: #275C0D">Active</span> ';
                                            echo '<input type="radio" name="status" value="Draft" checked/> <span style="color: #275C0D">Draft</span> ';
                                        }
                                    ?>
                          </td>
                          <?php 
						  	}?>
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