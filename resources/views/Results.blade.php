@extends('dashboard.master')
@section('title')
Predictions
@endsection
@section('pageHeader')
<h3 class="card-header">Prediction Results</h3> 
@endSection
@section('content')

  <div class="card-body">
    <h3>Positive, 1</h3>
    <div class="dt-responsive table-responsive">
<table id="table-style-hover" class="table table-striped table-hover table-bordered nowrap">
<thead>
 <tr>
<th>Outcome</th>
<th>probability</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>66.3 %</td>
</tr>
<tr>
<td>0</td>
<td>33.7 %</td>
</tr>
</tbody>
</table>
</div>
<center>
  <a href="patientDetails"><button class="btn btn-primary btn-out-dashed">Save Patient's details</button></a>
  <a href="Predictions"><button  class="btn btn-danger btn-out-dashed">Cancel</button></a>
</center>
  </div>

@endsection
