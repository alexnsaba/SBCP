@extends('dashboard.master')
@section('title')
Add Patients
@endsection
@section('pageHeader')
<h3 class="card-header">Add Patient</h3>
@endSection
@section('content')
  <div class="card-body">
  @include('message')
   <form method="post" action ="addpatient" enctypt="multipart/form-data">
@csrf
<div class="form-group row">
<label class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-10">
    <div class="text-danger">{{$errors->first('name')}}</div>
    <input type="text" name="name" class="form-control form-control-primary" placeholder="Enter patient's name" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Location</label>
<div class="col-sm-10">

    <select class="form-control form-control-primary" id="location" name="location" required>
        <option value="" selected disabled>Enter patient's location</option>
        @foreach ($locations as $locate)
            <option value="{{$locate->id}}">{{$locate->name}}</option>
        @endforeach
    </select>



{{--<input type="text" name="location" class="form-control form-control-primary" placeholder="Enter patient's location" required>--}}
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Phone No</label>
<div class="col-sm-10">
    <div class="text-danger">{{$errors->first('phone_number')}}</div>
<input type="text" name="phone_number" class="form-control form-control-primary" placeholder="Enter patient's phone Number" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-10">
    <div class="text-danger">{{$errors->first('email')}}</div>
    <input type="text" name="email" class="form-control form-control-primary" placeholder="Enter patient's Email"required>
</div>
</div>

 <center>
  <button type="submit" class="btn btn-primary btn-out-dashed">Save Patient Bio</button>
  <button type="reset"  class="btn btn-danger btn-out-dashed">Reset</button>
</center>
</form>
</div>
@endsection
