<?php require '../controller/view_inquiry.php'; ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>View inquiry</title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/form.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/manage_user_table.css">

        <style type="text/css">
            .content{
                padding: 0px !important;
            }
        </style>
    </head>

    <body  bgcolor="#E1E1FF">

<div class="header">
<div style="background-color:#000089; height:10%;padding:10px; padding-left:50px" >
		<h3 style="color:#FFFFFF">View inquiry</h3>
	</div>
	<br/>
<div class="admin_menu_bar" align="center" id="cssmenu">
           <ul>
                <li><a href='../../home/view/index.php'>Home</a></li>
                <li><a href='control_panel.php'><span>Admin panel</span></a></li>
                <li><a href='manage_users.php'><span>Users</span></a></li>
                <li><a href='manage_properties.php'><span>Properties</span></a></li>
                <li><a href='manage_inquiries.php'><span>Inquiries</span></a></li>
                <li><a href='manage_reviews.php'><span>Reviews</span></a></li>
                <li><a href='reports.php'><span>Reports</span></a></li>
                <li><a href='../../agreement/view/agreement_details.php'><span>Agreements</span></a></li>
                <li><a href='../../plan/view/plan_details.php'><span>Property plans</span></a></li>
                <li><a href='../../project_proposal/view/proposal_main_page.php'><span>Project proposals</span></a></li>
            </ul>
</div>
</div>
<br/><br/>
<div class="content">
   
        <?php
        ?>
        
            <form name="frm_ViewInquiry" method="post" >
               <table width="500" align="center" style=" padding:5px; background-color:#F8F8F7;">
               		<tr>
                      <td width="120">Name</td>
                      <td width="10">:</td>
                      <td width="354"><?php echo '' . $newvinq_1['title']." "; ?><?php echo '' . $newvinq_1['name']; ?></td>
                    <tr>
                      <td width="120">From</td>
                      <td width="10">:</td>
                      <td width="354"><?php echo '' . $newvinq_1['email']; ?></td>
                    </tr>
                    <tr>
                      <td>Date/Time</td>
                      <td>:</td>
                      <td><?php echo '' . $newvinq_1['datetime']; ?></td>
                    </tr>
                    <tr>
                    	<td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                    	<td colspan="3"><a  href='respond_inquiry.php?inqId="<?php echo ''.$newvinq_1['inquiry_id'];?>"'><span >Repond Inquiry</span></a></td>
                    </tr>
                    <tr>
                      <td>Subject</td>
                      <td>:</td>
                      <td><?php echo '' . $newvinq_1['subject']; ?></td>
                    </tr>
                    <tr>
                      <td>Message</td>
                      <td>:</td>
                      <td><?php echo '' . $newvinq_1['message']; ?></td>
                    </tr>
                    
                    <?php
                    // Start looping table row
                     while ($row = mysql_fetch_array($result2)) { ?>
                    <tr>
                      <td rowspan="2">Response &amp; Date/Time</td>
                      <td>:</td>
                      <td rowspan="2"><? echo $row['response']; ?><br/>
                      				  <?php echo '' . $row['datetime']; ?>
                      		
   </td>
                    </tr>
                    <tr>
                      <td>:</td>
                    </tr>
                    
                     <?php
          // Exit looping and close connection 
          } ?>
				</table>  
            </form>
        </div>
</body>
</html>
