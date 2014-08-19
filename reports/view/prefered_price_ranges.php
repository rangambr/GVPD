<?php
require '../controller/get_search_preferences.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Most Popular Price Ranges</title>
        <script type="text/javascript" src="../../common/JS/jsapi.js"></script>
        <script type="text/javascript">
            google.load("visualization", "1", {packages: ["corechart"]});
            google.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Price Range', 'Number of hits'],
                    <?php
                    while ($row = mysql_fetch_array($search_pref_by_price_chart)) {
                        echo '[ "' . $row['price_range'] . '",'.$row['COUNT(id)'].'],';
                    }
                    ?>
                   
                ]);

                //var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                //chart.draw(data, options);
                var chart = new google.visualization.LineChart(document.getElementById('chart_div')).
                draw(data, {curveType: "function",width: 700, height: 400,vAxis: {maxValue: 10}}
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
        <h3 style="color: #275C0D" align="center">Most Popular Price Ranges– From 2013-01-01 to 2014-01-01</h3>
        <table align="center" width="59%" border="0" cellspacing="5" cellpadding="5" style="font-size: 14px; font-weight: bold;">
            <tr>
                <td width="16%">&nbsp;</td>
                <td width="52%">Price Range</td>
                <td width="32%">NO OF HITS</td>
            </tr>
            <?php
            $counter = 0;

            while ($row = mysql_fetch_array($search_pref_by_price)) {
                $counter++;
                echo '<tr><td style="text-align: center">' . $counter . '</td>';
                echo '<td >' . $row['price_range'] . '</td>';
                echo '<td style="text-align: left">' . $row['COUNT(id)'] . '</td></tr>';
            }
            ?>


        </table>
<br/>
        <div id="chart_div" style="width: 900px; height: 500px;padding-left: 18%;"></div>

        <p>&nbsp;</p>
        <hr/>
        <div align='center'>
            <font size='9px; color:#275C0D; font-style:italic' style="font-size: small; font-weight: bold; font-style: italic; color: #275C0D;" font-weight:bolder;'> No:77,Doranegama  Road,Medawala(H:P).  &nbsp;&nbsp;&nbsp;email:greenvalleyDev@hotmail.com  &nbsp;&nbsp;&nbsp; 
                  Website: www.greenvalleydevelopment.com</font>
        </div>
    </body>
</html>
