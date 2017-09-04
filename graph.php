<?php session_start();
error_reporting(0);
if($_SESSION['adminlogin']!="true")
{
	header("location:../admin.php"); 
}

include("connection.php");
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            <?php
                                    $sql="SELECT * FROM admin";
                                    $result = mysql_query($sql);
                                    while($row = mysql_fetch_array($result))
                                        {
                                            echo ?>
          ['<?php AdminID ?>', '<?php $row['UserNameID']?>'],
          ['<?php Username ?>','<?php $row['username']?> '],
          ['<?php Password ?>',  '<?php $row['pass']?>'], 
            <?php } ?>
          
        ]);

        var options = {
          title: 'Administrator Table',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>