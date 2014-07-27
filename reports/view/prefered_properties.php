<?php
require '../controller/get_search_preferences.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Most Popular Properties</title>
        <script type="text/javascript" src="../../common/JS/jsapi.js"></script>
        <script type="text/javascript">
            google.load("visualization", "1", {packages: ["corechart"]});
            google.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Property', 'Rating', 'No of reviews'],
                        <?php
                    while ($row = mysql_fetch_array($popular_properties_chart)) {
                        echo '[ "' . $row['name'] . '",' . $row['rating'] . ','.$row['COUNT(review.id)'].'],';
                    }
                    ?>

                ]);

                //var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                //chart.draw(data, options);
                var chart = // Create and draw the visualization.
                        new google.visualization.BarChart(document.getElementById('chart_div')).
                        draw(data,
                                {title: "Popular Properties",
                                    width: 700, height: 400,
                                    vAxis: {title: "Property"},
                                    hAxis: {title: "Ratings/No of reviews"}}
                        );
            }
        </script>
    </head>

    <body>


        <div style='font-size: 24px; color: #275C0D; font-weight: bolder; text-align: center;'>GREEN VALLEY PROPERTY DEVELOPMENT (PVT) LTD</div>
        <div style='font-size:12px;margin-top:10px; color:#275C0D; font-weight:bolder;'>
            <div style='margin-left:370px;'>Tel.0812 490 738<span style='margin-left:440px;'>Reg.No. P.V.6077 </span><br/>&nbsp; &nbsp; &nbsp; 0777 031 403<span style='margin-left:445px;'>T.I.N.  114372676</span></div>
        </div>	


        <hr/>                         
        <br/><br/>
        <h3 style="color: #275C0D" align="center">Most Popular Properties – From 2013-01-01 to 2014-01-01</h3>
        <table align="center" width="50%" border="0" cellspacing="5" cellpadding="5" style="font-size: 14px; font-weight: bold;">
            <tr>
                <td width="11%">&nbsp;</td>
                <td width="50%">PROPERTY NAME</td>
                <td width="15%">RATINGS</td>
                <td width="24%">NO OF Reviews</td>
            </tr>
            <?php
            $counter = 0;
            while ($row = mysql_fetch_array($popular_properties)) {
                $counter++;
                echo '<tr><td style="text-align: center">' . $counter . '</td>';
                echo '<td >' . $row['name'] . '</td>';
                echo '<td  style="text-align: left">' . $row['rating'] . '</td>';
                echo '<td style="text-align: left">' . $row['COUNT(review.id)'] . '</td></tr>';
            }
            ?>

        </table>
        <br/>
        <div id="chart_div" style="width: 900px; height: 500px;padding-left: 21%;"></div>


        <p>&nbsp;</p>
        <hr/>
        <div align='center'>
            <font size='9px; color:#275C0D; font-style:italic' style="font-size: small; font-weight: bold; font-style: italic; color: #275C0D;" font-weight:bolder;'> No:77,Doranegama  Road,Medawala(H:P).  &nbsp;&nbsp;&nbsp;email:greenvalleyDev@hotmail.com  &nbsp;&nbsp;&nbsp; 
                  Website: www.greenvalleydevelopment.com</font>
        </div>
    </body>
</html>

