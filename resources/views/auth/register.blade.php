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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <input id="name" type="text" name="name" required data-msg="Please enter your name" class="input-material{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus>
                                    <label for="name" class="label-material">{{ __('Name') }}</label>

                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input id="email" type="email" name="email" required data-msg="Please enter your email" class="input-material{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}">
                                    <label for="email" class="label-material">{{ __('E-Mail Address') }}</label>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material{{ $errors->has('password') ? ' is-invalid' : '' }}">
                                    <label for="password" class="label-material">{{ __('Password') }}</label>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input id="password_confirmation" type="password" name="password_confirmation" required data-msg="Please enter your password" class="input-material">
                                    <label for="password_confirmation" class="label-material">{{ __('Comfirm Password') }}</label>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                            </form>

                            <br><small>{{__('Do you have an account?')}} </small>
                            <a href="{{ route('login') }}" class="signup">{{__('Login')}}</a>
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
