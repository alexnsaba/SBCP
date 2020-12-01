@extends('dashboard.master')
@section('title')
Predictions
@endsection
@section('pageHeader')
@include('message')
<h3 class="card-header">Save Patient's Details</h3>
@endSection
@section('content')
<div class="card-body">
<form method="post" action ="/save" enctypt="multipart/form-data">
@csrf
<div class="form-group row">
<label class="col-sm-2 col-form-label">Prediction Results(Class)</label>
<div class="col-sm-10">
<input type="number" name="results" class="form-control form-control-primary" value="{{session()->get('class')}}" readonly required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Clinical Notes</label>
<div class="col-sm-10">
<textarea rows="5" cols="5" name="clinical_notes" class="form-control form-control-primary" required></textarea>
</div>
</div>
{{--<div class="form-group row">--}}
{{--<label class="col-sm-2 col-form-label">Doctor ID</label>--}}
{{--<div class="col-sm-10">--}}
{{--<input type="number" name="doctor_id" class="form-control form-control-primary" required>--}}
{{--</div>--}}
{{--</div>--}}
<div class="form-group row">
<label class="col-sm-2 col-form-label">Patient Name</label>
<div class="col-sm-10">
{{--<input type="number" name="patient_id" class="form-control form-control-primary" required>--}}

    <select class="form-control form-control-primary" id="patient_id" name="patient_id" required>
        <option value="" selected disabled>Select Patient</option>
    @foreach ($patients as $patient)
            <option value="{{$patient->id}}">{{$patient->Name}}.............Phone Number: {{$patient->Phone_number}}</option>
        @endforeach
    </select>
</div>
</div>
{{--<div class="form-group row">--}}
{{--<label class="col-sm-2 col-form-label">Patient Email</label>--}}
{{--<div class="col-sm-10">--}}
{{--<input type="email" name="email" class="form-control form-control-primary" placeholder="email" required>--}}
{{--</div>--}}
{{--</div>--}}
<div class="form-group row">
<label class="col-sm-2 col-form-label">NextCheckup Date</label>
<div class="col-sm-10">
<input type="date" name="checkupDate" class="form-control form-control-primary" placeholder="Eg. 1 for positive or 0 for negative" required>
</div>
</div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Remainder Note</label>
        <div class="col-sm-10">
            <textarea rows="5" cols="5" name="clinical_notes" class="form-control form-control-primary" required></textarea>
        </div>
    </div>

{{--<div class="form-group row">--}}
{{--<label class="col-sm-2 col-form-label">Remainder Note</label>--}}
{{--<div class="col-sm-10">--}}
{{--<input type="text" name="remainder" class="form-control form-control-primary" placeholder="Enter the notification note" required>--}}
{{--</div>--}}
{{--</div>--}}




{{--<div class="form-group row">--}}
{{--<label class="col-sm-2 col-form-label">Region</label>--}}
{{--<div class="col-sm-10">--}}
{{--    <select name= "region" class="form-control" id="exampleFormControlSelect1" required>--}}
{{--      <option value="East">Eastern Region</option>--}}
{{--      <option value="West">Western Region</option>--}}
{{--      <option value="Central">Central Region</option>--}}
{{--      <option value="North">Northern Region</option>--}}
{{--    </select>--}}
{{--</div>--}}
{{--</div>--}}



 <center>
  <button type="submit" class="btn btn-primary btn-out-dashed">Save</button>
  <button type="reset"  class="btn btn-danger btn-out-dashed">Cancel</button>
</center>
</form>
</div>
@endsection
