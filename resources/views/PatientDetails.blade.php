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
<label class="col-sm-2 col-form-label">Results</label>
<div class="col-sm-10">
<input type="text" readonly name="results" class="form-control form-control-primary" value="{{ session()->get('class') }}" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Clinical Notes</label>
<div class="col-sm-10">
<textarea rows="5" cols="5" name="clinical_notes" class="form-control form-control-primary" required></textarea>
</div>
</div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Image Url</label>
        <div class="col-sm-10">
            <input type="text" readonly name="image" class="form-control form-control-primary" value="{{ session()->get('image') }}" required>
        </div>
    </div>
<!--
<div class="form-group row">
 <label class="col-sm-2 col-form-label">Upload Mammogram Image</label>
<div class="col-sm-10">
<input type="file" name="mammogram" class="form-control form-control-primary" accept="image/*" required>
</div>
</div>
-->
<div class="form-group row">
<label class="col-sm-2 col-form-label">Doctor ID</label>
<div class="col-sm-10">
<input type="number" name="doctor_id" class="form-control form-control-primary" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Patient ID</label>
<div class="col-sm-10">
<input type="number" name="patient_id" class="form-control form-control-primary" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Region</label>
<div class="col-sm-10">
    <select name= "region" class="form-control" id="exampleFormControlSelect1" required>
      <option>Eastern Region</option>
      <option>Western Region</option>
      <option>Central Region</option>
      <option>Nothern Region</option>
    </select>
</div>
</div>


</div>
 <center>
  <button type="submit" class="btn btn-primary btn-out-dashed">Save Patient's details</button>
  <button type="reset"  class="btn btn-danger btn-out-dashed">Cancel</button>
</center>
</form>
</div>
@endsection
