@extends('dashboard.master')
@section('title')
    User profile
@endsection
@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show">
            <strong>{{ session()->get('message') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <h3 style="text-align:center">{{ Auth::user()->name }} 's Profile</h3>
    <div class="profile">
        <button class="my_file" data-toggle="modal" data-target="#exampleModalCenter"></button>
    </div>


    <!-- Modal for updating profile picture -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-pencil" aria-hidden="true"></i> &nbsp;
                        Change Plofile Picture</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/updatePicture" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Browse Your new Profile Picture</label>
                            <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Profile Picture</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card" style="text-align:center">

        <form method="post" action="/update">
            @csrf

            <div class="card-body">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <span class="input-group-text">Name</span>
                    </div>
                    <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                        <span class="input-group-text">User Name</span>
                    </div>
                    <input type="text" name="user" class="form-control" value="{{ Auth::user()->username }}">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <span class="input-group-text">Email Address</span>
                    </div>
                    <input type="text" name="mail" class="form-control" value="{{ Auth::user()->email }}">
                </div>



{{--                <div class="input-group input-group-sm">--}}
{{--                    <div class="input-group-prepend">--}}
{{--                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user"--}}
{{--                                aria-hidden="true"></i>Name</span>--}}
{{--                    </div>--}}
{{--                    <input type="text" name="name" class="form-control" aria-label="Large"--}}
{{--                        aria-describedby="inputGroup-sizing-sm" value="{{ Auth::user()->name }}">--}}
{{--                </div>--}}
{{--                <div class="input-group input-group-sm">--}}
{{--                    <div class="input-group-prepend">--}}
{{--                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user-o"--}}
{{--                                aria-hidden="true"></i>Username</span>--}}
{{--                    </div>--}}
{{--                    <input type="text" name="user" class="form-control" aria-label="Large"--}}
{{--                        aria-describedby="inputGroup-sizing-sm" value="{{ Auth::user()->username }}">--}}
{{--                </div>--}}
{{--                <div class="input-group input-group-sm">--}}
{{--                    <div class="input-group-prepend">--}}
{{--                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-envelope-o"--}}
{{--                                aria-hidden="true"></i>Email Address</span>--}}
{{--                    </div>--}}
{{--                    <input type="text" name="mail" class="form-control" aria-label="Large"--}}
{{--                        aria-describedby="inputGroup-sizing-sm" value="{{ Auth::user()->email }}">--}}
{{--                </div>--}}
                <button type="submit" class="btn btn-primary mb-2 btn-out-dashed" style="font-size:15px">Update</button>
            </div>
        </form>
    </div>
@endSection
