<?php
session_start();
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Manage Reviews</title>

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
            .add_top{
                content: url('../../common/icons/add_small.png');
            }
            .delete_link{
                content: url('../../common/icons/icon-delete-small.png');
            }
        </style>
        <script>
            function showSelectedReviews(str) {
                
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
                xmlhttp.open("GET", "../controller/get_matching_reviews.php?q=" + str, true);
                xmlhttp.send();
            }

            function showAllReviews() {

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
                xmlhttp.open("GET", "../controller/manage_reviews.php", true);
                xmlhttp.send();
            }

        </script>
    </head>

    <body  bgcolor="#E1E1FF" onload="showAllReviews();">
	
    <div style="background-color:#000089; height:10%;padding:10px; padding-left:50px" >
		<h3 style="color:#FFFFFF">Manage reviews</h3>
	</div>
	<br/>
<div class="admin_menu_bar" align="center" id="cssmenu">
           <ul>
                <li class='active'><a href='index.php'>Home</a></li>
                <li><a href='about_us.php'><span>Users</span></a></li>
                <li><a href='about_us.php'><span>Properties</span></a></li>
                <li><a href='about_us.php'><span>Inquiries</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Reviews</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Reports</span></a></li>
                <li><a href='../../agreement/view/add_agreement1.php'><span>Agreements</span></a></li>
  </ul>
</div>
<br/>
<div class="content">

    <div class="CSSTableGenerator" >
        <form>
            <span class="filterText">Select a filter:</span>
            <select name="users" onchange="showSelectedReviews(this.value)">
                <option value="">Select a Rating:</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
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
