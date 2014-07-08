<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Rate Property</title>

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
	<img src="../../common/images/myBanner.png"  style="margin-left:50px"/><span>
    <img src="../../common/images/contact.png" style="margin-left:140px"/></span> </div>  		

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
  <form name="frm_rate" method="post" action="../controller/review.php" >
  <table align="center" width="500" style="border:1px groove #93AE13;">
       	 <tr bgcolor="#005825">
         		<td colspan="2" align="center" bgcolor="#005825"><h1 style="color: #FFFFFF">Rate your favourite properties...</h1></td>
         </tr>
         		<tr>
					<th align="left">Description :</th>
					<td>
                    	<textarea name="txt_desc" rows="5" class="inputs" placeholder="Type here"></textarea>
                    </td>
				</tr>
				<tr>
					<th align="left">Rating  :</th>
					<td>
                    	<select name="cmb_rate">
                    		<option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
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