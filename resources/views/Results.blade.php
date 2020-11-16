@extends('dashboard.master')
@section('title')
Predictions
@endsection
@section('pageHeader')
<h3 class="card-header">Prediction Results</h3>
@endSection
@section('content')

  <div class="card-body">
    <h3>{{$label}}</h3>
    <div class="dt-responsive table-responsive">
<table id="table-style-hover" class="table table-striped table-hover table-bordered nowrap">
<thead>
 <tr>
<th>Predicted Class</th>
<th>Accuracy</th>
</tr>
</thead>
<tbody>
<td>{{$predicted_class}}</td>
<td>{{$accuracy}} %</td>
</tbody>
</table>
</div>

<center>
  <a href="patientDetails"><button class="btn btn-primary btn-out-dashed">Save Patient's details</button></a>
  <a href="Predictions"><button  class="btn btn-danger btn-out-dashed">Cancel</button></a>
</center>
  </div>

@endsection
