<html>
    <head>
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" /> 
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../../common/CSS/menu_bar.css">
        <link rel="stylesheet" href="../../common/jplist/css/vendor/normalize.css" />
        <link rel="stylesheet" href="../../common/jplist/css//styles.min.css" />
        
        <link href="../../common/jplist/css/jplist.min.css" rel="stylesheet" type="text/css" />		

        <!-- js -->		
        <script src="../../common/jplist/js/vendor/jquery-1.10.0.min.js"></script>
        <script src="../../common/jplist/js/vendor/modernizr.min.js"></script>

        <script src="../../common/jplist/js/jplist.min.js"></script>

        <script>
            $('document').ready(function() {
                $('#demo').jplist({
                    itemsBox: '.list'
                    , itemPath: '.list-item'
                    , panelPath: '.jplist-panel'

                            //save plugin state
                    , storage: 'localstorage' //'', 'cookies', 'localstorage'			
                    , storageName: 'jplist-div-layout'
                });
            });
        </script>
        <style type="text/css">
            html{
                background: #EAF3CF !important;
            }
            body{
                background: #EAF3CF !important;
                margin: 8px !important;
            }
            .box{
                width: 98% !important;
            }
            #demo{
                padding: 2%;
            }
        </style>
    </head>
    <body bgcolor="#EAF3CF">
        <?php session_start(); ?>

        <div class="header">
        	<table border="0" align="center" width="100%">
            	<tr>
                	<td style="margin-left:30px; padding-left:30px;">
                        <div align="center"><img src="../../common/images/tr_banner.png"/><br/>
                            <span style="color: #3A6839; font-weight: bold; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style: italic; font-size: large;">We Make Your Dream Come True.</span>
                        </div>
           			<td align="center">             
    					<img src="../../common/images/contact.png"/>
    	   			</td>
    			</tr>
    	</table>  		
</div>		

<div class="menu_bar" align="center" id="cssmenu">
	<ul>
            <li class='active'><a href='../view/index.php'><span>Home</span></a></li>
                <li><a href='../view/about_us.php'><span>About Us</span></a></li>
                <li><a href='../../property/view/advaced_search_property.php'><span>Buying</span></a></li>
                <li><a href='../../property/view/add_property.php'><span>Selling</span></a></li>
                <li><a href='../view/hot_deals.php'><span>Hot Deals</span></a></li>
                <li><a href='../../reviews/view/review.php'><span>Review</span></a></li>
                <li class='last'><a href='../../contact_us/view/contact_us.php'><span>Contact us</span></a></li>
                <li><a href='../../forum/view/forum.php'><span>Forum</span></a></li>
            </ul>
