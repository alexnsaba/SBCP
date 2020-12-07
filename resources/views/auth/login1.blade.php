
@extends('layouts.app')

@section('content')

    <section class="login-block">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <form method="POST" class="md-float-material form-material" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center">
                            <span style="font-size: 25px">Smart Breast Cancer Predictor</span>
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">{{ __('Login') }}</h3>
                                    </div>
                                </div>
                                {{--
                                <div class="row m-b-20">
                                    {{-- <div class="col-md-6">
                                        --}}
                                        {{-- <button
                                            class="btn btn-facebook m-b-20 btn-block"><i
                                                class="icofont icofont-social-facebook"></i>facebook</button>--}}
                                        {{-- </div>--}}
                                    {{-- <div class="col-md-6">
                                        --}}
                                        {{-- <button
                                            class="btn btn-twitter m-b-20 btn-block"><i
                                                class="icofont icofont-social-twitter"></i>twitter</button>--}}
                                        {{-- </div>--}}
                                         {{--
                                </div>
                                --}}

                                <div class="form-group form-primary">
                                    <input id="username" type="text" name="username"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="form-bar"></span>
                                    <label for="username" class="float-label">{{ __('User Name') }}</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input id="password" type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="form-bar"></span>
                                    <label for="password" class="float-label">{{ __('Password') }}</label>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" name="remember" id="remember"
                                                    {{ old('remember') ? 'checked' : '' }}>
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right float-right">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="text-right f-w-600"> Forgot
                                                    Password?</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                    </div>
                                </div>
                                <p class="text-inverse text-left">Don't have an account?<a href="{{ route('register') }}"
                                        style="color: #0a6aa1"> <b>Register here </b></a></p>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>
@endsection
