<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

<link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
<link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">

<link rel="stylesheet" type="text/css" href="../../common/datepicker/flora.datepick.css">

<script src="../../common/JS/jquery-2.1.1.min.js"></script>
<script src="../../common/datepicker/jquery.plugin.js"></script>
<script src="../../common/datepicker/jquery.datepick.js"></script>

<script>
$(function() {
	$('#Datepicker1').datepick({dateFormat:'yyyy-mm-dd',yearRange:"1940:2014"});
	
});

</script>

<!--<script type="text/javascript">
 function validate(){
 	$password = document.getElementById("txtpass") ;
 	$confpassword = document.getElementById("txtpass2") ;
  if($password.value != $confpassword.value) {
 alert("Passwords do no match");
 return false;
 }
 	return true;
  }	
</script>-->
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
  <form name="register.php" method="post" action="../controller/register.php">
  <table align="center" width="500" style="border:1px groove #93AE13;">
       	 <tr bgcolor="#005825">
         		<td colspan="2" align="center" bgcolor="#005825"><h1 style="color: #FFFFFF">User Registration</h1></td>
         	</tr>
         		<tr>
					<th align="left">First Name :</th>
					<td><input name="txtfname" type="text" id="txtfname" placeholder="Please type your first  name here" size="20" class="inputs" /></td>
				</tr>
				<tr>
					<th align="left">Last Name :</th>
					<td><input name="txtlname" type="text" id="txtlname" placeholder="Please type your last name here" size="20" class="inputs" /></td>
				</tr>
				<tr>
					<th align="left">Gender :</th>
					<td><input type="radio" name="gender" value="Male" checked/>
					  <span style="color: #275C0D">Male</span> <span style="margin-left: 50px; color: #275C0D;">
				  <input type="radio" name="gender" value="Female"/>Female</span></td>
				</tr>
				<tr>
					<th align="left">House Number/ Name :</th>
					<td><input name="txtaddress1" type="text" class="inputs" id="txtaddress1" placeholder="Please type your home number here" size="20"/></td>
				</tr>
				<tr>
					<th align="left">Street :</th>
					<td><input name="txtaddress2" type="text" class="inputs" id="txtaddress2" placeholder="Please type your street name here" size="20" /></td>
				</tr>
				<tr>
					<th align="left">City :</th>
					<td><input name="txtcity" class="inputs" type="text" id="city" placeholder="Please type your city here" size="20" /></td>
				</tr>
                <tr>
					<th align="left">Province :</th>
					<td><input name="txtprovince" class="inputs" type="text" id="province" placeholder="Please type your province here" size="20" /></td>
				</tr>
				<tr>
					<th align="left">Birthday :</th>
					<td><input type="text" id="Datepicker1" class="inputs" name="txtbday" placeholder="Enter your birthday here" size="20" ></td>
				</tr>
				<tr>
					<th align="left">Email :</th>
					<td><input name="txtemail" type="text" id="txtemail" placeholder="Enter your valid email address here" size="20" class="inputs" /></td>
				</tr>
				<tr>
					<th align="left">Contact Numbers :</th> 
					<td><input name="txttp1" type="text" id="txttp1" placeholder="Enter your mobile number here" size="20" class="inputs"/>
						<br/>
						<input name="txttp2" type="text" id="txttp2" placeholder="Enter your telephone number here" size="20" class="inputs"/></td>
				</tr>
				<tr>
					<th align="left">User name :</th>
					<td><input name="txtusername" type="text" id="username" placeholder="Enter your username" size="20" class="inputs"/></td>
				</tr>
				<tr>
					<th align="left">Password :</th>
					<td><input name="txtpass" type="password" id="txtpass" placeholder="Enter your password" size="20" class="inputs"/></td>
				</tr>
				<tr>
					<th align="left">Confirm Password :</th>
					<td><input name="txtpass2" type="password" id="txtpass2" placeholder="Re-enter your password" size="20" class="inputs" /></td>
				</tr>
             	<tr>
             		<td colspan="2" align="center" valign="middle"><input type="submit" value="Register" class="myButton" name="submit" onclick="validate()" /></td>
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
