@extends('layouts.app', ['appType' => 'auth'])

@section('content')
<div class="page login-page">
    <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
            <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                    <div class="info d-flex align-items-center">
                        <div class="content">
                            <div class="logo">
                                <h1>{{ env('APP_NAME') }}</h1>
                            </div>
                            <p>By Stiven Castillo</p>
                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <input id="login-email" type="email" name="email" required data-msg="Please enter your email" class="input-material{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>
                                    <label for="login-email" class="label-material">{{ __('E-Mail Address') }}</label>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material{{ $errors->has('password') ? ' is-invalid' : '' }}">
                                    <label for="login-password" class="label-material">{{ __('Password') }}</label>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </form>
                            <a href="{{ route('password.request') }}" class="forgot-pass">{{ __('Forgot Your Password?') }}</a>

                            <br><small>{{__('Do not have an account?')}} </small>
                            <a href="{{ route('register') }}" class="signup">{{__('Register')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @component('components.footer-auth')
    @endcomponent
</div>
@endsection