</div>
    <!-- demo -->
    <div id="demo" class="box jplist">

        <!-- ios button: show/hide panel -->
        <div class="jplist-ios-button">
            <i class="fa fa-sort"></i>
            jPList Actions
        </div>

        <!-- panel -->
        <div class="jplist-panel box panel-top">						

            <!-- back button button -->
            <button 
                type="button" 
                data-control-type="back-button" 
                data-control-name="back-button" 
                data-control-action="back-button">
                <i class="fa fa-arrow-left"></i> Go Back
            </button>

            <!-- reset button -->
            <button 
                type="button" 
                class="jplist-reset-btn"
                data-control-type="reset" 
                data-control-name="reset" 
                data-control-action="reset">
                Reset &nbsp;<i class="fa fa-share"></i>
            </button>

            <!-- items per page dropdown -->
            <div 
                class="jplist-drop-down" 
                data-control-type="drop-down" 
                data-control-name="paging" 
                data-control-action="paging">

                <ul>
                    <li><span data-number="3"> 3 per page </span></li>
                    <li><span data-number="5"> 5 per page </span></li>
                    <li><span data-number="10" data-default="true"> 10 per page </span></li>
                    <li><span data-number="all"> view all </span></li>
                </ul>
            </div>

            <!-- sort dropdown -->
            <div 
                class="jplist-drop-down" 
                data-control-type="drop-down" 
                data-control-name="sort" 
                data-control-action="sort"
                data-datetime-format="{month}/{day}/{year}"> <!-- {year}, {month}, {day}, {hour}, {min}, {sec} -->

                <ul>
                    <li><span data-path="default">Sort by</span></li>
                    <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                    <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                    <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                    <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                    <li><span data-path=".like" data-order="asc" data-type="text" data-default="true">Price asc</span></li>
                    <li><span data-path=".like" data-order="desc" data-type="text">Price desc</span></li>
                    <li><span data-path=".date" data-order="asc" data-type="text">Date added asc</span></li>
                    <li><span data-path=".date" data-order="desc" data-type="text">Date added desc</span></li>
                </ul>
            </div>

            <!-- filter by title -->
            <div class="text-filter-box">

                <i class="fa fa-search  jplist-icon"></i>

                <!--[if lt IE 10]>
                <div class="jplist-label">Filter by Title:</div>
                <![endif]-->

                <input 
                    data-path=".title" ../../
                    type="text" 
                    value="" 
                    placeholder="Filter by Title" 
                    data-control-type="textbox" 
                    data-control-name="title-filter" 
                    data-control-action="filter"
                    />
            </div>

            <!-- filter by description -->
            <div class="text-filter-box">

                <i class="fa fa-search  jplist-icon"></i>

                <!--[if lt IE 10]>
                <div class="jplist-label">Filter by Description:</div>
                <![endif]-->

                <input 
                    data-path=".desc" 
                    type="text" 
                    value="" 
                    placeholder="Filter by Description" 
                    data-control-type="textbox" 
                    data-control-name="desc-filter" 
                    data-control-action="filter"
                    />	
            </div>

            <!-- pagination results -->
            <div 
                class="jplist-label" 
                data-type="Page {current} of {pages}" 
                data-control-type="pagination-info" 
                data-control-name="paging" 
                data-control-action="paging">
            </div>

            <!-- pagination -->
            <div 
                class="jplist-pagination" 
                data-control-type="pagination" 
                data-control-name="paging" 
                data-control-action="paging">
            </div>

        </div>

        
        <!-- data -->   
        <div class="list box text-shadow">
            <?php while ($row = mysql_fetch_array($searchResult)) { ?>
            <!-- item 1 -->
            <div class="list-item box">					
                <!-- img -->
                <div class="img left">
                    <img src="../../property/photos/<?php getPhotoURLs($row['id']) ?>" alt="" title=""/>
                </div>

                <!-- data -->
                
                    <div class="block right">
                        <p class="date">
                            Date added:
                             <?php
                            echo $row['date_added'];
                            ?>
                        </p>
                        <p class="title">
                            <?php
                            echo $row['name'];
                            ?>
                        </p>
                        <p class="desc">
                            <?php
                            echo $row['description'];
                            ?>
                        </p>
                        <p class="like">
                             <?php
                            echo $row['unit_price'];
                            ?> Rs.
                        </p>
                    </div>
               
            </div>
            <?php }?>
        </div>
         

        <div class="box jplist-no-results text-shadow align-center">
            <p>No results found</p>
        </div>

        <!-- ios button: show/hide panel -->
        <div class="jplist-ios-button">
            <i class="fa fa-sort"></i>
            jPList Actions
        </div>

        <!-- panel -->
        <div class="jplist-panel box panel-bottom">

            <!-- items per page dropdown -->
            <div 
                class="jplist-drop-down" 
                data-control-type="drop-down" 
                data-control-name="paging" 
                data-control-action="paging"
                data-control-animate-to-top="true">

                <ul>
                    <li><span data-number="3"> 3 per page </span></li>
                    <li><span data-number="5"> 5 per page </span></li>
                    <li><span data-number="10" data-default="true"> 10 per page </span></li>
                    <li><span data-number="all"> view all </span></li>
                </ul>
            </div>

            <!-- sort dropdown -->
            <div 
                class="jplist-drop-down" 
                data-control-type="drop-down" 
                data-control-name="sort" 
                data-control-action="sort"
                data-control-animate-to-top="true"
                data-datetime-format="{month}/{day}/{year}"> <!-- {year}, {month}, {day}, {hour}, {min}, {sec} -->

                <ul>
                    <li><span data-path="default">Sort by</span></li>
                    <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                    <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                    <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                    <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                    <li><span data-path=".like" data-order="asc" data-type="text" data-default="true">Price asc</span></li>
                    <li><span data-path=".like" data-order="desc" data-type="text">Price desc</span></li>
                    <li><span data-path=".date" data-order="asc" data-type="text">Date added asc</span></li>
                    <li><span data-path=".date" data-order="desc" data-type="text">Date added desc</span></li>
                </ul>
            </div>

            <!-- pagination results -->
            <div 
                class="jplist-label" 
                data-type="{start} - {end} of {all}"
                data-control-type="pagination-info" 
                data-control-name="paging" 
                data-control-action="paging">
            </div>

            <!-- pagination -->
            <div 
                class="jplist-pagination" 
                data-control-animate-to-top="true"
                data-control-type="pagination" 
                data-control-name="paging" 
                data-control-action="paging">
            </div>

        </div>
    </div>
</body>
</html>