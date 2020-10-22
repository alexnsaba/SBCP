@extends('dashboard.master')
@section('title')
Predictions
@endsection
@section('pageHeader')
<h3 class="card-header">Breast Cancer Predictions</h3> 
@endSection
@section('content')
  <div class="card-body">
  <table id="dom-jqry" class="table table-striped table-bordered nowrap">
  <thead>
  <tr>
  <td>ID</td>
  <td>Results</td>
  <td>Clinical Notes</td>
  <td>Patient ID</td>
  <td>Doctor ID</td>
  </tr>
</thead>
  @foreach($preds as $pred)
  <tbody>
  <tr>
  <td>{{ $pred->id }}</td>
  <td>{{$pred->results}}</td>
  <td>{{$pred->Clinical_notes}}</td>
  <td>{{$pred->Patient_id}}</td>
  <td>{{$pred->Doctor_id}}</td>
  </tr>
</tbody>
  @endforeach
  <tfoot>
  <tr>
  <td>ID</td>
  <td>Results</td>
  <td>Clinical Notes</td>
  <td>Patient ID</td>
  <td>Doctor ID</td>
  </tr>
</thead>
  </table>
</div>
@endsection