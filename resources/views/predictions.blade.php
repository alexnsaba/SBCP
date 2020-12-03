@extends('dashboard.master')
@section('title')
Predictions
@endsection
@section('pageHeader')
<h3 class="card-header">Breast Cancer Prediction</h3>
@endSection
@section('content')
  <div class="card-body">
      <form action="{{ route('imagePredict') }}" method="POST" enctype="multipart/form-data">
          @csrf
  <div class="form-group">
    <label for="Image">Upload Mammogram Image</label>
      <input type="file" class="form-control form-control-primary" name="image" id="image" accept="image/.pgm" required>

{{--      <input type="file" name="image" class="form-control form-control-primary" id="image" accept="image/*" onchange="previewFile(this);" required>--}}
    <small id="imageHelp" class="form-text text-muted">** Strictly, Only mammogram images should be uploaded</small>
  </div>
  <center>
{{--  <img id="previewImg" src="/examples/images/transparent.png">--}}
  </center><br/>
 <center>
  <button type="submit" class="btn btn-primary btn-out-dashed">Predict</button>
  <!--
  <button type="reset" class="btn btn-danger btn-out-dashed">Cancel</button>
  -->
</center>
</form>
</div>
@endsection
