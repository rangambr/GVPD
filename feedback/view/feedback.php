<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Feedback</title>

<link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
<style type="text/css">
	td{
	padding: 5px;
	font-style: normal;
	font-weight: bold;
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
                
                <li><a href='../../property/view/add_property.php'><span>Sell your property</span></a></li>
                <li><a href='../../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../reviews/view/display_review.php'p'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
        </div>	

<div class="content">
	<div style="padding:5px;">
    <p style="font-weight: 400; font-size: large; font-style: normal;">We are committed to continuously improving your experience with our website. Please use this form to report any problems you experienced while browsing through our site or to give us your feedback (ideas & comments). If you have any other queries relating to our programmes and courses, please contact us by ringing<span style="color: #000089"> 071 15 119 16</span> or by emailing us at <a href="#">greenvalleypvt@gmail.com</a>. If you would like a response, please provide your email address below and we will endeavour to reply back within 72 hours (this cannot be guaranteed during busier times).</p>
    </div>
  <form name="frm_feedback" method="post" action="../controller/feedback.php">
  <table align="center" width="900" style="border: 1px groove #93AE13; font-style: normal; padding:5px;">
       	 <tr bgcolor="#005825">
         		<td colspan="2" align="center" bgcolor="#005825"><h1 style="color: #FFFFFF; font-style: normal;">Feedback</h1></td>
   	  </tr>
         		<tr>
					<th align="left" colspan="2">Is this the first time you visited our site? </th>
      </tr>
                 <tr><td width="210">&nbsp;</td>
					<td width="678"><input type="radio" id="rbtn_yes" name="rbtn_visit" value="yes" />
					  <span style="color: #275C0D; font-style: normal; font-weight: normal;">Yes it is</span> <span style="margin-left: 50px; color: #275C0D; font-style: normal; font-weight: normal;">
				  <input type="radio" name="rbtn_visit" id="rbtn_no" value="no"/>No I have been before</span></td>
				</tr>
				<tr>
					<th align="left" colspan="2">If you answered 'No' to the above, how often do you visit the website?</th>
      </tr>
                    <tr>
                    	<td>&nbsp;</td>
					<td><span style="color: #275C0D; font-style: normal; font-weight: normal;"><input type="radio" name="rbtn_often" id="rdonce" value=">week"/>More than once a week 
				  <input type="radio" name="rbtn_often" id="rdweek" value="weekly"/>Weekly
                  
				  <input type="radio" name="rbtn_often" id="rdmonth" value="monthly"/>Monthly
                  
				  <input type="radio" name="rbtn_often" id="rdocc" value="occasionally"/>Occasionally</span></td>
				</tr>
                <tr>
                	<td colspan="2"><hr/></td>
                </tr>
                <tr>
                	<td colspan="2">HOW DO YOU RATE THE WEBSITE IN TERMS OF:</td>
                </tr>
                <tr>
                	<th align="left">Ease of use / Accessibility
                	</th>
                	<td>
                      <input type="radio" id="rdexcel" name="rbtn_access" value="1" />
					  <span style="color: #275C0D; font-style: normal;">Excellent</span>
                    
                      <input type="radio" id="rdgd" name="rbtn_access" value="2" />
                      <span style="color: #275C0D; font-style: normal;">Good</span>
                      
                      <input type="radio" id="rdfr" name="rbtn_access" value="3" />
                      <span style="color: #275C0D; font-style: normal;">Fair</span>
                      
                      <input type="radio" id="rdpr" name="rbtn_access" value="4" />
                      <span style="color: #275C0D; font-style: normal;">Poor</span>
                      
                      <input type="radio" id="rdvpr" name="rbtn_access" value="5" />
                      <span style="color: #275C0D; font-style: normal;">Very Poor</span>
                	</td>
                </tr>
				<tr>
					<th align="left">Availability of info</th>
					<td>
                      <input type="radio" id="rdexcel" name="rbtn_avail" value="1" />
					  <span style="color: #275C0D; font-style: normal;">Excellent</span>
                    
                      <input type="radio" id="rdgd" name="rbtn_avail" value="2" />
                      <span style="color: #275C0D; font-style: normal;">Good</span>
                      
                      <input type="radio" id="rdfr" name="rbtn_avail" value="3" />
                      <span style="color: #275C0D; font-style: normal;">Fair</span>
                      
                      <input type="radio" id="rdpr" name="rbtn_avail" value="4" />
                      <span style="color: #275C0D; font-style: normal;">Poor</span>
                      
                      <input type="radio" id="rdvpr" name="rbtn_avail" value="5" />
                      <span style="color: #275C0D; font-style: normal;">Very Poor</span>
                	</td>
				</tr>
				<tr>
					<th align="left">Look & Feel / Visual Appeal</th>
					<td>
                      <input type="radio" id="rdexcel" name="rbtn_visual" value="1" />
					  <span style="color: #275C0D; font-style: normal;">Excellent</span>
                    
                      <input type="radio" id="rdgd" name="rbtn_visual" value="2" />
                      <span style="color: #275C0D; font-style: normal;">Good</span>
                      
                      <input type="radio" id="rdfr" name="rbtn_visual" value="3" />
                      <span style="color: #275C0D; font-style: normal;">Fair</span>
                      
                      <input type="radio" id="rdpr" name="rbtn_visual" value="4" />
                      <span style="color: #275C0D; font-style: normal;">Poor</span>
                      
                      <input type="radio" id="rdvpr" name="rbtn_visual" value="5" />
                      <span style="color: #275C0D; font-style: normal;">Very Poor</span>
                	</td>
				</tr>
				<tr>
					<th align="left">Overall impression</th>
					<td>
                      <input type="radio" id="rdexcel" name="rbtn_impress" value="1" />
					  <span style="color: #275C0D; font-style: normal;">Excellent</span>
                    
                      <input type="radio" id="rdgd" name="rbtn_impress" value="2" />
                      <span style="color: #275C0D; font-style: normal;">Good</span>
                      
                      <input type="radio" id="rdfr" name="rbtn_impress" value="3" />
                      <span style="color: #275C0D; font-style: normal;">Fair</span>
                      
                      <input type="radio" id="rdpr" name="rbtn_impress" value="4" />
                      <span style="color: #275C0D; font-style: normal;">Poor</span>
                      
                      <input type="radio" id="rdvpr" name="rbtn_impress" value="5" />
                      <span style="color: #275C0D; font-style: normal;">Very Poor</span>
                	</td>
				</tr>
                <tr>
                	<td colspan="2"><hr/></td>
                </tr>
                <tr>
					<th align="left">Feedback Topic</th>
					<td><select name="cmb_topic">
                    		<option>--Please Select--</option>
                            <option>Pay a compliment</option>
                            <option>Web site problem or bug</option>
                            <option>Content navigation/ease of use</option>
                            <option>Suggestions</option>
                            <option>Other</option>
                    </select>
                    </td>
				</tr>
				<tr>
					<th align="left">Feedback</th>
					<td><textarea name="txtfdback" cols="55" rows="7"></textarea></td>
				</tr>
                <tr>
                	<td colspan="2"><hr/></td>
                </tr>
				<tr>
					<th align="left">Your name :</th> 
					<td><input name="txtname" type="text" id="txtname"  size="20" class="inputs"/>
					</td>
				</tr>
				<tr>
					<th align="left">Email address :</th>
					<td><input name="txtemail" type="text" id="txtemail"  size="20" class="inputs"/></td>
				</tr>
				
   	  <tr>
             		<td colspan="2" align="center" valign="middle"><input type="submit" value="submit" class="myButton" name="submit"  /></td>
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