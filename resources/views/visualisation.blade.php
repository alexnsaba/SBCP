@extends('dashboard.master')
@section('title')
Visualisations
@endsection
@section('pageHeader')
<h3 class="card-header">Breast Cancer Graphical Visualization</h3> 
@endSection
@section('content')
  <div class="card-body">
  <form class="form-inline" method ="post" action="">
  <div class="form-group mb-2">
    <label for="date1">From&nbsp;</label>&nbsp;
    <input type="date" name="date1" class="form-control-date form-control-primary" id="date1" name="date1" required>
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="date2"> To &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;
    <input type="date" name = "date2" class="form-control-date form-control-primary" id="date2" name="date2" required>
  </div>
  <button type="submit" class="btn btn-primary mb-2 btn-out-dashed">View Graphs</button>&nbsp;
  <button type="reset"  class="btn btn-danger mb-2 btn-out-dashed">Cancel</button>
</form>
  </div>
  <div class="card-body">
<div class="card latest-update-card">
<div class="card-header">
<h3>Charts</h3>
<div class="card-header-right">
<ul class="list-unstyled card-option">
<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
<li><i class="feather icon-maximize full-card"></i></li>
<li><i class="feather icon-minus minimize-card"></i></li>
<li><i class="feather icon-refresh-cw reload-card"></i></li>
<li><i class="feather icon-trash close-card"></i></li>
<li><i class="feather icon-chevron-left open-card-option"></i></li>
</ul>
</div>
</div>
<h3>Graphs will go here Graphs will go here Graphs will go here Graphs will go here</h3>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
