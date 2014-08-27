<?php
session_start();
require '../controller/hot_deals.php';
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hot Deals</title>

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
                        <table style="border:2px solid rgb(181,194,179); border-radius:6px; font-size:small;">

                           <tr>

<?php if (isset($_SESSION['username']) && $_SESSION['active'] == 1) { ?> 
                                        <td colspan="3" class="user_lgn_msg">
                                            <div style="width:95%;">
    <?php echo '<a class="login_btn_gr" href="../../customer/view/display_profile.php"> Hi, ' . $_SESSION['username'] . '</a> '; ?>
                                                <br/>

                                                <a class="login_btn_gr" style="font-size: small;" href="../controller/logout.php">
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
                <li class='active'><a href='index.php'><span>Home</span></a></li>
                <li><a href='about_us.php'><span>About Us</span></a></li>
                <li><a href='../../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href='../view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../forum/create_topic.php'><span>Forum</span></a></li>
                <li><a href='../../reviews/view/display_review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
        </div>

        <div class="content">

            <table id="myTable" class="tablesorter">

                <tbody>
                    <?php while ($row = mysql_fetch_array($hot_props)) { ?>
                    <table width="80%" border="0" cellspacing="5" cellpadding="5" align="center" bgcolor="#fffdd9">
                        <tr bgcolor="#889E43">
                            <td colspan="2" style="font-size: 18px; color: #FCFCFC; font-weight: bolder;">
                                <?php
                                echo $row['name'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="../../property/photos/<?php getPhotoURLs($row['id']) ?>" height="150px" width="150px" />
                                <br/>    <img src="../../common/images/camera_add.png" alt="photos" title="photos"/>
                            </td>
                            <td>
                                <p><span style="font-style: normal; font-size: 16px;">Offered at:</span>
                                <h3> <span style="font-style: normal; color: #ff0000; font-size: large;">

                                        <?php echo $row['unit_price']; ?>
                                    </span></h3>
                                <span style="font-style: normal;font-weight: normal;"><br/>
                                    <span style="font-size: 14px"><?php echo $row['address1'].', '.$row['address2']; ?>
                                        </p>
                                    </span></span>
                                <p style="font-size: 14px;font-weight: normal;"><b>Property Type:</b> <?php echo $row['type']; ?></p>
                                <p style="font-weight: normal;">
                                    <?php echo $row['description']; ?>
                                </p>
                                <p> <a href="../../property/view/display_property.php?id=<?php echo $row['id']; ?>">More details>></a></p>
                                <?php if(isset($_SESSION['username']) && $_SESSION['active'] == 1) {{
            
       							 } ?>
                                <hr />
                                <a href="../controller/add_to_watchlist.php?id=<?php echo $row['id']; ?>"><img src="../../common/images/save.png" alt="save property" title="save property"/></a>
                                <span style="margin-left:25px;" >
                                    <a href="../../reviews/view/review.php?id=<?php echo $row['id']; ?>"><img src="../../common/images/star_full.png" alt="rate property" title="rate property"/></a>
                                    <a href="../../reviews/view/review.php?id=<?php echo $row['id']; ?>"><img src="../../common/images/star_half.png" alt="rate property" title="rate property"/></a>&nbsp;
                                    <a href="../../reviews/view/review.php?id=<?php echo $row['id']; ?>"><img src="../../common/images/star_empty.png" alt="rate property" title="rate property"/></a>
                                </span>
                                <span style="margin-left:25px;" >
                                 <a href="../controller/email_property.php"><img src="../../common/images/email.png" alt="contact us" title="contact us"/></a>
                                </span>
                                <span style="margin-left:25px; float:right;" >
                                    <a href="../../inquiry/view/add_inquiry.php">
                                        Inquire about this
                                    </a>
                                </span>
                                <?php }
            						else{
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
