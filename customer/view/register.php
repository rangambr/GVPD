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

function validate(){
    if($("#txtfname").val() == ''){
        alert('Please enter your first name.');
        $("#txtfname").focus();
        return false;
        }
        if($("#txtlname").val() == ''){
            alert('Please enter your last name.');
            $("#txtlname").focus();
            return false;
        }
        if($("#gender_male").val() == '' && $("#gender_female").val() == ''){
            alert('Please enter your gender.');
            $("#gender").focus();
            return false;
        }
        if($("#txtaddress1").val() == ''){
            alert('Please enter your house number.');
            $("#txtaddress1").focus();
            return false;
        }
        if($("#txtaddress2").val() == ''){
            alert('Please enter your address  .');
            $("#txtaddress2").focus();
            return false;
        }
         if($("#Datepicker1").val() == ''){
            alert('Please select your birthday.');
            $("#Datepicker1").focus();
            return false;
        }
        if($("#txtemail").val() == ''){
            alert('Please enter your email address.');
            $("#txtemail").focus();
            return false;
        }
        if(! validateEmail($("#txtemail").val())){
            alert('Please enter a valid email address.');
            return false;
        }
        if($("#txttp1").val() == ''){
            alert('Please your contact number.');
            $("#txttp1").focus();
            return false;
        }
        if($("#username").val() == ''){
            alert('Please enter an username.');
            $("#username").focus();
            return false;
        }
        if($("#txtpass").val() == ''){
            alert('Please pick a password.');
            $("#txtpass").focus();
            return false;
        }
        if($("#txtpass2").val() == ''){
            alert('Please enter matching password.');
            $("#txtpass2").focus();
            return false;
        }
        if(! validatePasswords()){
            return false;
        }
        
    }
    
    function validateEmail(email) { 
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    
	/*function validateConNo(TP){
		if($("#txttp1").val().length>10 && $("#txttp1").val().length<10 )
			alert("Your contact number must contain 10 numbers");
              $("#txttp1").focus();
              return false;
		}*/
    function validatePasswords(){
         //if($("#txtpass").val() != "" && $("#txtpass").val() == $("#txtpass2").val()) {
            if($("#txtpass").val().length < 6) {
              alert("Error: Password must contain at least six characters!");
              $("#txtpass1").focus();
              return false;
            }
            if($("#txtpass").val() === $("#username").val()) {
              alert("Error: Password must be different from Username!");
              $("#txtpass1").focus();
              return false;
            }
            re = /[0-9]/;
            if(!re.test($("#txtpass").val())) {
              alert("Error: password must contain at least one number (0-9)!");
              $("#txtpass1").focus();
              return false;
            }
            re = /[a-z]/;
            if(!re.test($("#txtpass").val())) {
              alert("Error: password must contain at least one lowercase letter (a-z)!");
              $("#txtpass1").focus();
              return false;
            }
            re = /[A-Z]/;
            if(!re.test($("#txtpass").val())) {
              alert("Error: password must contain at least one uppercase letter (A-Z)!");
              $("#txtpass1").focus();
              return false;
            }
            return true;
          } //else {
            //alert("Error: Please check that you've entered and confirmed your password!");
            //$("#txtpass1").focus();
            //return false;
         // }
          
      
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
                <li><a href='../../reviews/view/display_review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
           </ul>
</div>

<div class="content">
  <form name="register" method="post" action="../controller/register.php" onsubmit="return validate();">
  <table align="center" width="500" style="border: 1px groove #93AE13; font-style: normal;">
       	 <tr bgcolor="#005825">
         		<td colspan="2" align="center" bgcolor="#005825"><h1 style="color: #FFFFFF; font-style: normal;">Customer Registration</h1></td>
         	</tr>
         		<tr>
					<th align="left">First Name :</th>
					<td><input name="txtfname" type="text" id="txtfname" size="20" class="inputs" /></td>
				</tr>
				<tr>
					<th align="left">Last Name :</th>
					<td><input name="txtlname" type="text" id="txtlname"  size="20" class="inputs" /></td>
				</tr>
				<tr>
					<th align="left">Gender :</th>
                                        <td><input type="radio" id="gender_male" name="gender" value="Male" />
					  <span style="color: #0F2701; font-style: normal; font-size: 10px;">Male</span> <span style="margin-left: 50px; color: #0F2701; font-style: normal; font-size: 10px;">
				  <input type="radio" name="gender" id="gender_female" value="Female"/>Female</span> </td>
				</tr>
				<tr>
					<th align="left">House Number/ Name :</th>
					<td><input name="txtaddress1" type="text" class="inputs" id="txtaddress1" size="20"/></td>
				</tr>
				<tr>
					<th align="left">Street :</th>
					<td><input name="txtaddress2" type="text" class="inputs" id="txtaddress2" size="20" /></td>
				</tr>
				<tr>
					<th align="left">City :</th>
					<td><input name="txtcity" class="inputs" type="text" id="city" size="20" /></td>
				</tr>
                <tr>
					<th align="left">Province :</th>
					<td><select name="txtprovince" class="drpdown_list">
                            <option></option>
                            <option>Central Province </option>
                            <option>Eastern Province</option>
                            <option>Northern Province</option>
                            <option>Southern Province</option>
                            <option>Western Province</option>
                            <option>North Western Province</option>
                             <option>North Central Province</option>
                            <option>Uva Province</option>
                            <option>Sabaragamuwa Province</option>
                        </select>
                    </td>
				</tr>
				<tr>
					<th align="left">Birthday :</th>
					<td><input type="text" id="Datepicker1" class="inputs" name="txtbday" size="20" readonly /></td>
				</tr>
				<tr>
					<th align="left">Email :</th>
					<td><input name="txtemail" type="text" id="txtemail" size="20" class="inputs" /></td>
				</tr>
				<tr>
					<th align="left">Contact Numbers :</th> 
					<td><input name="txttp1" type="text" id="txttp1" size="20" class="inputs"/>
						<br/>
						<input name="txttp2" type="text" id="txttp2" size="20" class="inputs"/></td>
				</tr>
				<tr>
					<th align="left">User name :</th>
					<td><input name="txtusername" type="text" id="username" size="20" class="inputs"/></td>
				</tr>
				<tr>
					<th align="left">Password :</th>
					<td><input name="txtpass" type="password" id="txtpass"  size="20" class="inputs"/></td>
				</tr>
				<tr>
					<th align="left">Confirm Password :</th>
					<td><input name="txtpass2" type="password" id="txtpass2"  size="20" class="inputs" /></td>
				</tr>
             	<tr>
             		<td colspan="2" align="center" valign="middle"><input type="submit" value="Register" class="myButton" name="submit"  /></td>
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
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
	</ul>
<p id="copyright" >
	Copyright © 2014 Greenvalley.lk All rights reserved.
</p>
</div>


</body>
</html>