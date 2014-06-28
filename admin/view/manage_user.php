<?php session_start(); ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>HOME</title>
    
    <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
	<link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
	<link rel="stylesheet" type="text/css" href="../../common/CSS/login_tbl.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">
    <style type="text/css">
    	.left_box{
			float:left;
			width:190px;
			height:380px;
			}
		.left_box ul{
			list-style-type:none;
			margin:0;
			padding:0;
			}
		.right_box{
			float:right;
			}	
    </style>
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

	<h1 style="color: #000089">User Management</h1>
    
	<div class="left_box">
    	<ul>
        	<li><a href="add_user_old.php">Create new user</a></li>
            <li><a href="#">Update user</a></li>
            <li><a href="#">Search user</a></li>
            <li><a href="#">Delete user</a></li>
        </ul>
    </div>
    
    <div class="right_box">
    
    </div>
    
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
