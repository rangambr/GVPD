<?php session_start(); 
 require '../../home/model/user.php';
?>
 
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Activation</title>
    
    <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
    <link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
    <style type="text/css">
    	.content{
			padding-top:50px;
			}
		#footer_wrap{
			position:absolute;
			}
    </style>
<body  bgcolor="#EAF3CF">

<div class="header">

<table width="100%" border="0">
  <tr>
    <td style="margin-left:30px; padding-left:30px;">
        <div align="center"><img src="../../common/images/tr_banner.png"/><br/>
          <span style="color: #275C0D; font-weight: bold; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style: italic; font-size: large;">We Make Your Dream Come True.</span>
        </div>
        
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
                <li><a href='../../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
   </ul>
</div>

    <div class="content">
        <?php
            if(!empty($_REQUEST['username']) && !empty($_REQUEST['ecode'])){
                $usr = $_REQUEST['username'];
                $ecode = $_REQUEST['ecode'];
                if($usr != null && $ecode != null){
                    $_SESSION['username'] = $usr;
                    $_SESSION['active'] = 1;
                    $u = new User();
                    $u->activateUser($usr,1);
                    echo 'You have successfully activated your account. <br/>';
                    echo 'Please click <a href="../view/index.php">here</a> to return to Home page.';
                }
            }
        ?>
        
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
