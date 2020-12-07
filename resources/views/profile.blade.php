@extends('dashboard.master')
@section('title')
    User profile
@endsection
@section('content')
    <div class="card" style="text-align:center;">
        <h3>{{ Auth::user()->name }} 's Profile</h3>
        <div class="text-center">
            <span style="font-size: 25px"><img src="../files/assets/images/alex.png" height="170" width="170"
                    class="img-radius" alt="profile.png">
            </span>
        </div>
        <div class="card-body">
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>
        </div>
    </div>
@endSection
