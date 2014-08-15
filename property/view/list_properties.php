<html>
    <head>
        <link rel="stylesheet" href="../../common/tablesorter/css/theme.default.css">
        <!-- load jQuery and tablesorter scripts -->
        <script type="text/javascript" src="../../common/jQueryAssets/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="../../common/tablesorter/js/jquery.tablesorter.js"></script>

        <!-- tablesorter widgets (optional) -->
        <script type="text/javascript" src="../../common/tablesorter/js/jquery.tablesorter.widgets.js"></script>
    
        <script type="text/javascript">
            $(function(){
                $("#myTable").tablesorter();
              });
        </script>
    </head>
    <body>
        <?php session_start();

        require '../model/property.php';
        require_once '../../common/paginator/paginator.php';
        require '../../common/kint/Kint.class.php';
        $property = new Property();

        $allProperties = $property->getAllProperties();
        $pages = new Paginator;
        $pages->items_total = mysql_num_rows($allProperties); 
        $pages->mid_range = 9;
        //KINT::dump($pages->limit);

        $pages->paginate();

        echo $pages->display_pages();


        echo '<span style=\"margin-left:25px\">'.$pages->display_jump_menu(). $pages->display_items_per_page() . '</span>';
        //KINT::dump($pages->limit);

        $properties = $property->getPropertySubset($pages->limit);

        ?>


        <table id="myTable" class="tablesorter">
            <thead>
                <th>Id</th>
                <th>Name</th>
            </thead>
            <tbody>
                <?php 
                while($row = mysql_fetch_array($properties)){ ?>
                 <table width="80%" border="0" cellspacing="5" cellpadding="5" align="center" bgcolor="#fffdd9">
                <tr bgcolor="#889E43">
                    <td colspan="2" style="font-size: 18px; color: #FCFCFC; font-weight: bolder;">
                        <?php
                            echo $row['address1'];
                        ?><br/>
                        <?php
                            echo $row['address2'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><img src="../../common/images/horizontal_slider/img_6.jpg"/>
                        <br/>    <img src="../../common/images/camera_add.png" alt="photos" title="photos"/>
                    </td>
                    <td>
                        <p><span style="font-style: normal; font-size: 16px;">Offered at:</span>
                                <h3> <span style="font-style: normal; color: #ff0000; font-size: large;">
                            
                                        <?php  echo $row['unit_price'];?>
                            </span></h3>
                        <span style="font-style: normal"><br/>
                            <span style="font-size: 14px"><?php  echo $row['address1'];?>
                                </p>
                            </span></span>
                        <p style="font-size: 14px">Property Type: Single Family</p>
                        <p>Northwood House pays more than passing homage to the grand Edwardian designs found in Sheffield, but there the comparison ends. This superb eco-friendly property was designed exclusively for its current owner, being completed early 2011.</p>
                        <p> <a href="">More details>></a></p>
                        <hr />
                        <a href=""><img src="../../common/images/save.png" alt="save property" title="save property"/></a><span style="margin-left:25px;" >
                            <a href=""><img src="../../common/images/star_full.png" alt="rate property" title="rate property"/></a><a href=""><img src="../../common/images/star_half.png" alt="rate property" title="rate property"/></a>&nbsp;<a href=""><img src="../../common/images/star_empty.png" alt="rate property" title="rate property"/></a></span><span style="margin-left:25px;" ><a href=""><img src="../../common/images/email.png" alt="contact us" title="contact us"/></a></span>
                        <span style="margin-left:25px;" ><a href=""><img src="../../common/images/share.png" alt="share property" title="share property"/></a></span>
                        <span style="margin-left:25px;" ><a href="add_appointment.php"><img src="../../common/images/icons/reminders.png" alt="add reminder" title="add reminder"/></a></span>
                        <span style="margin-left:25px; float:right;" >
                            <input type="button" value="Check Availability"/>
                        </span>

                    </td>
                </tr>
            </table>        
                
               
                <?php
                    }
                ?> 
            </tbody>
        </table>
    </body>
</html>