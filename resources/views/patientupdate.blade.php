@extends('dashboard.master')
@section('title')
Edit Patient Details
@endsection

@section('pageHeader')
    <h3 class="card-header">Edit {{$patients[0]->Name}}'s Details</h3>
@endSection
@section('content')

@include('message')
<form method="post" action ="/edit/<?php echo $patients[0]->id; ?>" enctypt="multipart/form-data">
@csrf
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
        <div class="text-danger">{{ $errors->first("name") }}</div>
        <input type="text" name="name" class="form-control form-control-primary" value = '<?php echo$patients[0]->Name; ?>' required>
        </div>
    </div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Location</label>
    <div class="col-sm-10">
        <div class="text-danger">{{ $errors->first("location") }}</div>
            <select class="form-control form-control-primary" id="location" name="location" required>
                <option value="{{$patients[0]->location->id}}" selected>{{$patients[0]->location->name}}</option>
                @foreach ($locations as $locate)
                    <option value="{{$locate->id}}">{{$locate->name}}</option>
                @endforeach
            </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Phone No</label>
    <div class="col-sm-10">
        <div class="text-danger">{{ $errors->first("phone_number") }}</div>
        <input type="text" name="phone_number" class="form-control form-control-primary" value = '<?php echo$patients[0]->Phone_number; ?>' required>
    </div>
</div>


<div class="form-group row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <div class="text-danger">{{ $errors->first("email") }}</div>
        <input type="text" name="email" class="form-control form-control-primary" value = '<?php echo$patients[0]->Email; ?>' required>
    </div>
</div>

 <center>
  <button type="submit" class="btn btn-primary btn-out-dashed">Update</button>
  <a class="btn btn-danger btn-out-dashed" href="{{url('viewpatient')}}">Cancel Update</a>
</center>
</form>

@endsection
