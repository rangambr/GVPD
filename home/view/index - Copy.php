<?php session_start(); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HOME</title>
<script src="../../common/JS/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../../common/JS/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../../common/JS/form_validation.js"></script>
<!-- Main fade out silder js -->
<script type="text/javascript">
		function slideSwitch() {
			var $active = $('#slideshow IMG.active');
				if ( $active.length == 0 ) $active = $('#slideshow IMG:last');
				// use this to pull the images in the order they appear in the markup
    				var $next =  $active.next().length ? $active.next()
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
    		setInterval( "slideSwitch()", 5000 );
		});
	</script>
<!-- Horizonyal scroll slider -->
<script type="text/javascript">
    $(function(){
        var scroller = $('#scroller div.innerScrollArea');
        var scrollerContent = scroller.children('ul');
        scrollerContent.children().clone().appendTo(scrollerContent);
        var curX = 0;
        scrollerContent.children().each(function(){
            var $this = $(this);
            $this.css('left', curX);
            curX += $this.width();
        });
        var fullW = curX / 2;
        var viewportW = scroller.width();

        // Scrolling speed management
        var controller = {curSpeed:0, fullSpeed:2};
        var $controller = $(controller);
        var tweenToNewSpeed = function(newSpeed, duration)
        {
            if (duration === undefined)
                duration = 600;
            $controller.stop(true).animate({curSpeed:newSpeed}, duration);
        };

        // Pause on hover
        scroller.hover(function(){
            tweenToNewSpeed(0);
        }, function(){
            tweenToNewSpeed(controller.fullSpeed);
        });

        // Scrolling management; start the automatical scrolling
        var doScroll = function()
        {
            var curX = scroller.scrollLeft();
            var newX = curX + controller.curSpeed;
            if (newX > fullW*2 - viewportW)
                newX -= fullW;
            scroller.scrollLeft(newX);
        };
        setInterval(doScroll, 20);
        tweenToNewSpeed(controller.fullSpeed);
    });
</script>
<link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/login_tbl.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/slider.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">

