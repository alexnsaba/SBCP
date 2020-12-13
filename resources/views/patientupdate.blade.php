@extends('dashboard.master')
@section('title')
Visualisations
@endsection
@section('content')
<div>
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
<input type="text" name="location" class="form-control form-control-primary" value = '<?php echo$patients[0]->Location; ?>' required>
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
</div>
 <center>
  <button type="submit" class="btn btn-primary btn-out-dashed">Update</button>
  <a class="btn btn-danger btn-out-dashed" href="{{url('viewpatient')}}">Cancel Update</a>
</center>
</form>
</div>
@endsection
