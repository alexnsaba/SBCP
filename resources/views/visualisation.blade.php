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
@endsection
