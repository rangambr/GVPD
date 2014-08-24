<?php
session_start();
require '../controller/display_review.php';
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Reviews</title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/login_tbl.css">
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
                <li class='active'><a href='../../home/view/index.php'><span>Home</span></a></li>
                <li><a href='../../home/view/about_us.php'><span>About Us</span></a></li>
                <li><a href='../../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href='../../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../forum/main_forum.php'><span>Forum</span></a></li>
                <li><a href='display_review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
        </div>

        <div class="content">
            <table id="myTable" class="tablesorter">

                <tbody>

                    <?php
                    while ($row = mysql_fetch_array($get_review)) {
                        ?>

                    <table width="80%" border="0" cellspacing="5" cellpadding="5" align="center" bgcolor="#fffdd9">
                        <tr bgcolor="#889E43">
                            <td colspan="2" style="font-size: 18px; color: #FCFCFC; font-weight: bolder;">
                                <?php
                                echo $row['name'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="../../property/photos/<?php getPhotoURLs($row['property_id']) ?>" height="50px" width="50 px" />
                                <br/>    <img src="../../common/images/camera_add.png" alt="photos" title="photos"/>
                            </td>
                            <td>
                                <p><span style="font-style: normal; font-size: 16px;">Offered at:</span>
                                <h3> <span style="font-style: normal; color: #ff0000; font-size: large;">

                                        <?php echo $row['unit_price']; ?>
                                    </span></h3>
                                <span style="font-style: normal"><br/>
                                    <span style="font-size: 14px"><?php echo $row['address1'] . ', ' . $row['address2']; ?>
                                        </p>
                                    </span></span>
                                <p style="font-size: 14px">Property Type: <?php echo $row['type']; ?></p>
                                <p>
                                    <?php echo $row['description']; ?>
                                </p>
                                <p>
                                    <b>Reviews: </b>
                                    <?php echo $row['GROUP_CONCAT(rw_description)']; ?>

                                    
                                   
                                </p>
                                <p> <a href="../../property/view/display_property.php?id=<?php echo $row['property_id']; ?>">More details>></a></p>
                                <?php
                                if (isset($_SESSION['username']) && $_SESSION['active'] == 1) { {
                                        
                                    }
                                    ?>
                                    <hr />
                                    <a href="../../home/controller/add_to_watchlist.php"?id=<?php echo $row['property_id']; ?>"><img src="../../common/images/save.png" alt="save property" title="save property"/></a>
                                    <span style="margin-left:25px;" >
                                        <a href="../../reviews/view/review.php?id=<?php echo $row['property_id']; ?>"><img src="../../common/images/star_full.png" alt="rate property" title="rate property"/></a>
                                        <a href="../../reviews/view/review.php?id=<?php echo $row['property_id']; ?>"><img src="../../common/images/star_half.png" alt="rate property" title="rate property"/></a>&nbsp;
                                        <a href="../../reviews/view/review.php?id=<?php echo $row['property_id']; ?>"><img src="../../common/images/star_empty.png" alt="rate property" title="rate property"/></a>
                                    </span>
                                    <span style="margin-left:25px;" >
                                        <a href="../controller/email_property.php"><img src="../../common/images/email.png" alt="contact us" title="contact us"/></a>
                                    </span>
                                    <span style="margin-left:25px; float:right;" >
                                        <a href="../../inquiry/view/add_inquiry.php">
                                            Inquire about this
                                        </a>
                                    </span>
                                    <?php
                                } else {
                                    ?>
                                    <?php
                                }
                                ?>  

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
                <li class='active'><a href='../../home/view/index.php'><span>Home</span></a></li>
                <li><a href='../../home/view/about_us.php'><span>About Us</span></a></li>
                <li><a href='../../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href='../../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../forum/main_forum.php'><span>Forum</span></a></li>
                <li><a href='display_review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
            <p id="copyright" >
                Copyright © 2014 Greenvalley.lk All rights reserved.
            </p>
        </div>

    </body>
</html>
