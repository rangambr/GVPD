<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>

<link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
<style type="text/css">
.msg-error{
	padding-left:380px;
	}
.side_bar{
	position: absolute;
	background-color: #E7E08E;
	left: 10px;
	bottom: 0px;
	top: 205px;
	width: 300px;
	height: 349px;
	padding: 20px;
	}
</style>
</head>

<body  bgcolor="#EAF3CF">
<div class="header">
        	<table border="0" align="center" width="100%">
            	<tr>
                	<td style="margin-left:30px; padding-left:30px;">
                        <div align="center"><img src="../../common/images/tr_banner.png"/><br/>
                            <span style="color: #3A6839; font-weight: bold; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style: italic; font-size: large;">We Make Your Dream Come True.</span>
                        </div>
           			<td align="center">             
    					<img src="../../common/images/contact.png"/>
    	   			</td>
    			</tr>
    	</table>  		
</div>		

<div class="menu_bar" align="center" id="cssmenu">
            <ul>
                <li class='active'><a href='../../home/view/index.php'><span>Home</span></a></li>
                <li><a href='../../home/view/about_us.php'><span>About Us</span></a></li>
                <li><a href='../../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href='../../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='contact_us.php'><span>Contact us</span></a></li>
            </ul>
        </div>

<div class="side_bar">

  <span style="font-size: small; font-weight: bold;">We welcome and value your feedback about our real estate services. Please visit our <a href="#">FAQs</a> – we may have answered your question already!<br/>
If your question was not addressed in our <a href="#">FAQs</a>!</span> 
<table>
	<tr><td colspan="2"><h2 style="color: #000089;">Please contact us</h2></td></tr>
	<tr><td style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">T<span style="font-style: normal">elephone:</span></td><td style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">0812 490738 / 0777 031403</td></tr>
    <tr><td colspan="2" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><hr/></td></tr>
    <tr><td style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Fax:</td><td style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">0812 490738</td></tr>
    <tr><td colspan="2" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><hr/></td></tr>
    <tr><td style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Email:</td><td style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">greenvalley@gmail.com</td></tr>
    <tr><td colspan="2" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><hr/></td></tr>
    <tr><td style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Office Address:</td><td style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Third floor,<br/>
    Silverdale Complex,<br/>Yatinuwara Veediya,<br/>Kandy. OR<br/>No:77, Doranegama Road, Medawala(H:P).</td></tr>
</table>
</div>
<div class="content">
<?php 
	if(!empty($_REQUEST['er'])){
  		$error_code = $_REQUEST['er'];
  			if($error_code == "4"){ ?>
	  			<div class="msg msg-error">
                <table width="60%">
                	<tr>
                    	<td><img src="../../common/images/icons/success.gif" /></td>
                        <td><strong style="color: #34AB0A">Inquiry saved successfully! We'll reply you as soon as possible!  </strong></td>
                    </tr>
                </table>
  				</div><?php 
				}
	}?>
  <form name="frm_contact_us" method="post" action="../controller/contact.php" onsubmit="return validate();">
  <table align="center" width="500" style="border:1px groove #93AE13;">
       	<tr bgcolor="#005825">
         		<td colspan="2" align="center" bgcolor="#005825"><h1 style="color: #FFFFFF">Send us an inquiry</h1></td>
        </tr>
		<tr>
			<th align="left">Title :</th>
			<td><select name="cmb_title">
					<option>Mr</option>
					<option>Mrs</option>
					<option>Miss</option>
					<option>Rev</option>
				</select>
			</td>
		</tr>	
        <tr>
			<th align="left">Your name :</th>
			<td><input name="txtname" type="text" id="txtname" placeholder="Please type your name here" size="20" class="inputs" /></td>
		</tr>
		<tr>
			<th align="left">Your email :</th>
			<td><input name="txtemail" type="text" id="txtemail" placeholder="Please type your email here" size="20" class="inputs" /></td>
		</tr>
		<tr>
			<th align="left">Telephone number :</th>
			<td><input name="txttp" type="text" class="inputs" id="txttp" placeholder="Please type your telephone number here" size="20"/></td>
		</tr>
		<tr>
			<th align="left">Subject :</th>
			<td><input name="txtsub" type="text" class="inputs" id="txtsub" placeholder="Please type your subject here" size="20" /></td>
		</tr>
		<tr>
			<th align="left">Message :</th>
			<td><textarea name="txtmsg" row="10" cols="30" class="inputs" placeholder="Please write your message here"></textarea></td>
		</tr>
        <tr>
            <td colspan="2" align="center" valign="middle"><input type="submit" value="send" class="myButton" name="submit"  /></td>
        </tr>
    </table>
  </form>
</div>

<div class="footer" id="footer_wrap">
	<ul>
	  <li class='active'><a href='../../home/view/index.php'><span>Home</span></a></li>
                <li><a href='../../home/view/about_us.php'><span>About Us</span></a></li>
                <li><a href='../../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href='../../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='contact_us.php'><span>Contact us</span></a></li>
	</ul>
<p id="copyright" >
	Copyright © 2014 Greenvalley.lk All rights reserved.
</p>
</div>


</body>
</html>