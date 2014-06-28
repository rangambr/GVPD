<?php session_start(); ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>HOME</title>
    
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
</head>

<body  bgcolor="#EAF3CF">

<div class="header">

<table width="100%" border="0">
  <tr>
    <td height="217" style="margin-left:30px; padding-left:30px;">
        <div align="center"><img src="../../common/images/tr_banner.png"/><br/>
          <span style="color: #275C0D; font-weight: bold; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style: italic; font-size: large;">We Make Your Dream Come True.</span>
        </div>
        
    </td>
    <td>
        <table>
            <form name="frm_login" method="post" action="../controller/login.php" onsubmit="return validateForm();"  >	
            
            <?php 
                if(! isset($_SESSION['username'])){ ?>
                	<tr>
            			<td colspan="3"><a href="../../customer/view/register.php">Register</a></td>
            		</tr>
                    <tr>
                        <td width="55" style="font-style: normal; font-weight: bold; color: #0F2701;"><span style="font-weight: bolder; color: rgba(15,39,1,1);">Username</span>:</td>
                        <td width="82"><input name="username" class="textbox1" type="text" size="20" /></td>
                        <td width="207"><input type="checkbox" name="checkbox" id="checkbox">
                          <label for="checkbox" style="color: #0F2701">Remember me.</label></td>
                    </tr>
                    
                    <tr>
                      <td style="font-weight: bold; color: #0F2701;">Password:</td>
                      <td><input name="password" class="textbox2" type="password" size="20" /></td>
                      <td><input name="login" type="submit" value="Login" /><?php ?></td>
                    </tr>
                   
                    <tr>
                          <td colspan="3">
                          <?php 
                          if((!empty($_REQUEST['er'])) && ($_REQUEST['er']=="4")){ ?>
                              <div class="msg msg-error">
                                  <p><strong style="color: #FF0000">Invalid username or password! </strong></p>
                          </div><?php } 
                          ?>   
                      </td>
                    </tr>
      
            <?php } ?> 
            <tr>
                <td colspan="3">
                    <?php if(isset($_SESSION['username'])){ ?> 
                        <!-- <div style="margin-right:50px; padding-bottom:150px;">
                            <span>
                            <a href="../../customer/view/user_profile.php">
                            	<img src="../../common/images/us.png"/>
                             	<?php /*?><?php echo ''.$_SESSION['username'];?><?php */?>
                                </a> ,
                             </span>
                             <span id="logout_link">
                             	<a style="display: inline; font-size: small;" href="../controller/logout.php">Logout</a> 
                                </span>
                         </div>-->
						
                        	<div align="center" style="font-size: 11pt; " ><p style="color:#000089">You've been registered successfully! Please check your email to activate your account.</p></div>
                            
<!--<div id="nav" style="margin-right: 100px; padding-bottom: 150px; color: #275C0D;">

        <ul>
            <li><a href="../../customer/view/user_profile.php"><?php echo ''.$_SESSION['username'];?></a>
                <ul>
                    <li><a href="../../customer/view/user_profile.php">My Profile</a></li>
                    <li><a href="../../property/view/add_property.php">Add Property</a></li>
                    <li><a href="../../property/view/search_property.php">Search Property</a></li>
                    <li><a href="../controller/logout.php">Logout</a></li>			
                </ul>
            </li>
        </ul>
 
<br class="clearboth"/>
<span style="color: #275C0D"></span>
                  </div>-->
                  <?php } ?> 
                </td>
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
	  <li><a href='#'><span>Buying</span></a></li>
	  <li><a href='#'><span>Selling</span></a></li>
	  <li><a href="../../property/view/search_property.php"><span>Search property</span></a></li>
	  <li><a href='#'><span>My profile</span></a></li>
	  <li><a href='#'><span>Review</span></a></li>
	  <li class='last'><a href='#'><span>Contact us</span></a></li>
  </ul>
</div>

<div class="content">
<input type="submit" name="submit" value="Manage Users" class="myButton"/><br/>
<input type="submit" name="submit" value="Manage Property" class="myButton"/><br/>
<input type="submit" name="submit" value="Generate Reports" class="myButton"/><br/>
<input type="submit" name="submit" value="Feedback" class="myButton"/><br/>
<input type="submit" name="submit" value="Manage Users" class="myButton"/><br/>
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
<p id="copyright" >
	Copyright © 2014 Greenvalley.lk All rights reserved.
</p>
</div>

</body>
</html>
