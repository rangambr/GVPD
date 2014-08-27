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
                <li><a href='main_forum.php'><span>Forum</span></a></li>
                <li><a href='../reviews/view/display_review.php'><span>Review</span></a></li>
                <li class='last'><a href='../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
            </ul>
        </div>
        <p><br/><br/><br/>
<div align="center" style="padding:5px; color:#275C0D">
<img src="../common/images/icons/successful.png" height="17px" width="17px"/>       
  <?php

$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="gvpd"; // Database name 
$tbl_name="forum_answer"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "root", "")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get value of id that sent from hidden field 
$id=$_POST['id'];

// Find highest answer number. 
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}

// get values that sent from form 
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer']; 

$datetime=date("d/m/y H:i:s"); // create date and time

// Insert answer 
$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
$result2=mysql_query($sql2);

if($result2){
echo "<b>Successful</b><BR><BR>";
echo "<b><a href='view_topic.php?id=".$id."'>View your answer</a></b>";

// If added new answer, add value +1 in reply column 
$tbl_name2="forum_question";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
$result3=mysql_query($sql3);
}
else {
echo "ERROR";
}

// Close connection
mysql_close();
?>
</div>
  <br/><br/>
        </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><br/>
        </p>
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