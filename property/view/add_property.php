<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add Property</title>

		<link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/login_tbl.css">
		<link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">
                <style>
                    .ct_table th{
                        width: 33%;
                    }
                    
                </style> 
	<script>
    	function validateForm(){
			var x=document.forms["frm_add"]["property_name"].value
			if (x==null || x==""){
  				alert("Please enter property name.");
  				return false;
 			 }
			 var x=document.forms["frm_add"]["address1"].value
			 if (x==null || x==""){
  				alert("Please enter the address of the property.");
  				return false;
 			 }
			 var x=document.forms["frm_add"]["address2"].value
			 if (x==null || x==""){
  				alert("Please enter the address of the property.");
  				return false;
 			 }
			 var x=document.forms["frm_add"]["city"].value
			 if (x==null || x==""){
  				alert("Please enter the city.");
  				return false;
 			 }
			 var x=document.forms["frm_add"]["province"].value
			 if (x==null || x==""){
  				alert("Please select the province.");
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
                        <div align="center"><img src="../../common/images/tr_banner.png"/><br/>
                            <span style="color: #3A6839; font-weight: bold; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style: italic; font-size: large;">We Make Your Dream Come True.</span>
                        </div>
					</td>
                    <td align="center">
               			<table class="login_tbl">
                 			<tr>
                    			<td class="user_lgn_msg">
								  <?php if (isset($_SESSION['username']) && $_SESSION['active'] == 1) { ?> 
                                  <?php echo 'Hi, <a href="../../customer/view/display_profile.php">' . $_SESSION['username'] . '</a> '; ?>
                                      <span style="font-style: normal">
                                          <a style="display: inline; font-size: small;" href="../../home/controller/logout.php">Logout</a>
                                     </span>      
                        		<?php } ?>
                    		  </td>
               				</tr>
             			</table>
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
                <li><a href='../../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
        </div>

        <div class="content">
        <?php if(isset($_SESSION['username']) && $_SESSION['active'] == 1) {{
            
        } ?>    
        <form name="frm_add" method="post" onsubmit="return validateForm();" action="../controller/add_property.php" enctype="multipart/form-data" >
            <table class="ct_table" align="center" width="500" style="border:1px groove #93AE13;" >
            <tr bgcolor="#005825">
              <td colspan="2" align="center"><h1 style="color: #FFFFFF; font-style: normal;">Add Property</h1></td>
            </tr>
            
            <tr>
              <th align="left"> Property Name : </th>
              <td><label for="property_name">
                <input name="property_name" type="text" id="property_name" placeholder="Please type property name here" size="45" class="inputs" />
              </label></td>
            </tr>
            <tr>
              <th align="left">Address Line 1 :</th>
              <td><label for="address1">
                <input name="address1" class="inputs" id="txtaddress1" placeholder="Please type address here" size="45" cols="47" rows="5"/>
              </label></td>
            </tr>
            <tr>
              <th align="left">Address Line 2 :</th>
              <td><label for="address2">
                <input name="address2" class="inputs" id="address2" placeholder="Please type address here" size="45" cols="47" rows="5"/>
              </label></td>
            </tr>
            <tr>
              <th align="left">City :</th>
              <td><label for="city">
                <input name="city" class="inputs" id="city" placeholder="Please type city here" size="45" cols="47" rows="5"/>
              </label></td>
            </tr>
            <tr>
              <th align="left">Province :</th>
              <td><label for="province">
              	<select name="province" class="drpdown_list">
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
              </label></td>
            </tr>
            <tr>
              <th align="left">Extent(no. of perches/acres) :</th>
              <td><label for="extent">
                <input name="extent" type="text" id="extent" placeholder="Enter extent here" size="45" class="inputs"/>
              </label></td>
            </tr>
            <tr>
              <th align="left"> Price/Unit price :</th>
              <td><label for="unit_price">
                <input name="unit_price" type="text" id="unit_price" placeholder="Enter price per perch here" size="45" class="inputs"/>
              </label></td>
            </tr>
            <tr>
              <th align="left">Description :</th>
              <td><label for="description">
                <textarea name="description" id="description" placeholder="Enter description of the land here" rows="5" cols="40" class="inputs"></textarea>
              </label></td>
            </tr>
            <tr>
              <th align="left">Upload images :</th>
              <td>
                  <label for="images">
                        <input name="uploadedfile1" type="file" />
                  </label>
                  
                  <label for="images">
                        <input name="uploadedfile2" type="file" />
                  </label>
                  
                  <label for="images">
                        <input name="uploadedfile3" type="file" />
                  </label>
              </td>
            </tr>
            <tr>
              <td colspan="2" align="center" valign="middle"><input type="submit" value="Add Property" class="myButton" name="submit" /></td>
            </tr>
          </table>
         </form>
        <?php }
            else{
        ?>
            Please login before you add a Property. If haven't registered with us yet, click <a href="../../customer/view/register.php"> here </a> to get Registered.
            
          <?php 
            }
        ?>  
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
