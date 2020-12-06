@extends('dashboard.master')
@section('title')
    Visualisations
@endsection
@section('pageHeader')
    <h3 class="card-header">Breast Cancer Graphical Visualization</h3>
@endSection
@section('content')
    <!--Visualise by date -->
    <div class="card-body">
        <h4>Visualise by Date</h4>
        <form class="form-inline" method="post" action="/chart">
            @csrf
            <div class="form-group mx-sm-3 mb-2" style="font-size:20px">
                <div class="demo">
                    <label for="date1">Choose Time Range&nbsp;</label>&nbsp;
                    <input type="text" class="form-control-date form-control-primary" name="timerange" id="date-range0" value="" size="35" required>
                    <pre class="options">
                    {}</pre>
                </div>
            </div>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary mb-2 btn-out-dashed">View Graphs</button>&nbsp;
            <button type="reset" class="btn btn-danger mb-2 btn-out-dashed">Reset</button>
            <!--
            <input type="text" name="daterange" value="01/01/2018 - 05/15/2018" />
            -->
        </form>
    </div>
    <!--Visualise by year -->
    <div class="card-body">
        <h4>Visualise by Year</h4>

        <form class="form-inline" method="post" action="/chart_by_year">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Choose Year</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="year" value="year" required>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                    <option>2026</option>
                    <option>2027</option>
                    <option>2028</option>
                    <option>2029</option>
                    <option>2030</option>
                </select>
            </div> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

            <button type="submit" class="btn btn-primary mb-2 btn-out-dashed">View Graphs</button>
        </form>
    </div>
    <script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>
@endsection
