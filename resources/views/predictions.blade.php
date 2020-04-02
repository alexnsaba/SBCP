@extends('dashboard.master')
@section('title')
Predictions
@endsection
@section('content')
<div class="card" style="background:#f2edf5;font-size:14pt;width:60rem;margin-left:3em"> 
<center><h3 class="card-header">Breast Cancer Prediction</h3> </center>
  <div class="card-body">
  <form method="post" action="">
  <div class="form-group">
    <label for="Image">Upload Mammogram Image</label>
    <input type="file" class="form-control-file" id="image" accept="image/*" required>
    <small id="imageHelp" class="form-text text-muted">** Strictly, Only mammogram images should be uploaded</small>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
@endsection
