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
    <h4>Bar chart of Breast Cancer Predictions From <strong>{{$from}}</strong> To <strong>{{$to}}</strong></h4>
    <hr style="background:black;">
    @if(($negatives > 0) || ($positives > 0))
    <div id="top_x_div" style="width: 300px; height: 600px;"></div>
    @else
    <h5> No Breast Cancer Prediction was made in the above time range</h5>
    @endif
    </div>
    <div class="col-sm">
    <h4>Pie chart of Breast Cancer Predictions From <strong>{{$from}}</strong> To <strong>{{$to}}</strong></h4>
    <hr style="background:black;">
    @if(($negatives > 0) || ($positives > 0))
    <div id="piechart_3d" style="width: 550px; height: 500px;"></div>
   @else
    <h5> No Breast Cancer Prediction was made in the above time range</h5>
    @endif
    </div>

  </div>
  <br/><br/>
  <h4>Regional Distribution of Breast Cancer Predictions From <strong>{{$from}}</strong> To <strong>{{$to}}</strong></h4>
 <hr style="background:black;">
 @if(($central_negatives > 0) || ($central_positives > 0) || ($west_negatives > 0) || ($west_positives > 0) || ($east_negatives > 0) || ($east_positives > 0) || ($north_negatives > 0) || ($north_positives > 0))
  <div id="barchart_material" style="width: 900px; height: 500px;"></div>
 @else
  <h5> No Breast Cancer Prediction was made in the above time range</h5>
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
          bar: { groupWidth: "90%"},
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
          ['Region', 'Negative', 'Positive'],
          ['Central Region', {{$central_negatives}}, {{$central_positives}}],
          ['Western Region', {{$west_negatives}}, {{$west_positives}}],
          ['Eastern Region', {{$east_negatives}}, {{$east_positives}}],
          ['Northern Region', {{$north_negatives}}, {{$north_positives}}]
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
