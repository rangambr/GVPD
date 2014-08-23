<?php
session_start();
require '../controller/review.php';
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Reviews</title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/login_tbl.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/slider.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">
    </head>

    <body  bgcolor="#EAF3CF">

        <div class="header">

            <table width="100%" border="0">
                <tr>
                    <td style="margin-left:30px; padding-left:30px;">
                        <div align="center"><img src="../../common/images/tr_banner.png"/><br/>
                            <span style="color: #3A6839; font-weight: bold; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style: italic; font-size: large;">We Make Your Dream Come True.</span>
                        </div>

                    </td>
                    <td>
                        <table >

                            <tr>

                            </tr>

                        </table>
                    </td>
                </tr>
            </table>

        </div>

        <div class="menu_bar" align="center" id="cssmenu">
            <ul>
                <li class='active'><a href='index.php'><span>Home</span></a></li>
                <li><a href='about_us.php'><span>About Us</span></a></li>
                <li><a href='../../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href='../view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../forum/create_topic.php'><span>Forum</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
        </div>

        <div class="content">

            <table id="myTable" class="tablesorter">

                <tbody>
                    <?php while ($row = mysql_fetch_array($get_review)) { ?>
                    <table width="80%" border="0" cellspacing="5" cellpadding="5" align="center" bgcolor="#fffdd9">
                        <tr bgcolor="#889E43">
                            <td colspan="2" style="font-size: 18px; color: #FCFCFC; font-weight: bolder;">
                                <?php
                                echo $row['property_id'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            
                            <td>
                                <p><span style="font-style: normal; font-size: 16px;">description:</span>
                                <h3> <span style="font-style: normal; color: #ff0000; font-size: large;">

                                        <?php echo $row['rw_description']; ?>
                                    </span></h3>
                                
                                <p style="font-size: 14px">Property Type: <?php echo $row['rating']; ?></p>
                                 
                                <hr />
                                                                <span style="margin-left:25px; float:right;" >
                                    <a href="../../inquiry/view/add_inquiry.php">
                                        Inquire about this
                                    </a>
                                </span> 

                            </td>
                        </tr>
                    </table>        
                    <?php
                }
                ?> 
                </tbody>
            </table>
        </div>

        <div class="footer" id="footer_wrap">
            <ul>
                <li class='active'><a href='index.php'><span>Home</span></a></li>
                <li><a href='about_us.php'><span>About Us</span></a></li>
                <li><a href='../../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href='../view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
            <p id="copyright" >
                Copyright © 2014 Greenvalley.lk All rights reserved.
            </p>
        </div>

    </body>
</html>
