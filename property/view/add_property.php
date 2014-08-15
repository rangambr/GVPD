<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Insert Property</title>

		<link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/login_tbl.css">
		<link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">

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
                                  <?php echo 'Hi, <a href="../../customer/controller/display_profile.php">' . $_SESSION['username'] . '</a> '; ?>
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
        <form name="frm_register" method="post" action="../controller/add_property.php" enctype="multipart/form-data">
          <table align="center" width="500" style="border:1px groove #93AE13;" >
            <tr bgcolor="#005825">
              <td colspan="2" align="center"><h1 style="color: #FFFFFF; font-style: normal;">Add Property</h1></td>
            </tr>
            <tr>
              <th align="left"> Title : </th>
              <td><select name="cmb_title">
              		<option>select</option>
              		<option>Mr</option>
                    <option>Mrs</option>
                    <option>Miss</option>
                    <option>Rev</option>
              	</select></td>
            </tr>
            <tr>
              <th align="left"> Name : </th>
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
                <input name="province" class="inputs" id="city" placeholder="Please type province here" size="45" cols="47" rows="5"/>
              </label></td>
            </tr>
            <tr>
              <th align="left">Extent(no. of perches) :</th>
              <td><label for="extent">
                <input name="extent" type="text" id="extent" placeholder="Enter extent here" size="45" class="inputs"/>
              </label></td>
            </tr>
            <tr>
              <th align="left">Unit Price :</th>
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
              <td><label for="images"><input type="hidden" name="MAX_FILE_SIZE" value="100000" />
 <input name="uploadedfile" type="file" />
              </label>
              </td>
            </tr>
            <tr>
              <td colspan="2" align="center" valign="middle"><input type="submit" value="Add Property" class="myButton" name="submit" /></td>
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
