<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search Property</title>

<link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/login_tbl.css">

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
                <li><a href='advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='add_property.php'><span>Selling</span></a></li>
                <li><a href='../../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../forum/create_topic.php'><span>Forum</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
        </div>

<div class="content">
<form>
  <table align="center" width="427" cellpadding="2" style="border:1px groove #93AE13;" id="tbl" >
    <tr bgcolor="#005825">
      <td height="43" colspan="2" align="center"><h1 style="color: #FFFFFF">Search Property</h1></td>
    </tr>
      <tr> 
        <th width="139" align="left" style="color: #0F2701"> City : </th>
        <td width="272"><select >
          <option>Kandy</option>
          <option>Kurunegala</option>
          <option>Kegalle</option>
          <option>Mathale</option>
          <option>Nuwara Eliya</option>
          </select>
        </td>
      </tr>
    <tr>
      <th align="left" style="color: #0F2701"> Property Type : </th>
      <td><label for="property_type">
        <select>
                  	<option>All</option>
                    <option>Lots & Lands</option>
                    <option>Estate & Plantation</option>
                    <option>Commercial</option>
                    <option>Rentals</option>
                    <option>Residential</option>
                  </select>
      </label></td>
    </tr>
    <tr>
      <th align="left">Price Range :</th>
      <td><select class="len">
                  	<option>Min</option>
                    <option>28,000</option>
                    <option>38,000</option>
                    <option>65,000</option>
                    <option>100,000</option>
                    <option>150,000</option>
                    <option>250,000</option>
                  </select></label>
                  
                  <select class="len">
                  	<option>Max</option>
                    <option>38,000</option>
                    <option>65,000</option>
                    <option>100,000</option>
                    <option>150,000</option>
                    <option>1,000,000</option>
          </select>
      </td>
    </tr>
    <tr>
      <th align="left">Bed rooms:</th>
      <td><select class="len">
                  	<option>Any</option>
                    <option>1+</option>
                    <option>2+</option>
                    <option>3+</option>
                    <option>4+</option>
                    <option>5+</option>
          </select></td>
    </tr>
    <tr>
      <th align="left">Bathrooms:</th>
      <td><select class="len">
                  	<option>Any</option>
                    <option>1+</option>
                    <option>2+</option>
                    <option>3+</option>
                    <option>4+</option>
                    <option>5+</option>
          </select></td>
    </tr>
    <tr>
      <th align="left">SQFT/Acres :</th>
      <td>
        <input name="" class="inputs" id="" />
     </td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle"><input type="submit" value="Search Property" class="myButton" name="submit" /></td>
      
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