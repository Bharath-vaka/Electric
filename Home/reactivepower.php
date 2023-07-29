<!DOCTYPE html>
<html>
<head>
  <title>Dynamic Spline Chart</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
</head>
<body>
  <div id="container" style="width: 330px; height: 280px; margin: auto auto"></div>
  <script>
    $(document).ready(function() {
      var chart = new Highcharts.Chart({
        chart: {
          renderTo: 'container',
          type: 'spline'
        },
        title: {
          text: ''
        },
        xAxis: {
          type: 'datetime'
        },
        yAxis: {
          title: {
            text: ''
          }
        },
          plotOptions: {
          spline: {
            lineWidth: 2,
            color:"#e04ecb",
            marker: {
              enabled: true
            },
            animation: {
              duration: 1000,
              easing: 'linear'
            }
          }
        },
        series: [{
          name: '',
          data: []
        }]
      });
      setInterval(function () {
        $.getJSON("reactivepowerdata.php", function (json) {
          chart.series[0].setData(json);
        });
      }, 1000);
    });
  </script>
</body>
</html>
