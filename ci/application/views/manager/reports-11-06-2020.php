<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cultural Scan Score', 'Organization'],
          ['ORGANISATIONAL EFFECTIVENESS',     11],
          ['LEVEL OF CONTROL',      2],
          ['CUSTOMER ORIENTATION',  2],
          ['FOCUS', 2],
          ['APPROACHABILITY',    7],
		  ['MANAGEMENT PHILOSOPHY',    7],
        ]);

        var options = {
          title: 'Cultural Scan Value',
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