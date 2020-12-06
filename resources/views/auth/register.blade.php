@extends('layouts.app1')

@section('content')
    <section class="login-block">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <form method="POST" action="{{ route('register') }} "class="md-float-material form-material">
                        @csrf
                        <div class="text-center">
                            <img src="../files/assets/images/ai.jpeg" width="100" height="100" style="border-radius: 50%;" alt="logo.png">

                            <span style="font-size: 25px">Smart Breast Cancer Predictor</span>
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">{{ __('Register') }}</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <span class="form-bar"></span>
                                    <label class="float-label">{{ __('Name') }}</label>
                                </div>

                                <div class="form-group form-primary">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <span class="form-bar"></span>
                                    <label class="float-label">{{ __('User Name') }}</label>
                                </div>


                                <div class="form-group form-primary">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <span class="form-bar"></span>
                                    <label class="float-label">{{ __('E-Mail Address') }}</label>
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">

                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <span class="form-bar"></span>
                                            <label class="float-label">{{ __('Password') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">

                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                            <span class="form-bar"></span>
                                            <label class="float-label">{{ __('Confirm Password') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">{{ __('Register') }}</button>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <p class="text-inverse text-left">Have an account?<a href="{{ route('login') }}" style="color: #0a6aa1"> <b>Login here </b></a></p>
                                    </div>
                                </div>
                                <hr />
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>
@endsection
