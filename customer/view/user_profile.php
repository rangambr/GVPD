<?php
session_start();
require_once '../controller/update_profile.php';
require '../../common/kint/Kint.class.php';

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

<link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
<link rel="stylesheet" type="text/css" href="register.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">

<link href="../../common/jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="../../common/jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
.sidebar {
	position: absolute;
	left: 80px;
	top: 579px;
	bottom: 0;
	width: 282px;
	height: 480px;
	padding: 5px 5px 5px 25px;
}
#Tabs1{
    width: 800px;
    margin-left: 280px;
    margin-right: auto;
    margin-top: 5px;
	background-color:#FFFFFF;
}
#Tabs1 li{
	font-size:14px ;color:#275C0D;
	font-family:Helvatica;
	font-weight:bold;
	
	}	
</style>
<link href="../../jQueryAssets/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
<script src="../../jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="../../jQueryAssets/jquery-ui-1.9.2.tabs.custom.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(function() {
    $( "#Tabs1" ).tabs();
  });
</script>
</head>

<body  bgcolor="#EAF3CF">
<div class="header">
	<table width="100%" border="0">
  <tr>
    <td height="217" style="margin-left:30px; padding-left:30px;">
        <img src="../../common/images/tr_banner.png"/>
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
                        <td width="55" style="font-style: normal; font-weight: bold; color: #0F2701;"><span style="font-weight: bolder">Username</span>:</td>
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
						
                        <div id="nav" style="margin-right:100px; padding-bottom:150px;">
<ul>
    <li><a href="../../customer/view/user_profile.php"><?php echo ''.$_SESSION['username'];?></a>
        <ul>
        	<li><a href="../../customer/view/user_profile.php">My Profile</a></li>
            <li><a href="../../property/view/add_property.php">Add Property</a></li>
            <li><a href="../../property/view/search_property.php">Search Property</a></li>
            <li><a href="#">Logout</a></li>			
        </ul>
    </li>
</ul>
 
<br class="clearboth"/>
 
</div>
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
	  <li class='active'><a href='index.html'><span>Home</span></a></li>
	  <li><a href='#'><span>Buying</span></a></li>
	  <li><a href='#'><span>Selling</span></a></li>
	  <li><a href='#'><span>Search property</span></a></li>
	  <li><a href='#'><span>My profile</span></a></li>
	  <li><a href='#'><span>Review</span></a></li>
	  <li class='last'><a href='#'><span>Contact us</span></a></li>
  </ul>
</div>
<div class="content">
  <div align="left" class="sidebar">
 	<h2>Hi Xxxxxx !</h2>
    	<ul>
            <li><a href="">Update your profile</a></li>
            <li><a href="">Manage username and password</a></li>
            
    	</ul>
    </div>

  <div id="Tabs1">
	  <ul>
	    <li><a href="#tabs-1">My Profile</a></li>
	    <li><a href="#tabs-2">Change password</a></li>
	    <li><a href="#tabs-3">Saved Properties</a></li>
    </ul>
	  <div id="tabs-1">
	    
		<form name="update_profile.php" method="post" action="../controller/update_profile.php">
  <table align="center" width="500" style="border:1px groove #93AE13;">
       	 <tr height="33px">
         		<td align="center"><img src="../../common/images/icons/user_yellow_edit.png"/></td>
                <td><p align="left" style="font-weight: bold; font-style: normal; font-size: 16px; color: #275C0D;">Something Changed? &nbsp;&nbsp; Edit your profile.</p>
            	</td>
       	  </tr>
          <tr>
          		<td colspan="2"><hr /></td>
          </tr>
         		<tr>
					<th align="left">First Name :</th>
					<td><input name="txtfname" type="text" id="txtfname" placeholder="Change your first  name here" size="20" class="inputs" value="<?php  Kint:: dump($fname); ?>" /></td>
				</tr>
				<tr>
					<th align="left">Last Name :</th>
					<td><input name="txtlname" type="text" id="txtlname" placeholder="Change your last name here" size="20" class="inputs" /></td>
				</tr>
				<tr>
					<th align="left">Gender :</th>
					<td><input type="radio" name="gender" value="Male" checked/>
					  <span style="color: #275C0D">Male</span> <span style="margin-left: 50px; color: #275C0D;">
				  <input type="radio" name="gender" value="Female"/>Female</span></td>
				</tr>
				<tr>
					<th align="left">House Number/ Name :</th>
					<td><input name="txtaddress1" class="inputs" id="txtaddress1" placeholder="Change your home number here" size="20"/></td>
				</tr>
				<tr>
					<th align="left">Street :</th>
					<td><input name="txtaddress2" class="inputs" id="txtaddress2" placeholder="Change your street name here" size="20" /></td>
				</tr>
				<tr>
					<th align="left">City :</th>
					<td><input name="city" class="inputs" id="city2" placeholder="Change your city here" size="20" /></td>
				</tr>
				<tr>
					<th align="left">Birthday :</th>
					<td><input type="text" id="Datepicker1" class="inputs" name="txtbday" placeholder="Change your birthday here" size="20" ></td>
				</tr>
				<tr>
					<th align="left">Email :</th>
					<td><input name="txtemail" type="text" id="txtemail" placeholder="Change your email address here" size="20" class="inputs" /></td>
				</tr>
				<tr>
					<th align="left">Contact Numbers :</th> 
					<td><input name="txttp1" type="text" id="txttp1" placeholder="Change your mobile number here" size="20" class="inputs"/>
						<br/>
						<input name="txttp2" type="text" id="txttp2" placeholder="Change your telephone number here" size="20" class="inputs"/></td>
				</tr>
             	<tr>
             		<td colspan="2" align="center" valign="middle"><input type="submit" value="Update" class="myButton" name="submit" /></td>
             </tr>
       </table>
  </form>
        
    </div>
	  <div id="tabs-2">
	    
       	<form name="update_profile.php" method="post" action="">
  <table align="center" width="500" style="border:1px groove #93AE13;">
       	 <tr height="33px">
         		<td align="center"><img src="../../common/images/icons/user_yellow_edit.png"/></td>
                <td><p align="left" style="font-weight: bold; font-style: normal; font-size: 16px; color: #275C0D;"> Edit your username and password.</p>
            	</td>
       	  </tr>
          <tr>
          		<td colspan="2"><hr /></td>
          </tr>
				<tr>
					<th align="left">User name :</th>
					<td><input name="txtusername" type="text" id="username" placeholder="Enter your username" size="20" class="inputs"/></td>
				</tr>
                <tr>
					<th align="left">Password :</th>
					<td><input name="txtusername" type="text" id="username" placeholder="Enter your username" size="20" class="inputs"/></td>
				</tr>
             	<tr>
                <tr>
					<th align="left">Re type your password :</th>
					<td><input name="txtusername" type="text" id="username" placeholder="Enter your username" size="20" class="inputs"/></td>
				</tr>
             	<tr>
             		<td colspan="2" align="center" valign="middle"><input type="submit" value="Change" class="myButton" name="submit" /></td>
             </tr>
       </table>
  </form>
        
    </div>
	  <div id="tabs-3">
	    <p>Content 3</p>
    </div>
  </div>
