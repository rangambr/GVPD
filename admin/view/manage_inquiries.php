<?php
session_start();
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Manage Inquiries</title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/manage_user_table.css">

        <style type="text/css">
            .content{
                margin-top: 2% !important;
                padding: 0px 0px 0px 0px !important;
            }
            .footer{

                bottom:0px;
            }
            .btn{
                width: 42.5%;
            }
            .ac_link{
                text-align: center !important;
            }
            .filterText{
                font-size: 10pt;
                font-family: Arial;
            }
            .resp_link{
                 content:url(../..//common/icons/envelope_icon_small.gif);
            }
            .close_link{
                content:url(../..//common/icons/tick-icon-small.png);
            }
        </style>
        <script>
            function showSelectedInquiries(str) {
                
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "../controller/get_matching_inquiries.php?q=" + str, true);
                xmlhttp.send();
            }

            function showAllInquiries() {

                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                //  alert(document.getElementById("txtHint"));
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "../controller/manage_inquiries.php", true);
                xmlhttp.send();
            }

        </script>
    </head>

<body  bgcolor="#E1E1FF" onload="showAllInquiries();">
	<div style="background-color:#000089; height:10%;padding:10px; padding-left:50px" >
		<h3 style="color:#FFFFFF">Manage inquiries</h3>
	</div>
	<br/>
<div class="admin_menu_bar" align="center" id="cssmenu">
           <ul>
              <li class='active'><a href='index.php'><span>Home</span></a></li>
              <li><a href='about_us.php'><span>Users</span></a></li>
              <li><a href='about_us.php'><span>Properties</span></a></li>
              <li><a href='about_us.php'><span>Inquiries</span></a></li>
              <li><a href='../view/hot_deals.php'><span>Payments</span></a></li>
              <li><a href='../../forum/create_topic.php'><span>Reports</span></a></li>
              <li><a href='../../reviews/view/review.php'><span>Reviews</span></a></li>
           </ul>
</div>

<div class="content">

    <div class="CSSTableGenerator" >
        <form>
            <span class="filterText">Select a filter:</span>
            <select name="users" onchange="showSelectedInquiries(this.value)">
                <option value="">Select a Status:</option>
                <option value="Open">Open</option>
                <option value="Pending">Pending</option>
                <option value="Closed">Closed</option>
            </select>
        </form>
        <br/>
        <table class="user_table" id="txtHint">

        </table>
        <!--<div id="txtHint"><b>Person info will be listed here.</b></div>-->
    </div>
</div>
</body>
</html>
