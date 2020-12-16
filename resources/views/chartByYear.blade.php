 @extends('dashboard.master')
 @section('title')
     Visualisations
 @endsection
 @section('pageHeader')
     <h3 class="card-header">Breast Cancer Graphical Visualization</h3>
 @endSection
 @section('content')

     <div class="container">

     <div class="row">
    <div class="col-sm">
    <h4 >Bar chart of Breast Cancer Predictions made in {{$year}}</h4>
    <hr style="background:black;">
    @if(($negatives > 0) || ($positives > 0))
    <div id="top_x_div" style="width: 300px; height: 600px;"></div>
    @else
    <h5> No Breast Cancer Prediction was made in {{$year}}</h5>
    @endif
    </div>

    <div class="col-sm">
    <h4>Pie chart of Breast Cancer Predictions made in {{$year}}</h4>
    <hr style="background:black;">
    @if(($negatives > 0) || ($positives > 0))
    <div id="piechart_3d" style="width: 550px; height: 500px;"></div>
   @else
    <h5> No Breast Cancer Prediction was made in {{$year}}</h5>
    @endif
    </div>
  </div>
  <br/><br/>
  <h4>Monthly Distribution of Breast Cancer Predictions made in {{$year}}</h4>
 <hr style="background:black;">
 @if(($negatives1 > 0) || ($positives1 > 0) || ($negatives2 > 0) || ($positives2 > 0) || ($negatives3 > 0) || ($positives3 > 0) || ($negatives4 > 0) || ($positives4 > 0)
 || ($negatives5 > 0) || ($positives5 > 0)|| ($negatives6 > 0) || ($positives6 > 0)|| ($negatives7 > 0) || ($positives7 > 0) || ($negatives8 > 0) || ($positives8 > 0)
 || ($negatives9 > 0) || ($positives9 > 0)|| ($negatives10 > 0) || ($positives10 > 0)|| ($negatives11 > 0) || ($positives11 > 0) || ($negatives12 > 0) || ($positives12 > 0))
  <div id="barchart_material" style="width: 900px; height: 500px;"></div>
 @else
  <h5> No Breast Cancer Prediction was made in {{ $year}}</h5>
 @endif
     </div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <!-- bar graph-->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);
      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Class', 'Patients'],
          ["Negative(0)",{{ $negatives}}],
          ["Positive(1)",{{$positives}}]
        ]);

        var options = {
          width: 300,
          legend: { position: 'none' },
          axes: {
            x: {
              0: { side: 'bottom', label: 'Predicted Class'} // Bottom x-axis.
            },
            y: {
              0: { label: 'Number of People diagnosed'} // y-axis.
            }
          },
          bar: { groupWidth: "90%" },

        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

    <!-- piechart -->

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Class', 'Patients'],
          ["Negative(0)",{{ $negatives}}],
          ["Positive(1)",{{$positives}}]
        ]);

        var options = {
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <!-- Grouped barchart -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Negative', 'Positive'],
          ['JAN', {{$negatives1}}, {{$positives1}}],
          ['FEB', {{$negatives2}}, {{$positives2}}],
          ['MAR', {{$negatives3}}, {{$positives3}}],
          ['APR', {{$negatives4}}, {{$positives4}}],
          ['MAY', {{$negatives5}}, {{$positives5}}],
          ['JUN', {{$negatives6}}, {{$positives6}}],
          ['JUL', {{$negatives7}}, {{$positives7}}],
          ['AUG', {{$negatives8}}, {{$positives8}}],
          ['SEPT', {{$negatives9}}, {{$positives9}}],
          ['OCT', {{$negatives10}}, {{$positives10}}],
          ['NOV', {{$negatives11}}, {{$positives11}}],
          ['DEC', {{$negatives12}}, {{$positives12}}]
        ]);

        var options = {
          axes: {
            y: {
              0: { label: 'Number of People diagnosed'} // y-axis.
            }
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>



 @endsection