<!-- <form name="register.php" method="post" action="../controller/register.php">
    <table align="center" width="500" style="border:1px groove #93AE13;">
      <tr bgcolor="#005825">
        <td colspan="2" align="center" bgcolor="#005825"><h1 style="color: #FFFFFF">My Profile</h1></td>
      </tr>
      <tr>
        <th align="left">First Name :</th>
        <td><input name="txtfname" type="text" id="txtfname" placeholder="Please type your first  name here" size="20" class="inputs" /></td>
      </tr>
      <tr>
        <th align="left">Last Name :</th>
        <td><input name="txtlname" type="text" id="txtlname" placeholder="Please type your last name here" size="20" class="inputs" /></td>
      </tr>
      <tr>
        <th align="left">Gender :</th>
        <td><input type="radio" name="gender" value="Male" checked/>
          <span style="color: #275C0D">Male</span> <span style="margin-left: 50px; color: #275C0D;">
            <input type="radio" name="gender" value="Female"/>
            Female</span></td>
      </tr>
      <tr>
        <th align="left">House Number/ Name :</th>
        <td><input name="txtaddress1" class="inputs" id="txtaddress1" placeholder="Please type your home number here" size="20"/></td>
      </tr>
      <tr>
        <th align="left">Street :</th>
        <td><input name="txtaddress2" class="inputs" id="txtaddress2" placeholder="Please type your street name here" size="20" /></td>
      </tr>
      <tr>
        <th align="left">City :</th>
        <td><input name="city" class="inputs" id="city2" placeholder="Please type your city here" size="20" /></td>
      </tr>
      <tr>
        <th align="left">Birthday :</th>
        <td><input type="text" id="Datepicker1" class="inputs" name="txtbday" placeholder="Enter your birthday here" size="20" ></td>
      </tr>
      <tr>
        <th align="left">Email :</th>
        <td><input name="txtemail" type="text" id="txtemail" placeholder="Enter your valid email address here" size="20" class="inputs" /></td>
      </tr>
      <tr>
        <th align="left">Contact Numbers :</th>
        <td><input name="txttp1" type="text" id="txttp1" placeholder="Enter your mobile number here" size="20" class="inputs"/>
          <br/>
          <input name="txttp2" type="text" id="txttp2" placeholder="Enter your telephone number here" size="20" class="inputs"/></td>
      </tr>
      <tr>
        <th align="left">User name :</th>
        <td><input name="txtusername" type="text" id="username" placeholder="Enter your username" size="20" class="inputs"/></td>
      </tr>
      <tr>
        <th align="left">Password :</th>
        <td><input name="txtpass" type="password" id="txtpass" placeholder="Enter your password" size="20" class="inputs"/></td>
      </tr>
      <tr>
        <th align="left">Confirm Password :</th>
        <td><input name="txtpass2" type="password" id="txtpass2" placeholder="Re-enter your password" size="20" class="inputs" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle"><input type="submit" value="Register" class="myButton" name="submit" onClick="validate()" /></td>
      </tr>
    </table>
  </form>-->
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
<script type="text/javascript">
$(function() {
	$( "#Datepicker2" ).datepicker(); 
});
$(function() {
	$( "#Tabs1" ).tabs(); 
});
</script>
</body>
</html>
