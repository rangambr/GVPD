<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Topic</title>

<link rel="stylesheet" type="text/css" href="../common/CSS/home.css">
<link rel="stylesheet" type="text/css" href="../common/CSS/menu_bar.css">

</head>

<body  bgcolor="#EAF3CF">
<div class="header">
        	<table border="0" align="center" width="100%">
            	<tr>
                	<td style="margin-left:30px; padding-left:30px;">
                        <div align="center"><img src="../common/images/tr_banner.png"/><br/>
                            <span style="color: #3A6839; font-weight: bold; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style: italic; font-size: large;">We Make Your Dream Come True.</span>
                        </div>
           			<td align="center">             
    					<img src="../common/images/contact.png"/>
    	   			</td>
    			</tr>
    	</table>  		
</div>		

        <div class="menu_bar" align="center" id="cssmenu">
            <ul>
                <li class='active'><a href='../home/view/index.php'><span>Home</span></a></li>
                <li><a href='../home/view/about_us.php'><span>About Us</span></a></li>
                <li><a href='../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href='../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
        </div>
        <br/>
		  <?php
          
          $host="localhost"; // Host name 
          $username=""; // Mysql username 
          $password=""; // Mysql password 
          $db_name="gvpd"; // Database name 
          $tbl_name="forum_question"; // Table name 
          
          // Connect to server and select databse.
          mysql_connect("$host", "root", "")or die("cannot connect"); 
          mysql_select_db("$db_name")or die("cannot select DB");
          $sql="SELECT * FROM $tbl_name ORDER BY id DESC";
          // OREDER BY id DESC is order result by descending
          
          $result=mysql_query($sql);
          ?>
<?php 
	if(!empty($_REQUEST['msg'])){
  		$error_code = $_REQUEST['msg'];
  			if($error_code == "3"){ ?>
            	<div align="center" style="color: #10781F; font-size: 14px;"><b>Added the topic successfully!</b></div>
                <?php 
				}
	}?>
<br/><br/>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

		  <?php
           
          // Start looping table row
          while($rows=mysql_fetch_array($result)){
          ?>
          <tr>
          <td bgcolor="#FFFFFF"><? echo $rows['id']; ?></td>
          <td bgcolor="#FFFFFF"><a href="view_topic.php?id=<? echo $rows['id']; ?>"><? echo $rows['topic']; ?></a><BR></td>
          <td align="center" bgcolor="#FFFFFF"><? echo $rows['view']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><? echo $rows['reply']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><? echo $rows['datetime']; ?></td>
          </tr>
          
          <?php
          // Exit looping and close connection 
          }
          mysql_close();
          ?>

<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="create_topic.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="footer" id="footer_wrap">
	<ul>
	 <li class='active'><a href='../home/view/index.php'><span>Home</span></a></li>
                <li><a href='../home/view/about_us.php'><span>About Us</span></a></li>
                <li><a href='../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href='../home/view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
	</ul>
<p id="copyright" >
	Copyright © 2014 Greenvalley.lk All rights reserved.
</p>
</div>
</body>
</html>