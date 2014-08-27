<?php 
 require '../controller/display_property.php';

?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
                <title><?php echo ''.$property['name'] ; ?></title>

		<link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/login_tbl.css">
		<link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">
                <style>
                    .ct_table th{
                        width: 33%;
						font-size:12px;
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
					</td>
                    <td align="center">
               			<table >
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
                <li><a href='../../forum/create_topic.php'><span>Forum</span></a></li>
                <li><a href='../../reviews/view/display_review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
        </div>

        <div class="content">
        
      <table class="ct_table" align="center" width="500" style="border:1px groove #93AE13;" >
            <tr bgcolor="#005825">
              <td colspan="2" align="center"><h1 style="color: #FFFFFF; font-style: normal;"> <?php echo ''.$property['name']; ?></h1></td>
            </tr>
            
            <tr>
              <th align="left">Address Line 1 :</th>
              <td><label for="address1">
                       <div>
                          <?php echo ''.$property['address1']; ?>
                      </div>
                  </label></td>
            </tr>
            <tr>
              <th align="left">Address Line 2 :</th>
              <td><label for="address2">
                       <div>
                          <?php echo ''.$property['address2']; ?>
                      </div>
                  </label></td>
            </tr>
            <tr>
              <th align="left">City :</th>
              <td><label for="city">
                       <div>
                          <?php echo ''.$property['city']; ?>
                      </div>
                  </label></td>
            </tr>
            <tr>
              <th align="left">Province :</th>
              <td><label for="province">
                   <div>
                          <?php echo ''.$property['province']; ?>
                      </div>    
                  </label></td>
            </tr>
            <tr>
              <th align="left">Extent(no. of perches) :</th>
              <td><label for="extent">
                       <div>
                          <?php echo ''.$property['extent']; ?>
                      </div>
               </label></td>
            </tr>
            <tr>
              <th align="left">Unit Price :</th>
              <td><label for="unit_price">
                       <div>
                          <?php echo ''.$property['unit_price']; ?>
                      </div>
                  </label></td>
            </tr>
            <tr>
              <th align="left">Description :</th>
              <td><label for="description">
                       <div>
                          <?php echo ''.$property['description']; ?>
                      </div>
                  </label></td>
            </tr>
            <tr>
              <th align="left">Images :</th>
              <td>
              		<div>
                    <?php while ($rowpic = mysql_fetch_array($allPhotoURLs)) { ?>
                    <span class="img left">
                        
                        <img src="../../property/photos/<?php echo ''.$rowpic['pic'] ?>" alt="" title="" width="130px" height="95 px"/>
                    </span>
                    <?php } ?>
                	</div>
              </td>
            </tr>
            
          </table>
         
        
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