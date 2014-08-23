<?php session_start(); ?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/login_tbl.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/slider.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">

        <script type="text/javascript" src="../../common/JS/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="../../common/JS/form_validation.js"></script>

        <!-- Main fade out silder js -->  
        <script type="text/javascript">
            function slideSwitch() {
                var $active = $('#slideshow IMG.active');
                if ($active.length == 0)
                    $active = $('#slideshow IMG:last');
                // use this to pull the images in the order they appear in the markup
                var $next = $active.next().length ? $active.next()
                        : $('#slideshow IMG:first');
// uncomment the 3 lines below to pull the images in random order
                // var $sibs  = $active.siblings();
                // var rndNum = Math.floor(Math.random() * $sibs.length );
                // var $next  = $( $sibs[ rndNum ] );
                $active.addClass('last-active');
                $next.css({opacity: 0.0})
                        .addClass('active')
                        .animate({opacity: 1.0}, 1000, function() {
                            $active.removeClass('active last-active');
                        });
            }
            $(function() {
                setInterval("slideSwitch()", 5000);
            });
        </script>
        <!-- Horizonyal scroll slider -->
        <script type="text/javascript">
            $(function() {
                var scroller = $('#scroller div.innerScrollArea');
                var scrollerContent = scroller.children('ul');
                scrollerContent.children().clone().appendTo(scrollerContent);
                var curX = 0;
                scrollerContent.children().each(function() {
                    var $this = $(this);
                    $this.css('left', curX);
                    curX += $this.width();
                });
                var fullW = curX / 2;
                var viewportW = scroller.width();

                // Scrolling speed management
                var controller = {curSpeed: 0, fullSpeed: 2};
                var $controller = $(controller);
                var tweenToNewSpeed = function(newSpeed, duration)
                {
                    if (duration === undefined)
                        duration = 600;
                    $controller.stop(true).animate({curSpeed: newSpeed}, duration);
                };

                // Pause on hover
                scroller.hover(function() {
                    tweenToNewSpeed(0);
                }, function() {
                    tweenToNewSpeed(controller.fullSpeed);
                });

                // Scrolling management; start the automatical scrolling
                var doScroll = function()
                {
                    var curX = scroller.scrollLeft();
                    var newX = curX + controller.curSpeed;
                    if (newX > fullW * 2 - viewportW)
                        newX -= fullW;
                    scroller.scrollLeft(newX);
                };
                setInterval(doScroll, 20);
                tweenToNewSpeed(controller.fullSpeed);
            });
        </script> 
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
                        <table class="login_tbl">
                            <form name="frm_login" method="post" action="../controller/login.php" onsubmit="return validateForm();"  >	

                                <?php if (!isset($_SESSION['username'])) { ?>
                                    <tr>
                                        <td colspan="2"><a href="../../customer/view/register.php" style="font-style: normal; font-size: small; padding:5px;">Register</a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td  style="font-style: normal; font-weight: bold; color: #0F2701; font-size: x-small;">
                                            <span style="font-weight: bolder; color: rgba(15,39,1,1);">Username</span>:
                                        </td>
                                        <td >
                                            <input name="username" class="textbox1" type="text" size="20" />
                                        </td>
                                        <td>
                                            <input type="checkbox" name="checkbox" id="checkbox">
                                            <label for="checkbox" style="color: #0F2701; font-style: normal; font-size: x-small;">Remember me.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="font-weight: bold; color: #0F2701; font-style: normal; font-size: x-small;">
                                            Password:
                                        </td>
                                        <td>
                                            <input name="password" class="textbox2" type="password" size="20" />
                                        </td>
                                        <td class="lng_btn_td">
                                            <input name="login" type="submit" value="Login" class="myButton small_btn" /><?php ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3">
                                            <?php
                                            if (!empty($_REQUEST['er'])) {

                                                $error_code = $_REQUEST['er'];
                                                if ($error_code == "4") {
                                                    ?>
                                                    <div class="msg msg-error">
                                                        <p><strong style="color: #FF0000">Invalid username or password! </strong></p>
                                                    </div><?php
                                                }
                                                if ($error_code == "8") {
                                                    ?>
                                                    <div class="msg msg-error">
                                                        <p><strong style="color: #FF0000">Activation Required! </strong></p>
                                                    </div><?php
                                                }
                                            }
                                            ?>   
                                        </td>
                                    </tr>

<?php } ?> 
                                <tr>

                                    <?php if (isset($_SESSION['username']) && $_SESSION['active'] == 1) { ?> 
                                        <td colspan="3" class="user_lgn_msg">
                                            <div style="width:95%;">
                                            <?php echo '<a class="login_btn_gr" href="../../customer/view/display_profile.php"> Hi, ' . $_SESSION['username'] . '</a> '; ?>
                                            <br/>
                                            
                                                <a class="login_btn_gr" style="font-size: small;" href="../controller/logout.php">
                                                    Logout
                                                </a><br/>
                                                <?php if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Admin'){ ?>
                                                <a class="login_btn_gr" style="font-size: small;" href="../../admin/view/control_panel.php">Admin Panel</a>
                                                <?php }?>
                                            </div>
                                        </td>      
                                    <?php } ?> 

                                </tr>
                            </form>
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
				<li><a href='../../forum/main_forum.php'><span>Forum</span></a></li>
                <li><a href='../../reviews/view/display_review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
        </div>

        <div>
            <table width="80%" border="0">
                <tr>
                    <!-- qick search table-->
                    <td width="15%">
                        <form name="frm_qfind" method="post" action="../controller/quick_find.php" onsubmit="return validateQuickFind();" >
                            <table width="275" height="400" class="tbl_home">
                                <tr>
                                    <th width="267" height="65" scope="col" ><img src="../../common/images/quick-search-heading-white.png" width="160" height="34" alt=""/></th>
                                </tr>                     
                                <tr align="left">
                                    <td width="267" height="37"><span style="font-weight: bold; font-style: normal;">City:</span><br/>
                                        <select name="location" >
                                            <option>--Select Here--</option>
                                            <option>Kandy</option>
                                            <option>Kurunegala</option>
                                            <option>Kegalle</option>
                                            <option>Mathale</option>
                                            <option>Nuwara Eliya</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td height="25"><span style="font-size: small"><span style="font-style: normal">Property Type</span>:</span><br/>
                                        <select name="property_type">
                                            <option>--Select Here--</option>
                                            <option>Lots and Lands</option>
                                            <option>Estate and Plantation</option>
                                            <option>Commercial</option>
                                            <option>Rentals</option>
                                            <option>Residential</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td height="25"><span style="font-size: small; font-style: normal;">Unit Price (LKR):</span><br/>
                                        <select name="min_val" class="len">
                                            <option>No min</option>
                                            <option>28,000</option>
                                            <option>38,000</option>
                                            <option>65,000</option>
                                            <option>100,000</option>
                                            <option>150,000</option>
                                            <option>250,000</option>
                                        </select></label>
                                        <select class="len" name="max_val">
                                            <option>No max</option>
                                            <option>38,000</option>
                                            <option>65,000</option>
                                            <option>100,000</option>
                                            <option>150,000</option>
                                            <option>1,000,000</option>
                                             <option>1,000,000</option>
                                        </select>
                                    </td> 
                                </tr>
                                <tr>
                                    <td height="125" align="center" colspan="2">
                                        <input name="q_search"class="myButton" type="submit" value="Search" />
                                        <br/><br/>
                                        <a href="../../property/view/advaced_search_property.php" style="font-style: normal">Advanced Search</a>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </td>

                    <!-- slideshow-->
                    <td width="65%">
                        <div id="slideshow" align="center">
                            <img src="../../common/images/slide1.jpg" alt="Slideshow Image 1" width="750" height="411" class="active" />
                            <img src="../../common/images/slide2.jpg" alt="Slideshow Image 2" />
                            <img src="../../common/images/slide3.jpg" alt="Slideshow Image 3" />
                            <img src="../../common/images/slide4.jpg" alt="Slideshow Image 4" />
                        </div>
                    </td>
                </tr>
            </table>
