<?php
session_start();
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Manage Inquiries</title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
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

    <body  bgcolor="#EAF3CF" onload="showAllInquiries();">

        <div class="header">

            <div class="header">
                <img src="../../common/images/myBanner.png"  style="margin-left:50px"/><span>
                    <img src="../../common/images/contact.png" style="margin-left:140px"/></span> </div>  		

        </div>

    </td>
<td>&nbsp;</td>
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
                <li><a href='../../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
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

<div class="footer" id="footer_wrap" style="position: relative">
    <ul>
        <li class='active'><a href='index.php'><span>Home</span></a></li>
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
