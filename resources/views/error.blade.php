@extends('dashboard.master')
@section('title')
    Error
@endsection
@section('pageHeader')
    <h3 class="card-header">{{$error_name}}</h3>
@endSection
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        <div class="card-header">
                            <strong><h4><i class="fa fa-exclamation-triangle fa-3x" aria-hidden="true" style="color:red"></i> Error </h4></strong>
                        </div>
                        <div class="card-block">
                        <h5>Ooops! An Error: <strong>{{$error }}</strong>. Please Try Again</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
