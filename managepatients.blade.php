@extends('dashboard.master')
@section('title')
Visualisations
@endsection
@section('pageHeader')
<h3 class="card-header">Manage Patients</h3>
@endSection
@section('content')
  <div class="card-body">
  @include('message')
   <center>ADD PATIENT</center>
   <form method="post" action ="addpatient" enctypt="multipart/form-data">
@csrf
<div class="form-group row">
<label class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-10">
<input type="text" name="name" class="form-control form-control-primary" placeholder="Enter patient's name" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Location</label>
<div class="col-sm-10">
<input type="text" name="location" class="form-control form-control-primary" placeholder="Enter patient's location" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Phone No</label>
<div class="col-sm-10">
<input type="text" name="phone_number" class="form-control form-control-primary" placeholder="Enter patient's phone Number" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-10">
<input type="text" name="email" class="form-control form-control-primary" placeholder="Enter patient's Email"required>
</div>
</div>
</div>
 <center>
  <button type="submit" class="btn btn-primary btn-out-dashed">Save Patient Bio</button>
  <button type="reset"  class="btn btn-danger btn-out-dashed">Reset</button>
</center>
</form>
</div>

  <div class="card-body">
  <center>REGISTERED PATIENTS</center>
</div>
  <table class="table table-bordered">
<tr>
<td>Id</td>
<td>Name</td>
<td>Location</td>
<td>Phone Number</td>
<td>Email</td>
<td>Action</td>
</tr>
@foreach ($patients as $patient)
<tr>
<td>{{ $patient->id }}</td>
<td>{{ $patient->Name }}</td>
<td>{{ $patient->Location }}</td>
<td>{{ $patient->Phone_number }}</td>
<td>{{ $patient->Email }}</td>
<td><td><a class="btn btn-primary" href="{{ url('delete/'.$patient->id)}}">Delete</td></td>
</tr>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button href="{{ url('delete/'.$patient->id)}}" type="button" class="btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
@endforeach
</table>

  </div>
@endsection
