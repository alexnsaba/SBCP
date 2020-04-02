@extends('dashboard.master')
@section('title')
Visualisations
@endsection
@section('content')
<div class="card" style="background:#f2edf5;font-size:14pt;width:60rem;margin-left:3em"> 
<center><h3 class="card-title">Breast Cancer Graphical Visualization</h3> </center>
  <div class="card-body">
  <form class="form-inline" method ="post" action="">
  <div class="form-group mb-2">
    <label for="date1">From</label>&nbsp;
    <input type="date" class="form-control-date" id="date1" name="date1" required>
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="date2"> To</label>&nbsp;
    <input type="date" class="form-control-date" id="date2" name="date2" required>
  </div>
  <button type="submit" class="btn btn-primary mb-2">View Graphs</button>
</form>
  </div>
</div>
@endsection
