@extends('dashboard.master')
@section('title')
Predictions
@endsection
@section('pageHeader')
<h3 class="card-header">Breast Cancer Prediction</h3> 
@endSection
@section('content')
  <div class="card-body">
  <form method="post" action="">
  <div class="form-group">
    <label for="Image">Upload Mammogram Image</label>
    <input type="file" class="form-control form-control-primary" id="image" accept="image/*" required>
    <small id="imageHelp" class="form-text text-muted">** Strictly, Only mammogram images should be uploaded</small>
  </div>
 <center>
  <button type="submit" class="btn btn-primary">Submit</button>
</center>
</form>
</div>
@endsection
