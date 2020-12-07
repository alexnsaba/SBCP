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
{{--  <button type="submit" id="btnFetch" class="btn btn-primary btn-out-dashed">Predict</button>--}}
     <button id="btnFetch" type="submit" class="btn btn-primary btn-out-dashed" >Predict</button>


     <!--
     <button type="reset" class="btn btn-danger btn-out-dashed">Cancel</button>
     -->
</center>
</form>
{{--      <div style="margin:3em;">--}}
{{--          <form class="form-inline" id="topicForm" action="" method="POST">--}}
{{--              <input type="text" id="inputTopic" name="topic" class="form-control mb-2 mr-sm-2" placeholder="Topic of interest" required autofocus/>--}}
{{--              <button type="button" id="btnFetch" class="btn btn-primary mb-2">Submit</button>--}}
{{--          </form>--}}
{{--      </div>--}}
  </div>
@endsection
