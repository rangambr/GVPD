<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Topic</title>

<link rel="stylesheet" type="text/css" href="../common/CSS/home.css">
<link rel="stylesheet" type="text/css" href="../common/CSS/menu_bar.css">

<script type="text/javascript">
	function validate(){
		var x=document.forms["form1"]["a_name"].value
			if (x==null || x==""){
  			alert("Please enter your name.");
  			return false;
  		}
		var x=document.forms["form1"]["a_email"].value
			if (x==null || x==""){
  			alert("Please enter your email.");
  			return false;
  		}
		var x=document.forms["form1"]["a_email"].value
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
  			alert("Not a valid e-mail address");
  			return false;
  		}
		var x=document.forms["form1"]["a_answer"].value
			if (x==null || x==""){
  			alert("Please enter your answer.");
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

<div class="content">
	<?php
    
    $host="localhost"; // Host name 
    $username=""; // Mysql username 
    $password=""; // Mysql password 
    $db_name="gvpd"; // Database name 
    $tbl_name="forum_question"; // Table name 
    
    // Connect to server and select databse.
    mysql_connect("$host", "root", "")or die("cannot connect"); 
    mysql_select_db("$db_name")or die("cannot select DB");
    
    // get value of id that sent from address bar 
    $id=$_GET['id'];
    $sql="SELECT * FROM $tbl_name WHERE id='$id'";
    $result=mysql_query($sql);
    $rows=mysql_fetch_array($result);
    ?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong><? echo $rows['topic']; ?></strong></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><? echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>By :</strong> <? echo $rows['name']; ?> <strong>Email : </strong><? echo $rows['email'];?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Date/time : </strong><? echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<BR>

	<?php
    
    $tbl_name2="forum_answer"; // Switch to table "forum_answer"
    $sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
    $result2=mysql_query($sql2);
    while($rows=mysql_fetch_array($result2)){
    ?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong>ID</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><? echo $rows['a_id']; ?></td>
</tr>
<tr>
<td width="18%" bgcolor="#F8F7F1"><strong>Name</strong></td>
<td width="5%" bgcolor="#F8F7F1">:</td>
<td width="77%" bgcolor="#F8F7F1"><? echo $rows['a_name']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Email</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><? echo $rows['a_email']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Answer</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><? echo $rows['a_answer']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Date/Time</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><? echo $rows['a_datetime']; ?></td>
</tr>
</table></td>
</tr>
</table><br>
 
	<?php
    }
    
    $sql3="SELECT view FROM $tbl_name WHERE id='$id'";
    $result3=mysql_query($sql3);
    $rows=mysql_fetch_array($result3);
    $view=$rows['view'];
     
    // if have no counter value set counter = 1
    if(empty($view)){
    $view=1;
    $sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
    $result4=mysql_query($sql4);
    }
     
    // count more value
    $addview=$view+1;
    $sql5="update $tbl_name set view='$addview' WHERE id='$id'";
    $result5=mysql_query($sql5);
    mysql_close();
    ?>

<BR>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="add_answer.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" onSunbmit="return validate();">
<tr>
<td width="18%"><strong>Name</strong></td>
<td width="3%">:</td>
<td width="79%"><input name="a_name" type="text" id="a_name" size="45"></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="a_email" type="text" id="a_email" size="45"></td>
</tr>
<tr>
<td valign="top"><strong>Answer</strong></td>
<td valign="top">:</td>
<td><textarea name="a_answer" cols="39" rows="3" id="a_answer"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<? echo $id; ?>"></td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>
</body>
</html>