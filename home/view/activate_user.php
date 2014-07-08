<?php session_start(); 
 require '../../home/model/user.php';
?>
 
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>HOME</title>
    
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