<!--  <style>
    #usr_name{background: none;}
    #usr_name_cont{display:inline;}
    #logout_link{display: inline;}
    .register{display: inline}
	.msg msg-error{background-color: #ff0000;}
</style>	-->
</head>

<body  bgcolor="#EAF3CF">
<div class="header">
  <table width="100%" border="0" cellspacing="5" cellpadding="5">
    <tr>
      <td><div align="center"><img src="../../common/images/myBanner.png"/> <br/>
          <span style="color: #275C0D; font-weight: bold; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style: italic; font-size: large;">We Make Your Dream Come True. </span></div></td>
      <td><table>
          <?php 
        if(!isset($_SESSION['username'])){ ?>
          <form name="frm_login" method="post" action="../controller/login.php" onsubmit="return validateForm();"  >
            <tr>
              <td colspan="3"><?php
       
            //KINT::dump($_SESSION['username']);
            if(isset($_SESSION['username'])){?>
                Hi <?php echo ''.$_SESSION['username'];?>,</span><span id="logout_link"><a style="display:inline;" href="../controller/logout.php">logout</a> </span>
                <?php
            }
            else{?>
                <span><a href="../../customer/view/register.php">Register</a></span>
                <?php }
        ?></td>
            </tr>
            <tr>
              <td style="font-style: normal; font-weight: bold;">Username:</td>
              <td><input name="username2" class="textbox1" type="text" size="20" /></td>
              <td><input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox">Remember me.</label></td>
            </tr>
            <tr>
              <td style="font-weight: bold">Password:</td>
              <td><input name="password2" class="textbox2" type="password" size="20" /></td>
              <td><input name="login2" type="submit" value="Login" />
              <?php ?></td>
            </tr>
            <tr>
              <td colspan="3"><?php 
        if((!empty($_REQUEST['er'])) && ($_REQUEST['er']=="4")){ ?>
                <div class="msg msg-error">
                  <p><strong>Invalid username or password! </strong></p>
                </div>
              <?php } 
        ?></td>
            </tr>
          </form>
          <?php } 
        ?>
        </table></td>
    </tr>
  </table>
  
  <!--	<img src="../../common/images/myBanner.png" style="margin-left:50px" /><div>
<table  style="margin-left:1000px;">
  <tr>
    <td>Username:</td>
    <td><input name="username2" class="textbox1" type="text" size="30" /></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input name="password2" class="textbox2" type="password" size="20" /></td>
  </tr>
</table></div>--> 
</div>
<div class="menu_bar" align="center" id="cssmenu">
  <ul>
    <li class='active'><a href='index.php'><span>Home</span></a></li>
    <li><a href='#'><span>Buying</span></a></li>
    <li><a href='#'><span>Selling</span></a></li>
    <li><a href='#'><span>Search property</span></a></li>
    <li><a href='#'><span>My profile</span></a></li>
    <li><a href='#'><span>Review</span></a></li>
    <li class='last'><a href='#'><span>Contact us</span></a></li>
  </ul>
</div>
<div>
  <table width="100%" border="1" cellspacing="5" cellpadding="5">
    <tr>
      <td width="12%"><table width="300" height="369" class="tbl_home">
          <tr>
            <th width="287" height="65" scope="col" >Quick Search</th>
          </tr>
          <tr>
            <td><table>
                <tr align="left">
                  <td width="288" height="37"><span style="font-weight: bold;">City:</span><br/>
                    <select >
                      <option>Kandy</option>
                      <option>Kurunegala</option>
                      <option>Kegalle</option>
                      <option>Mathale</option>
                      <option>Nuwara Eliya</option>
                    </select></td>
                </tr>
                <tr align="left">
                  <td height="25"><span style="font-size: small">Property Type:</span><br/>
                    <select>
                      <option>All</option>
                      <option>Lots & Lands</option>
                      <option>Estate & Plantation</option>
                      <option>Commercial</option>
                      <option>Rentals</option>
                      <option>Residential</option>
                    </select></td>
                </tr>
                <tr align="left">
                  <td height="25"><span style="font-size: small">Price(LKR):</span><br/>
                    <select class="len">
                      <option>Min</option>
                      <option>28,000</option>
                      <option>38,000</option>
                      <option>65,000</option>
                      <option>100,000</option>
                      <option>150,000</option>
                      <option>250,000</option>
                    </select>
                    </label>
                    <select class="len">
                      <option>Max</option>
                      <option>38,000</option>
                      <option>65,000</option>
                      <option>100,000</option>
                      <option>150,000</option>
                      <option>1,000,000</option>
                    </select></td>
                </tr>
                <tr>
                  <td height="91" align="center" colspan="2"><input name="q_search"class="myButton" type="submit" value="Search" />
                    <br/>
                    <br/>
                    <a href="#">Advanced Search</a></td>
                </tr>
              </table>
        </table></td>
      <td width="88%"><div id="slideshow" align="center"> <img src="../../common/images/slide1.jpg" alt="Slideshow Image 1" width="750" height="411" class="active" /> <img src="../../common/images/slide2.jpg" alt="Slideshow Image 2" /> <img src="../../common/images/slide3.jpg" alt="Slideshow Image 3" /> <img src="../../common/images/slide4.jpg" alt="Slideshow Image 4" /> </div></td>
    </tr>
  </table>
</div>
<!--<div id="side_bar" align="left">

  <table width="300" height="193" class="tbl_home">
  
  			<tr>
  			  <th width="287" height="56" scope="col" >Quick Search</th></tr>
            <tr>
              <td>
            <form name="frm_search" method="post" action="index.php" >
            <table>
              <tr align="left">
                <td width="288" height="37"><span style="font-weight: bold;">City:</span><br/>
                  <select >
                  	<option>Kandy</option>
                    <option>Kurunegala</option>
                    <option>Kegalle</option>
                    <option>Mathale</option>
                    <option>Nuwara Eliya</option>
                  </select></td>
              </tr>
              <tr align="left">
                <td height="25"><span style="font-size: small">Property Type:</span><br/>
                  <select>
                  	<option>All</option>
                    <option>Lots & Lands</option>
                    <option>Estate & Plantation</option>
                    <option>Commercial</option>
                    <option>Rentals</option>
                    <option>Residential</option>
                  </select></td>
              </tr>
              <tr align="left">
                <td height="25"><span style="font-size: small">Price(LKR):</span><br/>
                	<select class="len">
                  	<option>Min</option>
                    <option>28,000</option>
                    <option>38,000</option>
                    <option>65,000</option>
                    <option>100,000</option>
                    <option>150,000</option>
                    <option>250,000</option>
                  </select></label>
                  
                  <select class="len">
                  	<option>Max</option>
                    <option>38,000</option>
                    <option>65,000</option>
                    <option>100,000</option>
                    <option>150,000</option>
                    <option>1,000,000</option>
                  </select>
                </td> 
              </tr>
              <tr>
                <td height="44" align="center" colspan="2"><input name="q_search"class="myButton" type="submit" value="Search" /><br/><br/><a href="#">Advanced Search</a></td>
              </tr>
          </table>
          </form>
  </table> 
</div>

<div id="slideshow" align="center"><img src="../../common/images/slide1.jpg" alt="Slideshow Image 1" class="active" /><img src="../../common/images/slide2.jpg" alt="Slideshow Image 2" />
    <img src="../../common/images/slide3.jpg" alt="Slideshow Image 3" />
    <img src="../../common/images/slide4.jpg" alt="Slideshow Image 4" />
</div>--> 

<br />
<br />

<!--<div class="fast_slider" align="center">
	<img src="../../common/images/pic1.jpg" width="156" height="100" />
	<img src="../../common/images/pic1.jpg" width="156" height="100" />
	<img src="../../common/images/pic1.jpg" width="156" height="100" />
	<img src="../../common/images/pic1.jpg" width="156" height="100" />
	<img src="../../common/images/pic1.jpg" width="156" height="100" />
	<img src="../../common/images/pic1.jpg" width="156" height="100" />
</div>
-->

<div id="scroller" style="width: 900px; height: 500px; margin: 0 auto;">
  <div class="innerScrollArea">
    <ul>
      <li><img src="../../common/images/golf.jpg" width="366" height="330" />
        <p align="center">Price: 50,000/=<br/>
          No:200, kundasale.<br/>
          Listing #1002</p>
      </li>
      <li><img src="../../common/images/leaf.jpg" width="366" height="330" />
        <p align="center">Price: 50,000/=<br/>
          No:200, kundasale.<br/>
          Listing #1002</p>
      </li>
      <li><img src="../../common/images/train.jpg" width="366" height="330" />
        <p align="center">Price: 50,000/=<br/>
          No:200, kundasale.<br/>
          Listing #1002</p>
      </li>
      <li><img src="../../common/images/golf.jpg" width="366" height="330" />
        <p align="center">Price: 50,000/=<br/>
          No:200, kundasale.<br/>
          Listing #1002</p>
      </li>
      <li><img src="../../common/images/leaf.jpg" width="366" height="330" />
        <p align="center">Price: 50,000/=<br/>
          No:200, kundasale.<br/>
          Listing #1002</p>
      </li>
      <li><img src="../../common/images/train.jpg" width="366" height="330" />
        <p align="center">Price: 50,000/=<br/>
          No:200, kundasale.<br/>
          Listing #1002</p>
      </li>
    </ul>
  </div>
</div>
<div class="content">
  <div id="myDiv">
    <?php
       
            //KINT::dump($_SESSION['username']);
            if(isset($_SESSION['username'])){?>
    <li id="usr_name"><span id="usr_name_cont"> Hi <?php echo ''.$_SESSION['username'];?>,</span><span id="logout_link"><a style="display:inline;" href="../controller/logout.php">logout</a> </span></li>
    <li><a href="../../property/view/add_property.php">Add Property</a></li>
    <?php
            }
            else{?>
    <li><a href="../../customer/view/register.php">Register</a></li>
    <?php }
        ?>
  </div>
  <!-- Left side table-->
  <table width="100%">
    <tr>
      <td width="33%"><table width="300" height="193" class="tbl_home">
          <tr>
            <th width="287" height="56" scope="col" >Log In</th>
          </tr>
          <tr>
            <td><?php 
        if(!isset($_SESSION['username'])){ ?>
              <form name="frm_login" method="post" action="../controller/login.php" onsubmit="return validateForm();"  >
                <table>
                  <tr align="center">
                    <td width="288" height="37"><span style="font-size: small">Username:</span> <span style="font-size: small">
                      <input name="username" class="textbox1" type="text" size="30" />
                      </span> <br />
                  </tr>
                  <tr align="center">
                    <td height="25"><span style="font-size: small">Password:</span>
                      <input name="password" class="textbox2" type="password" size="20" />
                      <br /></td>
                  </tr>
                  <tr>
                    <td height="44" align="center"><input name="login" class="myButton" type="submit" value="Login" />
                      <?php	 ?></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox">
                      <span style="font-size: small">Remember Me On This Machine<br/>
                      <a href="#">Forgot your password?</a></span><br/>
                  </tr>
                </table>
                <?php 
        if((!empty($_REQUEST['er'])) && ($_REQUEST['er']=="4")){ ?>
                <div class="msg msg-error">
                  <p><strong>Invalid username or password! </strong></p>
                </div>
                <?php } 
        ?>
              </form>
              <?php } 
        ?>
        </table></td>
      <!-- Middle table-->
      <td width="33%"><table width="300" height="193" class="tbl_home">
          <tr>
            <th width="287" height="56" scope="col" >Quick Search</th>
          </tr>
          <tr>
            <td><form name="frm_search" method="post" action="index.php" >
                <table>
                  <tr align="left">
                    <td width="288" height="37"><span style="font-weight: bold;">City:</span><br/>
                      <select >
                        <option>Kandy</option>
                        <option>Kurunegala</option>
                        <option>Kegalle</option>
                        <option>Mathale</option>
                        <option>Nuwara Eliya</option>
                      </select></td>
                  </tr>
                  <tr align="left">
                    <td height="25"><span style="font-size: small">Property Type:</span><br/>
                      <select>
                        <option>All</option>
                        <option>Lots & Lands</option>
                        <option>Estate & Plantation</option>
                        <option>Commercial</option>
                        <option>Rentals</option>
                        <option>Residential</option>
                      </select></td>
                  </tr>
                  <tr align="left">
                    <td height="25"><span style="font-size: small">Price(LKR):</span><br/>
                      <select class="len">
                        <option>Min</option>
                        <option>28,000</option>
                        <option>38,000</option>
                        <option>65,000</option>
                        <option>100,000</option>
                        <option>150,000</option>
                        <option>250,000</option>
                      </select>
                      </label>
                      <select class="len">
                        <option>Max</option>
                        <option>38,000</option>
                        <option>65,000</option>
                        <option>100,000</option>
                        <option>150,000</option>
                        <option>1,000,000</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td height="44" align="center" colspan="2"><input name="q_search"class="myButton" type="submit" value="Search" />
                      <br/>
                      <br/>
                      <a href="#">Advanced Search</a></td>
                  </tr>
                </table>
              </form>
        </table></td>
      
      <!-- Right table-->
      <td width="33%">&nbsp;</td>
      <td width="34%">&nbsp;</td>
    </tr>
  </table>
</div>
<div class="footer" id="footer_wrap">
  <ul>
    <li class='active'><a href='index.php'><span>Home</span></a></li>
    <li><a href='#'><span>Buying</span></a></li>
    <li><a href='#'><span>Selling</span></a></li>
    <li><a href='#'><span>Search property</span></a></li>
    <li><a href='#'><span>My profile</span></a></li>
    <li><a href='#'><span>Review</span></a></li>
    <li class='last'><a href='#'><span>Contact us</span></a></li>
  </ul>
  <p id="copyright" > Copyright © 2014 Greenvalley.lk All rights reserved. </p>
</div>
</body>
</html>
