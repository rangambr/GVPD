<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reminder</title>

<link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
<link rel="stylesheet" type="text/css" href="../../customer/view/register.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
<link rel="stylesheet" type="text/css" href="../../common/datepicker/flora.datepick.css">

<script src="../../common/JS/jquery-2.1.1.min.js"></script>
<script src="../../common/datepicker/jquery.plugin.js"></script>
<script src="../../common/datepicker/jquery.datepick.js"></script>

<script>
$(function() {
	$('#Datepicker1').datepick({dateFormat:'yyyy-mm-dd',yearRange:"2014:2020"});
	
});

</script>
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
                <li class='active'><a href='../../home/view/index.php'><span>Home</span></a></li>
                <li><a href='../../home/view/about_us.php'><span>About Us</span></a></li>
                
                <li><a href='add_property.php'><span>Sell your property</span></a></li>
                <li><a href='../../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../forum/create_topic.php'><span>Forum</span></a></li>
                <li><a href='../../reviews/view/display_review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
</div>

<div class="content">
  <form name="reminder.php" method="post" action="../controller/setup_reminder.php">
  
  <table align="center" width="500" style="border:1px groove #93AE13;">
       	 <tr bgcolor="#005825">
       	   <td colspan="2" align="center" bgcolor="#005825"><h1 style="color: #FFFFFF; font-style: normal;">Add an appointment</h1></td>
      </tr>
         <tr>
       	   <td>Select Date :</td>
           <td><input type="text" id="Datepicker1" name="txt_date">
           <span><input type="image" src="../../common/images/icons/calendar-green.gif" ></span></td>
         </tr>
         <tr>
       	   <td>Add Note :</td>
           <td><textarea name="txt_note" rows="5" cols="40" class="inputs"></textarea></td>
         </tr>
         <tr>
       	   <td colspan="2" align="center" valign="middle"><input type="submit" value="Save" class="myButton small_btn" name="save" />
           </td>
      </tr>
       </table>
  </form>
</div>

<div class="footer" id="footer_wrap">
	<ul>
	  <li class='active'><a href='../../customer/view/index.html'><span>Home</span></a></li>
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
