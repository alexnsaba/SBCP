@extends('dashboard.master')
@section('title')
    User profile
@endsection
@section('content')
    <div class="card" style="text-align:center;width: 60rem;margin-left:10rem">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>{{ session()->get('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <h3>{{ Auth::user()->name }} 's Profile</h3>
        <form method="post" action="/update">
            @csrf
            <div class="text-center">
                <span style="font-size: 25px"><img src="profileImages/{{ Auth::user()->photo}}" height="170" width="170"
                        class="img-radius" alt="profile.png">
                </span>
            </div>
            <div class="card-body">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa fa-user"
                                aria-hidden="true"></i>&nbsp;Name &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</span>
                    </div>
                    <input type="text" name="name" class="form-control" aria-label="Large"
                        aria-describedby="inputGroup-sizing-sm" value="{{ Auth::user()->name }}">
                </div>
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa fa-user-o"
                                aria-hidden="true"></i>&nbsp;Username &nbsp;&nbsp; &nbsp;</span>
                    </div>
                    <input type="text" name="user" class="form-control" aria-label="Large"
                        aria-describedby="inputGroup-sizing-sm" value="{{ Auth::user()->username }}">
                </div>
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa fa-envelope-o"
                                aria-hidden="true"></i>&nbsp;Email Address</span>
                    </div>
                    <input type="text" name="mail" class="form-control" aria-label="Large"
                        aria-describedby="inputGroup-sizing-sm" value="{{ Auth::user()->email }}">
                </div>
                <button type="submit" class="btn btn-primary mb-2 btn-out-dashed" style="font-size:20px">Update</button>
            </div>
        </form>
    </div>
@endSection
