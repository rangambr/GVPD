<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Topic</title>

<link rel="stylesheet" type="text/css" href="../common/CSS/home.css">
<link rel="stylesheet" type="text/css" href="../common/CSS/menu_bar.css">

<script type="text/javascript">
	function validate(){
		var x=document.forms["form1"]["topic"].value
		if (x==null || x==""){
  			alert("Please enter a topic.");
  			return false;
  		}
		var x=document.forms["form1"]["detail"].value
		if (x==null || x==""){
  			alert("Please enter a description.");
  			return false;
  		}
		var x=document.forms["form1"]["name"].value
		if (x==null || x==""){
  			alert("Please enter your name.");
  			return false;
  		}
		var x=document.forms["form1"]["email"].value
		if (x==null || x==""){
  			alert("Please enter your email.");
  			return false;
  		}
		var x=document.forms["form1"]["email"].value
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
  			alert("Not a valid e-mail address");
  			return false;
  		}
	}
</script>
</head>

<body  bgcolor="#EAF3CF">
<div class="header">
        	<table border="0" align="center" width="100%">
            	<tr>
                	<td style="margin-left:30px; padding-left:30px;">
                        <div align="center"><img src="../common/images/tr_banner.png"/><br/>
                            <span style="color: #3A6839; font-weight: bold; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style: italic; font-size: large;">We Make Your Dream Come True.</span>
                        </div>
           			<td align="center">             
    					<img src="../common/images/contact.png"/>
    	   			</td>
    			</tr>
    	</table>  		
</div>		

        <div class="menu_bar" align="center" id="cssmenu">
            <ul>
                <li class='active'><a href='../home/view/index.php'><span>Home</span></a></li>
                <li><a href='../home/view/about_us.php'><span>About Us</span></a></li>
                <li><a href='../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href='../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='main_forum.php'><span>Forum</span></a></li>
                <li><a href='../reviews/view/display_review.php'><span>Review</span></a></li>
                <li class='last'><a href='../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
        </div>

<div class="content">
	<?php if(isset($_SESSION['username']) && $_SESSION['active'] == 1) {{
            
        } ?>
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#EAF3CF" style="border:1px groove #93AE13;">
        <tr>
            <form id="form1" name="form1" method="post" action="add_topic.php" onSubmit="return validate();">
            <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                <tr>
                    <td colspan="3" bgcolor="#275C0D"><strong style="color: #FFFFFF">Create New Topic</strong> </td>
                </tr>
                <tr>
                    <td width="14%"><strong>Topic</strong></td>
                    <td width="2%">:</td>
                    <td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
                </tr>
                <tr>
                    <td valign="top"><strong>Detail</strong></td>
                    <td valign="top">:</td>
                    <td><textarea name="detail" cols="39" rows="3" id="detail"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Name</strong></td>
                    <td>:</td>
                    <td><input name="name" type="text" id="name" size="50" /></td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>:</td>
                    <td><input name="email" type="text" id="email" size="50" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
                </tr>
                </table>
            </td>
            </form>
        </tr>
    </table>
    <?php }
            else{
        ?>
            Please login!  If haven't registered with us yet, click <a href="../customer/view/register.php"> here </a> to get Registered.
            
          <?php 
            }
        ?>  
</div>
<div class="footer" id="footer_wrap">
	<ul>
	 <li class='active'><a href='../home/view/index.php'><span>Home</span></a></li>
                <li><a href='../home/view/about_us.php'><span>About Us</span></a></li>
                <li><a href='../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href='../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
	</ul>
<p id="copyright" >
	Copyright © 2014 Greenvalley.lk All rights reserved.
</p>
</div>
</body>
</html>