</div>

        <div id="scroller" style="width: 900px; height: 500px; margin: 0 auto;">
            <div class="innerScrollArea">
                <ul>
                    <li><img src="../../common/images/pic/blocks1.jpg" width="366" height="330" />
                        <p align="center">Price: 50,000/=<br/>
                            No:200, kundasale.<br/>
                            Listing #1002</p>
                    </li>
                    <li><img src="../../common/images/pic/2-sri-lanka-real-estate-property-kandy.jpg" width="366" height="330" />
                        <p align="center">Price: 50,000/=<br/>
                            No:200, kundasale.<br/>
                            Listing #1002</p>
                    </li>
                    <li><img src="../../common/images/pic/119.jpg" width="366" height="330" />
                        <p align="center">Price: 50,000/=<br/>
                            No:200, kundasale.<br/>
                            Listing #1002</p>
                    </li>
                    <li><img src="../../common/images/pic/DSC05099-2-sri-lanka-real-estate-property-kandy.jpg" width="366" height="330" />
                        <p align="center">Price: 50,000/=<br/>
                            No:200, kundasale.<br/>
                            Listing #1002</p>
                    </li>
                    <li><img src="../../common/images/pic/Picture 005Kandy-Luxury-Villa-Sri-Lanka-Property-sale.jpg" width="366" height="330" />
                        <p align="center">Price: 50,000/=<br/>
                            No:200, kundasale.<br/>
                            Listing #1002</p>
                    </li>
                    <li><img src="../../common/images/pic/cottage 02-Wattegama-Hunas-Falls-Sri-Lanka-Property.jpg" width="366" height="330" />
                        <p align="center">Price: 50,000/=<br/>
                            No:200, kundasale.<br/>
                            Listing #1002</p>
                    </li>
                    <li><img src="../../common/images/pic/2-Kandy-Sri-Lanka-Property-Estate-Plantation.jpg" width="366" height="330" />
                        <p align="center">Price: 50,000/=<br/>
                            No:200, kundasale.<br/>
                            Listing #1002</p>
                    </li>
                    <li><img src="../../common/images/pic/1-sri-lanka-real-estate-property-kandy.jpg" width="366" height="330" />
                        <p align="center">Price: 90,000,000/=<br/>
                             No:74, Kappetipola Mawatha, Kandy<br/>
                            </p>
                    </li>
                    <li><img src="../../common/images/pic/DSC00037-Kandy-Hill-Country-Sri-Lanka-Property-Estate-Plantation.jpg" width="366" height="330" />
                        <p align="center">Rs.120,000,000<br/>
                          Kandy district<br/>
                            Listing #1002</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content"></div>

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
