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
          ['Region', 'Negative', 'Positive'],
          ['Central Region', {{$central_negatives}}, {{$central_positives}}],
          ['West Region', {{$west_negatives}}, {{$west_positives}}],
          ['East Region', {{$east_negatives}}, {{$east_positives}}],
          ['North Region', {{$north_negatives}}, {{$north_positives}}]
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

@extends('dashboard.master')
@section('title')
Visualisations
@endsection
@section('pageHeader')
<h3 class="card-header">Breast Cancer Graphical Visualization</h3>
@endSection
@section('content')

  <div class="card-body">
  <form class="form-inline" method ="post" action="/chart">
  @csrf
  <div class="form-group mb-2">
    <label for="date1">From&nbsp;</label>&nbsp;
    <input type="date" name="date1" class="form-control-date form-control-primary" id="date1" name="date1" required>
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="date2"> To &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;
    <input type="date" name = "date2" class="form-control-date form-control-primary" id="date2" name="date2" required>
  </div>
  <button type="submit" class="btn btn-primary mb-2 btn-out-dashed">View Graphs</button>&nbsp;
  <button type="reset"  class="btn btn-danger mb-2 btn-out-dashed">Reset</button>
</form>
</div>

 <div class="container">
  <div class="row">
    <div class="col-sm">
    <h4>Bar chart of Patients Diagnosed of Breast Cancer From <strong>{{$from}}</strong> To <strong>{{$to}}</strong></h4><br/>
    <div id="top_x_div" style="width: 300px; height: 600px;"></div>
    </div>

    <div class="col-sm">
    <h4>Pie chart of Patients Diagnosed of Breast Cancer  From <strong>{{$from}}</strong> To <strong>{{$to}}</strong></h4>
    <div id="piechart_3d" style="width: 550px; height: 500px;"></div>

    </div>

  </div>
  <br/><br/>
  <h4>Regional Distribution of Patients Diagnosed of Breast Cancer  From <strong>{{$from}}</strong> To <strong>{{$to}}</strong></h4><br/>
  <div id="barchart_material" style="width: 900px; height: 500px;"></div>

</div>

@endsection
