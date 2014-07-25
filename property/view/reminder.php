
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
	<img src="../../common/images/myBanner.png"  style="margin-left:50px"/><span>
    <?php
        require '../../common/kint/Kint.class.php';
           // KINT::dump($_SESSION['username']);
            if(isset($_SESSION['username'])){?>
            <li id="usr_name"><span id="usr_name_cont">Hi <?php echo ''.$_SESSION['username']; }?> ,</span><span id="logout_link"><a style="display:inline;" href="../../home/controller/logout.php">logout</a> </span></li></span>
      <?php /*?> <?php 
           if(!isset($_SESSION['username'])){
            	header("location:../../home/view/index.php");}?><?php */?>
</div>  		

<div class="menu_bar" align="center" id="cssmenu">
	<ul>
	  <li class='active'><a href='../../customer/view/index.html'><span>Home</span></a></li>
	  <li><a href='#'><span>Buying</span></a></li>
	  <li><a href='#'><span>Selling</span></a></li>
	  <li><a href='#'><span>Search property</span></a></li>
	  <li><a href='#'><span>My profile</span></a></li>
	  <li><a href='#'><span>Review</span></a></li>
	  <li class='last'><a href='#'><span>Contact us</span></a></li>
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
