<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>News</title>

<link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
<style type="text/css">
	#footer_wrap{
		position:fixed;
		bottom:0;
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
                <li><a href='review.php'p'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
        </div>

<div class="content">
  <form name="frm_rate" method="post" action="../controller/review.php" >
  <table align="center" width="555" style="border:1px groove #93AE13;">
       	 <tr bgcolor="#005825">
         		<td height="35" colspan="2" align="center" bgcolor="#005825"><h2 style="color: #FFFFFF">Add News</h2></td>
      	</tr>
        <tr>
			<th width="129" align="left">Date added :</th>
			<td width="414">&nbsp;</td>
		</tr>		
        <tr>
		  <th align="left">Description :</th>
			<td style="padding-top:10px;">
               <textarea name="txt_desc" rows="7" cols="150" class="inputs" placeholder="Type here"></textarea>
            </td>
		</tr>
				
        <tr>
           <td colspan="2" align="center" valign="middle">
              <input type="submit" value="save" class="myButton small_btn" name="submit"  />
           </td>
        </tr>
    </table>
  </form>
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


</body>
</html>