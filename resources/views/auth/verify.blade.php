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
                        <div class="card">
                            <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif

                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }},
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf

                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                </form>
                                    <p class="text-inverse text-left">After Verifying your Email <a href="{{ route('login') }}" style="color: #0a6aa1"> <b>Click Here to Login</b></a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>















{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Verify Your Email Address') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('resent'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ __('A fresh verification link has been sent to your email address.') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('Before proceeding, please check your email for a verification link.') }}--}}
{{--                    {{ __('If you did not receive the email') }},--}}
{{--                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">--}}
{{--                        @csrf--}}
{{--                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
