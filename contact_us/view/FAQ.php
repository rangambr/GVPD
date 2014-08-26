<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FAQ</title>

<link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
<style type="text/css">
.heading{
	font-size:14px;
	font-weight:bolder;
	color:#FF6E00;
	
	} 
#panel,#flip
{
padding:5px;
text-align:justify;
background-color:#e5eecc;
border:solid 1px #c3c3c3;
}
#panel
{
padding:50px;
display:none;
}

</style>

<script src="../../common/JS/jquery-1.7.2.min.js"></script>
<script> 
$(document).ready(function(){
  $(".flip").click(function(){
    $(".panel").slideToggle("slow");
  });
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
                <li><a href='../../forum/create_topic.php'><span>Forum</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='contact_us.php'><span>Contact us</span></a></li>
            </ul>
</div>

<div> 	
    	<div class="flip"><img src="../../common/images/Help-icon.png"/> How can I see the property?</div>
        <div class="panel">Just call us to get an appointment to see the property. If you are residing out of Sri Lanka you may send someone on your behalf to see the property. Please ask him to contact our office to get an appointment. If necessary we will provide you/ him transport to the location and will facilitate for negotiations with the owner of the property.</div>
        
        <div class="flip"><img src="../../common/images/Help-icon.png"/>How can I know about other facilities available in the area?</div>
        <div class="panel">We will provide you all the details of services and facilities available (public and other) in the area. Just give us a call or send a mail.</div>
        
        <div class="flip"><img src="../../common/images/Help-icon.png"/>How can I be satisfied with the price?</div>
        <div class="panel">The best way is to get a Valuation Report by a Licensed Valuation Officer. We will undertake to get you a valuation report. The other way is to check the land prices of the same locality. We maintain a database on the land prices and we will constantly update the database and be published in our website for your information.</div>
       
        <tr id="flip"><td class="heading"><img src="../../common/images/Help-icon.png"/>What are the regulations imposed by the local authorities on new constructions?</td>
        	<td id="panel"><p></p></td></tr>
        
        <tr id="flip"><td class="heading"><img src="../../common/images/Help-icon.png"/>How can I purchase this property while I am away?</td>
        	<td id="panel"><p></p></td></tr>
            
        <tr id="flip"><td class="heading"><img src="../../common/images/Help-icon.png"/>What should I do if I forgot my password?</td></tr>
        <tr><td id="panel"><p>&nbsp;</p></td></tr>
        
        <tr id="flip"><td class="heading"><img src="../../common/images/Help-icon.png"/>I have a property in Sri Lanka. Can I advertise in your website and sell it through your company and how much it will cost me?</td></tr>
        <tr id="panel"><td><p>Yes. It will cost you nothing. What you have to do is to come to an agreement with Kapruka Real Estate on the terms of selling the property. We undertake to visit the property, obtain photographs and prepare a write-up, entering data in our data bank and give the best service to you to sell the property at the highest possible price and at the earliest possible time. Please contact us for further details. </p></td></tr>
        	
    </table>
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